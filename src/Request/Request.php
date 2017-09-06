<?php
namespace AliexApi\Request;

use AliexApi\Request\RequestInterface;
use AliexApi\Config\ConfigInterface;
use AliexApi\Operations\OperationInterface;

class Request implements RequestInterface{

    private $options = [];

    protected $requestScheme = 'http://gw.api.taobao.com/router/rest';

    protected $requestAuthScheme = 'https://gw.api.alibaba.com/openapi/param2/1/system.oauth2/getToken/%s';

    protected $config;

    public function __construct(array $options = [])
    {
        $this->options = [];
    }

    public function setConfig(ConfigInterface $config)
    {
        $this->config = $config;
    }

    public function perform(OperationInterface $operation)
    {
        $uri = $this->requestScheme;

        $data = $this->authSignature($operation);

        $return = $this->curlExec($uri, $data);

        if(@$return['error_code'] == '401' || @$return['exception'] == 'Request need user authorized'){
            if(!$this->refreshAccessToken()){
                return $this->perform($operation);
            }
        }

        return $return;
    }

    protected function refreshAccessToken()
    {
        $uri = sprintf($this->requestAuthScheme, $this->config->getApiKey());
        $data = array(
                'grant_type'    =>  'refresh_token',
                'client_id'     =>  $this->config->getApiKey(),
                'client_secret' =>  $this->config->getApiSecret(),
                'refresh_token' =>  $this->config->getRefreshToken()
            );
        $return = $this->curlExec($uri, $data);

        if(!@$return['access_token']) throw new \Exception("Aliex authorization error!");

        return false == $this->config->setAccessToken($return['access_token']);
    }

    protected function curlExec($uri, $data){
        $client = new \GuzzleHttp\Client();
        try {
            $res = $client->request('POST', $uri, ['form_params' => $data]);
            return json_decode($res->getBody()->getContents(),true);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            return json_decode($e->getResponse()->getBody(),true);
        }

    }

    protected function authSignature( $operation ){
        $code_arr = $operation->getOperationParameter();

        $code_arr['timestamp'] = date('Y-m-d H:i:s');
        $code_arr['v'] = '2.0';
        $code_arr['app_key'] = $this->config->getApiKey();
        $code_arr['method'] = $operation->getName();
        $code_arr['session'] = $this->config->getAccessToken();
        $code_arr['format'] = 'json';
        $code_arr['sign_method'] = 'md5';

        ksort($code_arr);
        $sign_str = $this->config->getApiSecret();
        foreach ($code_arr as $key=>$val){
            if(is_string($val) && "@" != substr($val, 0, 1))
                $sign_str .= "$key$val";
        }
        $sign_str .= $this->config->getApiSecret();

        $code_arr['sign'] = strtoupper(md5($sign_str));

        return $code_arr;
    }    
}