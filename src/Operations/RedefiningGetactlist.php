<?php
namespace AliexApi\Operations;

class RedefiningGetactlist extends AbstractOperation
{
    public function getName()
    {
        return 'aliexpress.marketing.redefining.getactlist';
    }

    public function getOperationParameter()
    {
        return ['param_seller_coupon_activity_api_query'=>json_encode($this->parameter)];
    }

    public function setActivityName($activityName)
    {
        $this->parameter['activity_name'] = $activityName;
        return $this;
    }

    public function setMaxActivityStartDate($maxActivityStartDate)
    {
        $this->parameter['max_activity_start_date'] = $maxActivityStartDate;
        return $this;
    }

    public function setMinActivityStartDate($minActivityStartDate)
    {
        $this->parameter['min_activity_start_date'] = $minActivityStartDate;
        return $this;
    }

    public function setStatus($status)
    {
        $this->parameter['status'] = $status;
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

}