<?php 

use Imones\Database;
use Imones\vieta;
use Imones\Request;

$connection = Database::connect();
$vietos = new vieta($connection);
$page = intval(basename(Request::uri()));
if($page == 0) $page = 1;
if(isset($_POST['send'])) {
    $vietos->searchVietos($_POST);
} else {
    require 'view/pages/allMaps.view.php';
}