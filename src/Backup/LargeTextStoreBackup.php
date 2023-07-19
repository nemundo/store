<?php

namespace Nemundo\Store\Backup;

use Nemundo\Admin\Com\Table\AdminTableHeader;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;
use Nemundo\App\Backup\Type\AbstractBackup;
use Nemundo\Store\Data\LargeTextStore\LargeTextStoreReader;

class LargeTextStoreBackup extends AbstractBackup
{

    protected function loadBackup()
    {
        $this->filename = 'store_large_text.json';
    }


    protected function loadExport()
    {

        $reader = new LargeTextStoreReader();

        foreach ($reader->getData() as $storeRow) {

            $row = [];
            $row['id'] = $storeRow->id;
            $row['large_text'] = $storeRow->largeText;

        }




    }


    protected function onImport($jsonRow)
    {
        // TODO: Implement onImport() method.
    }

}