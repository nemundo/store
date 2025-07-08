<?php

namespace Nemundo\Store\Site;

use Nemundo\Store\Page\StorePage;
use Nemundo\Store\Site\Editor\HtmlTextStoreEditorSite;
use Nemundo\Store\Site\Editor\LargeTextStoreEditorSite;
use Nemundo\Store\Site\Editor\TextStoreEditorSite;
use Nemundo\Store\Usergroup\StoreUsergroup;
use Nemundo\Web\Site\AbstractSite;

class StoreSite extends AbstractSite
{

    /**
     * @var StoreSite
     */
    public static $site;


    protected function loadSite()
    {
        $this->title = 'Store';
        $this->url = 'store';
        $this->restricted = true;
        $this->addRestrictedUsergroup(new StoreUsergroup());

        new TextStoreSite($this);
        new LargeTextSite($this);
        new NumberStoreSite($this);

        StoreSite::$site = $this;

    }

    public function loadContent()
    {
        (new StorePage())->render();
    }
}