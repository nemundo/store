<?php

namespace Nemundo\Store\Site\Editor;

use Nemundo\Admin\Site\AbstractEditIconSite;
use Nemundo\Store\Page\Editor\TextEditorPage;


class TextStoreEditorSite extends AbstractEditIconSite
{

    /**
     * @var TextStoreEditorSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Editieren';
        $this->url = 'text-store-edit';
        TextStoreEditorSite::$site = $this;
    }


    public function loadContent()
    {

        (new TextEditorPage())->render();

    }
}