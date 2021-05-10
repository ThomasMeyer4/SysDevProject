<?php
    namespace App\models;

    class Inventory extends \App\core\Model {

        public function __construct() { 
            parent::__construct();
        }

        public function findByName($name){
            $stmt = self::$connection->prepare("SELECT * FROM inventory WHERE name = :name");
            $stmt->execute(['name'=>$name]);
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "App\\models\\Inventory");
            return $stmt->fetch();
        }
    
        public function findByInventoryID($inventory_id){
            $stmt = self::$connection->prepare("SELECT * FROM inventory WHERE inventory_id = :inventory_id");
            $stmt->execute(['inventory_id'=>$inventory_id]);
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "App\\models\\Inventory");
            return $stmt->fetch();
        }

        public function getQuantityByInventoryID($inventory_id){
            $stmt = self::$connection->prepare("SELECT quantity FROM inventory WHERE inventory_id = :inventory_id");
            $stmt->execute(['inventory_id'=>$inventory_id]);
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "App\\models\\Inventory");
            return $stmt->fetch();
        }

        public function findBySearch($search) {
            $stmt = self::$connection->prepare("SELECT * FROM inventory WHERE name LIKE :name");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "\\App\\models\\Inventory");
            $search = "%".$search."%";
            $stmt->execute(['search'=>$search]);
            return $stmt->fetchAll();
        }

        public function getAll() {
            $stmt = self::$connection->prepare("SELECT * FROM inventory");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "\\App\\models\\Inventory");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function searchByName($input){
            $stmt = self::$connection->query("SELECT * FROM inventory WHERE name LIKE '%$input%'");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "App\\models\\inventory");
            return $stmt->fetchAll();
        }

        public function insert(){
            $stmt = self::$connection->prepare("INSERT INTO inventory(name, quantity) VALUES (:name, :quantity)");
            $stmt->execute(['name'=>$this->name, 'quantity'=>$this->quantity]);
        }      

        public function updateQuantity($quantity){
            $stmt = self::$connection->prepare("UPDATE inventory SET quantity = :quantity WHERE inventory_id = :inventory_id");
            $stmt->execute(['inventory_id'=>$this->inventory_id, 'quantity'=>$quantity]);
        }

        public function delete(){
            $stmt = self::$connection->prepare("DELETE FROM inventory WHERE inventory_id=:inventory_id");
            $stmt->execute(['inventory_id' => $this->inventory_id]);
        }
    }
?>