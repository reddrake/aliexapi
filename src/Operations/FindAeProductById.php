<?php
namespace AliexApi\Operations;

class FindAeProductById extends AbstractOperation
{
    public function getName()
    {
        return 'api.findAeProductById';
    }

    public function setProductId($productId)
    {
        $this->parameter['productId'] = $productId;
        return $this;
    }
}