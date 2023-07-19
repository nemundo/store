<?php

namespace Nemundo\Store\Com\Div;

use Nemundo\Html\Block\ContentDiv;
use Nemundo\Html\Container\AbstractHtmlContainer;
use Nemundo\Store\Com\Button\HtmlStoreSiteButton;
use Nemundo\Store\Type\AbstractLargeTextStoreType;

class StoreDiv extends AbstractHtmlContainer
{


    /**
     * @var AbstractLargeTextStoreType
     */
    public $store;

    public function getContent()
    {


        $div = new ContentDiv($this);
        $div->content = $this->store->getValue();

        $btn = new HtmlStoreSiteButton($this);
        $btn->store = $this->store;



        return parent::getContent();

    }

}