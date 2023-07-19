<?php

namespace Nemundo\Store\Site\Editor;

use Nemundo\Admin\Site\AbstractEditIconSite;
use Nemundo\Store\Page\Editor\HtmlTextStoreEditorPage;


class HtmlTextStoreEditSite extends AbstractEditIconSite
{

    /**
     * @var LargeTextStoreEditSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Editieren';
        $this->url = 'html-text-store-edit';
        HtmlTextStoreEditSite::$site = $this;
    }


    public function loadContent()
    {

        (new HtmlTextStoreEditorPage())->render();

        /*$store = new TextStoreType();
        $store->storeId = (new StoreParameter())->getValue();

        $page = new AdminTemplate();
        $page->pageTitle = 'Edit';



        $form = new TextStoreForm($page);
        $form->store = $store;
        $form->urlRefererRedirect = true;

        $page->render();*/

    }
}