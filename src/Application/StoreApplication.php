<?php

namespace Nemundo\Store\Application;

use Nemundo\App\Application\Type\AbstractApplication;
use Nemundo\Store\Data\StoreModelCollection;
use Nemundo\Store\Install\StoreInstall;
use Nemundo\Store\Install\StoreUninstall;
use Nemundo\Store\Site\StoreSite;

class StoreApplication extends AbstractApplication
{
    protected function loadApplication()
    {
        $this->application = 'Store';
        $this->applicationId = 'e12c6446-8258-4a73-8751-61de00cc8554';
        $this->modelCollectionClass = StoreModelCollection::class;
        $this->installClass = StoreInstall::class;
        $this->uninstallClass = StoreUninstall::class;
        $this->appSiteClass = StoreSite::class;
    }
}