<?php 

use Imones\Database;
use Imones\vieta;
use Imones\Request;

$connection = Database::connect();
$vietos = new vieta($connection);
$id = intval(basename(Request::uri()));

require 'view/pages/popularVietos.view.php';