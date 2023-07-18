<?php

namespace Nemundo\Store\Site;

use Nemundo\Store\Page\StorePage;
use Nemundo\Web\Site\AbstractSite;

class StoreSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'Store';
        $this->url = 'store';

        new TextStoreEditSite($this);
        new LargeTextStoreEditSite($this);
        new HtmlTextStoreEditSite($this);

    }

    public function loadContent()
    {
        (new StorePage())->render();
    }
}