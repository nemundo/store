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
use Nemundo\Store\Com\Div\StoreDiv;
use Nemundo\Store\Com\Paragraph\StoreParagraph;
use Nemundo\Store\Com\Tab\StoreTab;
use Nemundo\Store\Com\Title\StoreTitle;
use Nemundo\Store\Data\LargeTextStore\LargeTextStoreReader;
use Nemundo\Store\Data\TextStore\TextStore;
use Nemundo\Store\Data\TextStore\TextStoreReader;
use Nemundo\Store\Type\HtmlStoreType;
use Nemundo\Store\Type\LargeTextStoreType;
use Nemundo\Store\Type\TextStoreType;
use Nemundo\StoreTest\Store\TestLargeTextStore;
use Nemundo\StoreTest\Store\TestTextStore;

class StorePage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $layout = new AdminFlexboxLayout($this);
        new StoreTab($layout);

        /*$p = new Paragraph($this);
        $p->content = (new TestStore())->getValue();

        $btn = new TextStoreSiteButton($this);
        $btn->store = new TestStore();*/


        //$store = new HtmlStoreType();  // new LargeTextStoreType();// new TextStoreType();
        //$store = new LargeTextStoreType();
        //$store->storeId = 'text_a2';


       /* $title = new StoreTitle($this);
        $title->store = new TestTextStore();

        $p = new StoreParagraph($this);
        $p->store = new TestLargeTextStore();



        /*$div = new StoreDiv($this);
        $div->store = $store;*/

        //$btn = new LargeTextStoreSiteButton($this);  // new HtmlStoreSiteButton($this);  // new TextStoreSiteButton($this);
        //$btn = new HtmlStoreSiteButton($this);  // new LargeTextStoreSiteButton($this);  // new HtmlStoreSiteButton($this);  // new TextStoreSiteButton($this);
        //$btn->store = $store;


       /* $p = new Paragraph($this);
        $p->content = $store->getValue();

        $btn = new LargeTextStoreSiteButton($this);  // new HtmlStoreSiteButton($this);  // new TextStoreSiteButton($this);
        //$btn = new HtmlStoreSiteButton($this);  // new LargeTextStoreSiteButton($this);  // new HtmlStoreSiteButton($this);  // new TextStoreSiteButton($this);
        $btn->store = $store;*/


        /*$layout = new AdminFlexboxLayout($this);

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

        }*/






        return parent::getContent();
    }
}