<?php

namespace Nemundo\Store\Install;

use Nemundo\App\Application\Type\Install\AbstractUninstall;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Nemundo\Store\Data\StoreModelCollection;

class StoreUninstall extends AbstractUninstall
{
    public function uninstall()
    {
        (new ModelCollectionSetup())->removeCollection(new StoreModelCollection());
    }
}