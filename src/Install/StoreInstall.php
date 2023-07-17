<?php
namespace Nemundo\Store\Install;
use Nemundo\App\Application\Type\Install\AbstractInstall;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Nemundo\Store\Data\StoreModelCollection;
use Nemundo\Store\Application\StoreApplication;
use Nemundo\App\Application\Setup\ApplicationSetup;
class StoreInstall extends AbstractInstall {
public function install() {
(new ModelCollectionSetup())->addCollection(new StoreModelCollection());
}
}