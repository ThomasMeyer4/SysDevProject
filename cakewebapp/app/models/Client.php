<?php
    namespace App\models;

    class Client extends \App\core\Model {

        public function __construct() { 
            parent::__construct();
        }

        public function findByUsername($username){
            $stmt = self::$connection->prepare("SELECT * FROM client WHERE username = :username");
            $stmt->execute(['username'=>$username]);
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "App\\models\\Client");
            return $stmt->fetch();
        }
    
        public function findByUserID($client_id){
            $stmt = self::$connection->prepare("SELECT * FROM client WHERE client_id = :client_id");
            $stmt->execute(['client_id'=>$client_id]);
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "App\\models\\Client");
            return $stmt->fetch();
        }

        public function findClientProfile($user_id){
            $stmt = self::$connection->prepare("SELECT * FROM client WHERE user_id = :user_id");
            $stmt->execute(['user_id'=>$user_id]);
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "App\\models\\Client");
            return $stmt->fetch();
        }

        public function findBySearch($search) {
            $stmt = self::$connection->prepare("SELECT * FROM client WHERE username LIKE :search");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "\\App\\models\\Client");
            $search = "%".$search."%";
            $stmt->execute(['search'=>$search]);
            return $stmt->fetchAll();
        }

        public function getAll() {
            $stmt = self::$connection->prepare("SELECT * FROM client");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "\\App\\models\\Client");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function insert(){
            $stmt = self::$connection->prepare("INSERT INTO client(first_name, last_name, address, phone, user_id) VALUES (:first_name, :last_name, :address, :phone, :user_id)");
            $stmt->execute(['first_name'=>$this->first_name, 'last_name'=>$this->last_name, 'address'=>$this->address, 'phone'=>$this->phone, 'user_id'=>$this->user_id]);
        }

        public function update2fa() {
            $stmt = self::$connection->prepare("UPDATE client SET token = :token WHERE client_id = :client_id");
            $stmt->execute(['token'=>$this->token, 'client_id'=>$this->client_id]);
        }        

        public function update(){
            $stmt = self::$connection->prepare("UPDATE client SET password_hash = :password_hash WHERE client_id = :client_id");
            $stmt->execute(['staff_id'=>$this->staff_id, 'password_hash'=>$this->password_hash]);
        }
    }
?>