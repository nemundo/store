<?php

namespace Nemundo\Store\Install;

use Nemundo\App\Application\Type\Install\AbstractInstall;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Nemundo\Store\Data\StoreModelCollection;
use Nemundo\Store\Usergroup\StoreUsergroup;
use Nemundo\User\Setup\UsergroupSetup;

class StoreInstall extends AbstractInstall
{
    public function install()
    {

        (new ModelCollectionSetup())
            ->addCollection(new StoreModelCollection());

        (new UsergroupSetup())
            ->addUsergroup(new StoreUsergroup());

    }
}