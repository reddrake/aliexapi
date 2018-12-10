<?php

namespace AliexApi\Operations;

class TaobaoVasOrderSearch extends AbstractOperation
{
    public function getName()
    {
        return 'taobao.vas.order.search';
    }

    public function setArticleCode($article_code)
    {
        $this->parameter['article_code'] = $article_code;
        return $this;
    }

    public function setItemCode($item_code)
    {
        $this->parameter['item_code'] = $item_code;
        return $this;
    }

    public function setNick($nick)
    {
        $this->parameter['nick'] = $nick;
        return $this;
    }

    public function setStartCreated($start_created)
    {
        $this->parameter['start_created'] = $start_created;
        return $this;
    }

    public function setEndCreated($end_created)
    {
        $this->parameter['end_created'] = $end_created;
        return $this;
    }

    public function setBizType($biz_type)
    {
        $this->parameter['biz_type'] = $biz_type;
        return $this;
    }

    public function setBizOrderId($biz_order_id)
    {
        $this->parameter['biz_order_id'] = $biz_order_id;
        return $this;
    }

    public function setOrderId($order_id)
    {
        $this->parameter['order_id'] = $order_id;
        return $this;
    }

    public function setPageSize($page_size)
    {
        $this->parameter['page_size'] = $pageSize;
        return $this;
    }

    public function setPageNo($page_no)
    {
        $this->parameter['page_no'] = $page_no;
        return $this;
    }
}
