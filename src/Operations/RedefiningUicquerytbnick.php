<?php
namespace AliexApi\Operations;

class RedefiningUicquerytbnick extends AbstractOperation
{
    public function getName()
    {
        return 'aliexpress.member.redefining.uicquerytbnick';
    }

    public function setLoginId($login_id)
    {
        $this->parameter['login_id'] = $login_id;
        return $this;
    }
}