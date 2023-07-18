<?php

namespace Nemundo\Store\Site;

use Nemundo\Admin\Site\AbstractEditIconSite;
use Nemundo\Store\Page\LargeTextStorePage;


class LargeTextStoreEditSite extends AbstractEditIconSite
{

    /**
     * @var LargeTextStoreEditSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Editieren';
        $this->url = 'larege-text-store-edit';
        LargeTextStoreEditSite::$site = $this;
    }


    public function loadContent()
    {

        (new LargeTextStorePage())->render();

    }
}