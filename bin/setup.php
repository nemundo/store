<?php

use Nemundo\Project\Install\ProjectInstall;

require "config.php";

(new \Nemundo\Db\Provider\MySql\Database\MySqlDatabase())->createDatabase();
(new ProjectInstall())->install();

(new \Nemundo\Store\Application\StoreApplication())->installApp();
