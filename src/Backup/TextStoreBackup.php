<?php

namespace Nemundo\Store\Backup;

use Nemundo\App\Backup\Type\AbstractBackup;
use Nemundo\Store\Data\LargeTextStore\LargeTextStoreReader;
use Nemundo\Store\Data\TextStore\TextStoreReader;

class TextStoreBackup extends AbstractBackup
{

    protected function loadBackup()
    {
        $this->filename = 'store_text.json';
    }


    protected function loadExport()
    {

        $reader = new TextStoreReader();
        foreach ($reader->getData() as $storeRow) {

            $row = [];
            $row['id'] = $storeRow->id;
            $row['text'] = $storeRow->text;

        }

    }


    protected function onImport($jsonRow)
    {
        // TODO: Implement onImport() method.
    }

}