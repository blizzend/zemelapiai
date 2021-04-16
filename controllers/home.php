<?php 

use Imones\Database;
use Imones\vieta;
$connection = Database::connect();
$vietos = new vieta($connection);

if(isset($_POST['send'])) {
    $vietos->searchVietos($_POST);
} else {
require 'view/pages/home.view.php';
}