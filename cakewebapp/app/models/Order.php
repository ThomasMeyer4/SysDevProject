<?php
    namespace App\models;

    class Order extends \App\core\Model {

        public function __construct() { 
            parent::__construct();
        }

        public function findByOrderId($order_id){
            $stmt = self::$connection->prepare("SELECT * FROM cake_order WHERE order_id = :order_id");
            $stmt->execute(['order_id'=>$order_id]);
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "App\\models\\Order");
            return $stmt->fetch();
        }

        public function findBySearch($search) {
            $stmt = self::$connection->prepare("SELECT * FROM cake_order WHERE search LIKE :search");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "\\App\\models\\Order");
            $search = "%".$search."%";
            $stmt->execute(['search'=>$search]);
            return $stmt->fetchAll();
        }

        public function getAll() {
            $stmt = self::$connection->prepare("SELECT * FROM cake_order");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "\\App\\models\\Order");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function insert(){
            $stmt = self::$connection->prepare("INSERT INTO cake_order(client_id, description, date, confirmation, status, price) VALUES (:client_id, :description, UTC_TIMESTAMP(), :confirmation, :status, :price)");
            $stmt->execute(['client_id'=>$this->client_id, 'description'=>$this->description, 'confirmation'=>$this->confirmation, 'status'=>$this->status, 'price'=>$this->price]);
        }      

        public function update(){
            $stmt = self::$connection->prepare("UPDATE cake_order SET description = :description, confirmation = :confirmation, status = :status, price = :price WHERE order_id = :order_id");
            $stmt->execute(['description'=>$this->description, 'confirmation'=>$this->confirmation, 'status'=>$this->status, 'price'=>$this->price, 'order_id'=>$this->order_id]);
        }

        public function delete(){
            $stmt = self::$connection->prepare("DELETE FROM cake_order WHERE order_id=:order_id");
            $stmt->execute(['order_id' => $this->order_id]);
        }
    }
?>