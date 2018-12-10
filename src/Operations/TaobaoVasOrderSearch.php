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
