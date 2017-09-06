<?php
namespace AliexApi\Operations;

class ProductInfoList extends AbstractOperation
{
    public function getName()
    {
        return 'aliexpress.postproduct.redefining.findproductinfolistquery';
    }

    public function getOperationParameter()
    {
        return ['aeop_a_e_product_list_query'=>json_encode($this->parameter)];
    }

    public function setProductStatusType($productStatusType)
    {
        $this->parameter['product_status_type'] = $productStatusType;
        return $this;
    }

    public function setSubject($subject)
    {
        $this->parameter['subject'] = $subject;
        return $this;
    }

    public function setGroupId($groupId)
    {
        $this->parameter['group_id'] = $groupId;
        return $this;
    }

    public function setWsDisplay($wsDisplay)
    {
        $this->parameter['ws_display'] = $wsDisplay;
        return $this;
    }

    public function setOffLineTime($offLineTime)
    {
        $this->parameter['off_line_time'] = $offLineTime;
        return $this;
    }

    public function setProductId($productId)
    {
        $this->parameter['product_id'] = $productId;
        return $this;
    }

    public function setExceptedProductIds($exceptedProductIds)
    {
        $this->parameter['excepted_product_ids'] = $exceptedProductIds;
        return $this;
    }

    public function setPageSize($pageSize)
    {
        $this->parameter['page_size'] = $pageSize;
        return $this;
    }

    public function setCurrentPage($currentPage)
    {
        $this->parameter['current_page'] = $currentPage;
        return $this;
    }

    public function setOwnerMemberId($ownerMemberId)
    {
        $this->parameter['owner_member_id'] = $ownerMemberId;
        return $this;
    }
}