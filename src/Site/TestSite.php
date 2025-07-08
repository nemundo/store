<?php

namespace Nemundo\Store\Site;

use Nemundo\Store\Page\TestPage;
use Nemundo\Web\Site\AbstractSite;

class TestSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'Test';
        $this->url = 'Test';
    }

    public function loadContent()
    {
        (new TestPage())->render();
    }
}