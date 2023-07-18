<?php

namespace Nemundo\Store\Page;

use Nemundo\Admin\Com\Layout\AdminFlexboxLayout;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Com\Table\AdminTableHeader;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;
use Nemundo\Admin\Com\Title\AdminSubtitle;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\Store\Com\Button\HtmlStoreSiteButton;
use Nemundo\Store\Com\Button\LargeTextStoreSiteButton;
use Nemundo\Store\Com\Button\TextStoreSiteButton;
use Nemundo\Store\Data\LargeTextStore\LargeTextStoreReader;
use Nemundo\Store\Data\TextStore\TextStore;
use Nemundo\Store\Data\TextStore\TextStoreReader;
use Nemundo\Store\Type\HtmlStoreType;
use Nemundo\Store\Type\LargeTextStoreType;
use Nemundo\Store\Type\TextStoreType;
use Nemundo\StoreTest\Store\TestStore;

class StorePage extends AbstractTemplateDocument
{
    public function getContent()
    {

        /*$p = new Paragraph($this);
        $p->content = (new TestStore())->getValue();

        $btn = new TextStoreSiteButton($this);
        $btn->store = new TestStore();*/


        $store = new HtmlStoreType();  // new LargeTextStoreType();// new TextStoreType();
        $store->storeId = 'text_a2';

        $p = new Paragraph($this);
        $p->content = $store->getValue();


        $btn = new LargeTextStoreSiteButton($this);  // new HtmlStoreSiteButton($this);  // new TextStoreSiteButton($this);
        //$btn = new HtmlStoreSiteButton($this);  // new LargeTextStoreSiteButton($this);  // new HtmlStoreSiteButton($this);  // new TextStoreSiteButton($this);
        $btn->store = $store;


        $layout = new AdminFlexboxLayout($this);

        $subtitle = new AdminSubtitle($layout);
        $subtitle->content = 'Text';

        $table = new AdminTable($layout);


        $reader = new TextStoreReader();

        $header = new AdminTableHeader($table);
        $header->addText($reader->model->id->label);
        $header->addText($reader->model->text->label);

        foreach ($reader->getData() as $storeRow) {

            $row = new AdminTableRow($table);
            $row->addText($storeRow->id);
            $row->addText($storeRow->text);

        }


        $subtitle = new AdminSubtitle($layout);
        $subtitle->content = 'Large Text';

        $table = new AdminTable($layout);

        $reader = new LargeTextStoreReader();

        $header = new AdminTableHeader($table);
        $header->addText($reader->model->id->label);
        $header->addText($reader->model->largeText->label);

        foreach ($reader->getData() as $storeRow) {

            $row = new AdminTableRow($table);
            $row->addText($storeRow->id);
            $row->addText($storeRow->largeText);

        }






        return parent::getContent();
    }
}