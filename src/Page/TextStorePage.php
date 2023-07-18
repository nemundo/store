<?php

namespace Nemundo\Store\Page;

use Nemundo\Admin\Template\AdminTemplate;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Store\Com\Form\TextStoreForm;
use Nemundo\Store\Parameter\StoreParameter;
use Nemundo\Store\Type\TextStoreType;

class TextStorePage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $store = new TextStoreType();
        $store->storeId = (new StoreParameter())->getValue();

        /*$page = new AdminTemplate();
        $page->pageTitle = 'Edit';*/



        $form = new TextStoreForm($this);
        $form->store = $store;
        $form->urlRefererRedirect = true;




        return parent::getContent();
    }
}