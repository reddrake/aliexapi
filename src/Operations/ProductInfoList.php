<?php
namespace AliexApi\Operations;

class ProductInfoList extends AbstractOperation
{
    public function getName()
    {
        return 'api.findProductInfoListQuery';
    }

    public function setProductStatusType($productStatusType)
    {
        $this->parameter['productStatusType'] = $productStatusType;
        return $this;
    }

    public function setSubject($subject)
    {
        $this->parameter['subject'] = $subject;
        return $this;
    }

    public function setGroupId($groupId)
    {
        $this->parameter['groupId'] = $groupId;
        return $this;
    }

    public function setWsDisplay($wsDisplay)
    {
        $this->parameter['wsDisplay'] = $wsDisplay;
        return $this;
    }

    public function setOffLineTime($offLineTime)
    {
        $this->parameter['offLineTime'] = $offLineTime;
        return $this;
    }

    public function setProductId($productId)
    {
        $this->parameter['productId'] = $productId;
        return $this;
    }

    public function setExceptedProductIds($exceptedProductIds)
    {
        $this->parameter['exceptedProductIds'] = $exceptedProductIds;
        return $this;
    }

    public function setPageSize($pageSize)
    {
        $this->parameter['pageSize'] = $pageSize;
        return $this;
    }

    public function setCurrentPage($currentPage)
    {
        $this->parameter['currentPage'] = $currentPage;
        return $this;
    }
}