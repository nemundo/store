<?php

namespace Nemundo\Store\Site\Editor;

use Nemundo\Admin\Site\AbstractEditIconSite;
use Nemundo\Store\Page\Editor\LargeTextEditorPage;
use Nemundo\Store\Page\LargeTextStorePage;


class LargeTextStoreEditorSite extends AbstractEditIconSite
{

    /**
     * @var LargeTextStoreEditorSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Editieren';
        $this->url = 'larege-text-store-edit';
        LargeTextStoreEditorSite::$site = $this;
    }


    public function loadContent()
    {

        (new LargeTextEditorPage())->render();

    }
}