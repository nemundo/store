<?php

namespace Nemundo\Store\Site\Editor;

use Nemundo\Admin\Site\AbstractEditIconSite;
use Nemundo\Store\Page\Editor\HtmlTextStoreEditorPage;


class HtmlTextStoreEditorSite extends AbstractEditIconSite
{

    /**
     * @var LargeTextStoreEditorSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Editieren';
        $this->url = 'html-text-store-edit';
        HtmlTextStoreEditorSite::$site = $this;
    }


    public function loadContent()
    {

        (new HtmlTextStoreEditorPage())->render();

    }
}