<?php

namespace Nemundo\Store\Page;

use Nemundo\Admin\Com\Hr\AdminHr;
use Nemundo\Admin\Com\Layout\AdminFlexboxLayout;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Store\Com\Div\HtmlStoreDiv;
use Nemundo\Store\Com\Paragraph\StoreParagraph;
use Nemundo\Store\Com\Tab\StoreTab;
use Nemundo\Store\Com\Title\StoreTitle;
use Nemundo\StoreTest\Store\TestLargeTextStore;
use Nemundo\StoreTest\Store\TestTextStore;

class TestPage extends AbstractTemplateDocument
{
    public function getContent()
    {


        $layout = new AdminFlexboxLayout($this);
        new StoreTab($layout);

        $title = new StoreTitle($layout);
        $title->store = new TestTextStore();

        new AdminHr($layout);

        $p = new StoreParagraph($layout);
        $p->store = new TestLargeTextStore();

        new AdminHr($layout);

        $div = new HtmlStoreDiv($layout);
        $div->store = new TestLargeTextStore();

        new AdminHr($layout);

        return parent::getContent();
    }
}