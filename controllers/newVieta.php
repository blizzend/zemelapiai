<?php 

use Imones\Database;
use Imones\vieta;
use Imones\Validation;

if(isset($_POST['send'])) {
    $connection = Database::connect();
    $vietos = new vieta($connection);
    $validation = Validation::newVietos($_POST);
    if($validation != 'Klaidu nerasta') {
        foreach ($validation as $klaida) {
            echo $klaida . '<br>';
        }
    } else {
    $vietos->createVieta($_POST);
    }
} else {
    require 'view/pages/newVieta.view.php';
}