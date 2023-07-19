<?php

namespace Nemundo\Store\Com\Title;

use Nemundo\Admin\Com\Title\AdminTitle;
use Nemundo\Html\Block\ContentDiv;
use Nemundo\Store\Com\Base\AbstractStoreContainer;
use Nemundo\Store\Com\Button\HtmlStoreSiteButton;
use Nemundo\Store\Com\Button\TextStoreSiteButton;

class StoreTitle extends AbstractStoreContainer
{

    public function getContent()
    {

        $title = new AdminTitle($this);
        $title->content = $this->store->getValue();

        $btn = new TextStoreSiteButton($this);
        $btn->store = $this->store;

        return parent::getContent();

    }


}