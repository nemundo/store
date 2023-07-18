<?php

namespace Nemundo\Store\Page;

use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Store\Com\Form\LargeTextStoreForm;
use Nemundo\Store\Parameter\StoreParameter;
use Nemundo\Store\Type\LargeTextStoreType;

class LargeTextStorePage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $store = new LargeTextStoreType();
        $store->storeId = (new StoreParameter())->getValue();

        $form = new LargeTextStoreForm($this);
        $form->store = $store;
        $form->urlRefererRedirect = true;

        return parent::getContent();
    }
}