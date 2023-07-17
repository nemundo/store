<?php
namespace Nemundo\Store\Install;
use Nemundo\App\Application\Type\Install\AbstractUninstall;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Nemundo\Store\Data\StoreModelCollection;
use Nemundo\Store\Application\StoreApplication;
use Nemundo\App\Application\Setup\ApplicationSetup;
class StoreUninstall extends AbstractUninstall {
public function uninstall() {
(new ModelCollectionSetup())->removeCollection(new StoreModelCollection());
}
}