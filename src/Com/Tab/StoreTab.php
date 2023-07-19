<?php

namespace Nemundo\Store\Com\Tab;

use Nemundo\Admin\Com\Tabs\AdminSiteTabs;
use Nemundo\Store\Site\StoreSite;

class StoreTab extends AdminSiteTabs
{

    public function getContent()
    {

        $this->site = StoreSite::$site;

        return parent::getContent();
    }

}