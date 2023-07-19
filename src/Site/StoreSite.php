<?php

namespace Nemundo\Store\Site;

use Nemundo\Store\Page\StorePage;
use Nemundo\Store\Site\Editor\HtmlTextStoreEditSite;
use Nemundo\Store\Site\Editor\LargeTextStoreEditSite;
use Nemundo\Store\Site\Editor\TextStoreEditSite;
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

        new TextStoreSite($this);
        new LargeTextSite($this);
        new NumberStoreSite($this);
        new TestSite($this);


        new TextStoreEditSite($this);
        new LargeTextStoreEditSite($this);
        new HtmlTextStoreEditSite($this);

        StoreSite::$site = $this;

    }

    public function loadContent()
    {
        (new StorePage())->render();
    }
}