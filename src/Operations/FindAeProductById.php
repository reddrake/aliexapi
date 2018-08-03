<?php
namespace AliexApi\Operations;

class FindAeProductById extends AbstractOperation
{
    public function getName()
    {
        return 'aliexpress.postproduct.redefining.findaeproductbyid';
    }

    public function setProductId($productId)
    {
        $this->parameter['product_id'] = $productId;
        return $this;
    }
}