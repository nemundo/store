<?php
namespace Nemundo\Store\Data\TextStore;
use Nemundo\Model\Data\AbstractModelUpdate;
class TextStoreUpdate extends AbstractModelUpdate {
/**
* @var TextStoreModel
*/
public $model;

/**
* @var string
*/
public $text;

public function __construct() {
parent::__construct();
$this->model = new TextStoreModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->text, $this->text);
parent::update();
}
}