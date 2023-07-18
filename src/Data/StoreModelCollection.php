<?php
namespace Nemundo\Store\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class StoreModelCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \Nemundo\Store\Data\LargeTextStore\LargeTextStoreModel());
$this->addModel(new \Nemundo\Store\Data\NumberStore\NumberStoreModel());
$this->addModel(new \Nemundo\Store\Data\Store\StoreModel());
$this->addModel(new \Nemundo\Store\Data\TextStore\TextStoreModel());
}
}