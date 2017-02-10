<?php
namespace AliexApi\Request;

use AliexApi\Config\ConfigInterface;
use AliexApi\Operations\OperationInterface;

interface RequestInterface
{
    public function setConfig(ConfigInterface $config);

    public function perform(OperationInterface $operation);
}