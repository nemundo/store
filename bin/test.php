<?php

use Nemundo\Project\Install\ProjectInstall;

require "config.php";


(new \Nemundo\StoreTest\Store\TestLargeTextStore())->setValue('asdfasdfasdf');

(new \Nemundo\Core\Debug\Debug())->write((new \Nemundo\StoreTest\Store\TestLargeTextStore())->getValue());