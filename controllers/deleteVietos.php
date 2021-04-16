<?php

use Imones\Request;
use Imones\Database;
use Imones\vieta;

$connection = Database::connect();
$vietos = new vieta($connection);
$id =intval(basename(Request::uri()));

$company->deleteVietos($id);

