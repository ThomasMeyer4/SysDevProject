<?php
    namespace App\models;

    class Product extends \App\core\Model {

        public function __construct() { 
            parent::__construct();
        }

        public function findByName($name){
            $stmt = self::$connection->prepare("SELECT * FROM product WHERE name = :name");
            $stmt->execute(['name'=>$name]);
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "App\\models\\Product");
            return $stmt->fetch();
        }
    
        public function findByProductID($product_id){
            $stmt = self::$connection->prepare("SELECT * FROM product WHERE product_id = :product_id");
            $stmt->execute(['product_id'=>$product_id]);
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "App\\models\\Product");
            return $stmt->fetch();
        }

        public function searchByName($input){
            $stmt = self::$connection->query("SELECT * FROM product WHERE name LIKE '%$input%'");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "App\\models\\product");
            return $stmt->fetchAll();
        }

        public function getAll() {
            $stmt = self::$connection->prepare("SELECT * FROM product");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "\\App\\models\\Product");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function insert(){
            $stmt = self::$connection->prepare("INSERT INTO product(name, staff_id, description, price, filename) VALUES (:name, :staff_id, :description, :price, :filename)");
            $stmt->execute(['name'=>$this->name, 'staff_id'=>$this->staff_id, 'description'=>$this->description, 'price'=>$this->price, 'filename'=>$this->filename]);
        }      

        public function updateDescription(){
            $stmt = self::$connection->prepare("UPDATE product SET description = :description WHERE product_id = :product_id");
            $stmt->execute(['product_id'=>$this->product_id, 'description'=>$this->description]);
        }

        public function updatePrice(){
            $stmt = self::$connection->prepare("UPDATE product SET price = :price WHERE product_id = :product_id");
            $stmt->execute(['product_id'=>$this->product_id, 'price'=>$this->price]);
        }

        public function delete(){
		    $stmt = self::$connection->prepare("DELETE FROM product WHERE product_id=:product_id");
		    $stmt->execute(['product_id'=>$this->product_id]);
	    }

        public function modify(){
            $stmt = self::$connection->prepare("UPDATE product SET name = :name, description = :description, price = :price WHERE product_id = :product_id");
            $stmt->execute(['product_id'=>$this->product_id, 'name'=>$this->name,'description'=>$this->description,'price'=>$this->price]);
        }

    }
?>