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

        public function findBySearch($search) {
            $stmt = self::$connection->prepare("SELECT * FROM product WHERE name LIKE :name");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "\\App\\models\\Product");
            $search = "%".$search."%";
            $stmt->execute(['search'=>$search]);
            return $stmt->fetchAll();
        }

        public function getAll() {
            $stmt = self::$connection->prepare("SELECT * FROM product");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "\\App\\models\\Product");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function insert(){
            $stmt = self::$connection->prepare("INSERT INTO product(name, picture_id, description, price) VALUES (:name, :picture_id, :description, :description)");
            $stmt->execute(['name'=>$this->name, 'picture_id'=>$this->picture_id, 'description'=>$this->description, 'description'=>$this->description]);
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
		    $stmt->execute(['product_id' => $this->product_id]);
	    }

    }
?>