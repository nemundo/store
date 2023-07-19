<?php
namespace Nemundo\Store\Page;
use Nemundo\Admin\Com\Layout\AdminFlexboxLayout;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Com\Table\AdminTableHeader;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Store\Com\Tab\StoreTab;
use Nemundo\Store\Data\LargeTextStore\LargeTextStoreReader;

class LargeTextStorePage extends AbstractTemplateDocument {
public function getContent() {

    $layout = new AdminFlexboxLayout($this);
    new StoreTab($layout);

    $table = new AdminTable($layout);

    $reader = new LargeTextStoreReader();

    $header = new AdminTableHeader($table);
    $header->addText($reader->model->id->label);
    $header->addText($reader->model->largeText->label);

    foreach ($reader->getData() as $storeRow) {

        $row = new AdminTableRow($table);
        $row->addText($storeRow->id);
        $row->addText($storeRow->largeText);

    }

return parent::getContent();
}
}