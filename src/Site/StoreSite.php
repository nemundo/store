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
    }

    public function loadContent()
    {
        (new StorePage())->render();
    }
}