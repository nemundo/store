<?php

namespace Nemundo\Store\Com\Title;

use Nemundo\Admin\Com\Title\AdminSubtitle;
use Nemundo\Admin\Com\Title\AdminTitle;
use Nemundo\Store\Com\Base\AbstractStoreContainer;
use Nemundo\Store\Com\Button\TextStoreSiteButton;

class StoreSubtitle extends AbstractStoreContainer
{

    public function getContent()
    {

        $title = new AdminSubtitle($this);
        $title->content = $this->store->getValue();

        $btn = new TextStoreSiteButton($this);
        $btn->store = $this->store;

        return parent::getContent();

    }


}