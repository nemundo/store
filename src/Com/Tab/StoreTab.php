<?php

namespace Nemundo\Store\Com\Tab;

use Nemundo\Admin\Com\Tab\AdminTab;
use Nemundo\Store\Site\StoreSite;

class StoreTab extends AdminTab
{

    public function getContent()
    {

        $this->site = StoreSite::$site;
        return parent::getContent();

    }

}