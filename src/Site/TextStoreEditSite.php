<?php

namespace Nemundo\Store\Site;

use Nemundo\Admin\Site\AbstractEditIconSite;
use Nemundo\Admin\Template\AdminTemplate;
use Nemundo\Store\Form\TextStoreForm;
use Nemundo\Store\Parameter\StoreParameter;
use Nemundo\Store\Type\TextStoreType;


class TextStoreEditSite extends AbstractEditIconSite
{

    /**
     * @var TextStoreEditSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Editieren';
        $this->url = 'text-store-edit';
        TextStoreEditSite::$site = $this;
    }


    public function loadContent()
    {

        $store = new TextStoreType();
        $store->storeId = (new StoreParameter())->getValue();

        $page = new AdminTemplate();
        $page->pageTitle = 'Edit';

        $form = new TextStoreForm($page);
        $form->store = $store;
        $form->urlRefererRedirect = true;

        $page->render();

    }
}