<?php

namespace Nemundo\Store\Page;

use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Store\Com\Form\HtmlStoreForm;
use Nemundo\Store\Com\Form\TextStoreForm;
use Nemundo\Store\Parameter\StoreParameter;
use Nemundo\Store\Type\HtmlStoreType;
use Nemundo\Store\Type\TextStoreType;

class HtmlTextStorePage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $store = new HtmlStoreType();
        $store->storeId = (new StoreParameter())->getValue();

        $form = new HtmlStoreForm($this);
        $form->store = $store;
        $form->urlRefererRedirect = true;

        return parent::getContent();
    }
}