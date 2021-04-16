<?php

namespace Imones;

use PDO;
use PDOException;

class vieta {
    protected $pdo;
    private $vardas;
    private $adresas;
    private $apibudinimas;
    private $nuotrauka;
    private $veikla;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function createVieta($vieta) {
        $this->vardas = $vieta['vardas'];
        $this->adresas = $vieta['adresas'];
        $this->apibudinimas = $vieta['apibudinimas'];
        $this->nuotrauka = $vieta['nuotrauka'];
        $this->veikla = $vieta['veikla'];

        $this->insertVieta();
    }

    public function insertVieta(){
        try {
            $query = "INSERT INTO `zemelapis` (`vardas`, `adresas`,  `apibudinimas`, `nuotrauka`, `veikla` ) VALUES (:vardas,  :adresas,  :apibudinimas, :nuotrauka, :veikla)";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':vardas', $this->vardas, PDO::PARAM_STR);
            $stmt->bindParam(':adresas', $this->adresas, PDO::PARAM_STR);
            $stmt->bindParam(':apibudinimas', $this->apibudinimas, PDO::PARAM_STR);
            $stmt->bindParam(':nuotrauka', $this->nuotrauka, PDO::PARAM_STR);
            $stmt->bindParam(':veikla', $this->veikla, PDO::PARAM_STR);

            $stmt->execute();

            header('Location: /');
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    public function allVietos($page){
        $stmt = $this->pdo->prepare(' SELECT * FROM zemelapis LIMIT 6 OFFSET ' . ($page - 1) * 6);

        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function viewVietos($id) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM zemelapis WHERE `id` = :id");
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    public function deleteVietos($id) {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM zemelapis WHERE `id` = :id");
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            header('Location:/');
        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    public function searchVietos($searchString){
        try {
            $search = '%'.$searchString['search']. '%';
            $stmt = $this->pdo->prepare("SELECT * FROM zemelapis WHERE `vardas` LIKE :searchString");
            $stmt->bindValue(":searchString", $search, PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if($result == []) {
                echo "Rezultatu nera";
            } else {
                header('Location:/vieta/'.$result['id']);
            }
        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }
    }

}