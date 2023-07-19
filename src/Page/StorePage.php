<?php

namespace Nemundo\Store\Page;

use Nemundo\Admin\Com\Layout\AdminFlexboxLayout;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Store\Com\Tab\StoreTab;

class StorePage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $layout = new AdminFlexboxLayout($this);
        new StoreTab($layout);

        return parent::getContent();
    }
}