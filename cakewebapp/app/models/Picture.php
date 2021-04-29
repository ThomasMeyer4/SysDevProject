<?php
    namespace App\models;

    class Picture extends \App\core\Model {

        public function __construct() { 
            parent::__construct();
        }

        public function findByPictureId($picture_id){
            $stmt = self::$connection->prepare("SELECT * FROM picture WHERE picture_id = :picture_id");
            $stmt->execute(['picture_id'=>$picture_id]);
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "App\\models\\Picture");
            return $stmt->fetch();
        }

        public function getAll() {
            $stmt = self::$connection->prepare("SELECT * FROM picture");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "\\App\\models\\Picture");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function insert(){
            $stmt = self::$connection->prepare("INSERT INTO picture(order_id, filename) VALUES (:order_id, :filename)");
            $stmt->execute(['order_id'=>$this->order_id, 'filename'=>$this->filename]);
        }      

        // public function update(){
        //     $stmt = self::$connection->prepare("UPDATE picture SET description = :description, confirmation = :confirmation, status = :status, price = :price WHERE order_id = :order_id");
        //     $stmt->execute(['description'=>$this->description, 'confirmation'=>$this->confirmation, 'status'=>$this->status, 'price'=>$this->price, 'order_id'=>$this->order_id]);
        // }

        public function delete(){
            $stmt = self::$connection->prepare("DELETE FROM picture WHERE picture_id=:picture_id");
            $stmt->execute(['picture_id' => $this->picture_id]);
        }
    }
?>