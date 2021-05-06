<?php
    namespace App\models;

    class Sales extends \App\core\Model {

        public function __construct() { 
            parent::__construct();
        }

        public function findBySaleId($sale_id){
            $stmt = self::$connection->prepare("SELECT * FROM sales WHERE sale_id = :sale_id");
            $stmt->execute(['sale_id'=>$sale_id]);
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "App\\models\\Sales");
            return $stmt->fetch();
        }

        public function findBySearch($search) {
            $stmt = self::$connection->prepare("SELECT * FROM sale WHERE search LIKE :search");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "\\App\\models\\Sales");
            $search = "%".$search."%";
            $stmt->execute(['search'=>$search]);
            return $stmt->fetchAll();
        }

        public function getAll() {
            $stmt = self::$connection->prepare("SELECT * FROM sale");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "\\App\\models\\Sale");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function getTotalPrice() {
            $stmt = self::$connection->prepare("SELECT order.price FROM order, sale WHERE order.order_id=sale.order_id");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "\\App\\models\\Sale");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function insert(){
            $stmt = self::$connection->prepare("INSERT INTO sale(order_id) VALUES (:order_id)");
            $stmt->execute(['order_id'=>$this->order_id]);
        }      

        public function update(){
            //$stmt = self::$connection->prepare("UPDATE cake_order SET description = :description, confirmation = :confirmation, status = :status, price = :price WHERE order_id = :order_id");
            //$stmt->execute(['description'=>$this->description, 'confirmation'=>$this->confirmation, 'status'=>$this->status, 'price'=>$this->price, 'order_id'=>$this->order_id]);
        }

        public function delete(){
            $stmt = self::$connection->prepare("DELETE FROM sale WHERE sale_id=:sale_id");
            $stmt->execute(['sale_id' => $this->sale_id]);
        }
    }
?>