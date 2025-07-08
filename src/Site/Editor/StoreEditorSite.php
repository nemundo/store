<?php

namespace Nemundo\Store\Site\Editor;

use Nemundo\Store\Usergroup\StoreUsergroup;
use Nemundo\Web\Site\AbstractSite;

class StoreEditorSite extends AbstractSite
{

    protected function loadSite()
    {

        $this->url = 'store-editor';
        $this->menuActive = false;
        $this->restricted = true;
        $this->addRestrictedUsergroup(new StoreUsergroup());

        new TextStoreEditorSite($this);
        new LargeTextStoreEditorSite($this);
        new HtmlTextStoreEditorSite($this);

    }

    public function loadContent()
    {

    }
}