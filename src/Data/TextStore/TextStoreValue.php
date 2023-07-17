<?php
namespace Nemundo\Store\Data\TextStore;
class TextStoreValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var TextStoreModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TextStoreModel();
}
}