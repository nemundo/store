<?php

namespace Nemundo\Store\Site\Editor;

use Nemundo\Admin\Site\AbstractEditIconSite;
use Nemundo\Store\Page\Editor\TextEditorPage;
use Nemundo\Store\Page\TextStorePage;


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

        (new TextEditorPage())->render();

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