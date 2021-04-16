<?php 

use Imones\Database;
use Imones\vieta;
use Imones\Request;

$connection = Database::connect();
$vietos = new vieta($connection);
$id = intval(basename(Request::uri()));
$vieta = $vietos->viewVietos($id);

require 'view/pages/viewVieta.view.php';