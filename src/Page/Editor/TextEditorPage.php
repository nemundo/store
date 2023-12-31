<?php

namespace Nemundo\Store\Page\Editor;

use Nemundo\Admin\Template\AdminTemplate;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Store\Com\Form\TextStoreForm;
use Nemundo\Store\Parameter\StoreParameter;
use Nemundo\Store\Type\TextStoreType;

class TextEditorPage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $store = new TextStoreType();
        $store->storeId = (new StoreParameter())->getValue();

        $form = new TextStoreForm($this);
        $form->store = $store;
        $form->urlRefererRedirect = true;

        return parent::getContent();

    }
}