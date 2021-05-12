<?php
    namespace App\models;

    class User extends \App\core\Model {

        public function __construct() { 
            parent::__construct();
        }

        public function findByUsername($username){
            $stmt = self::$connection->prepare("SELECT * FROM user WHERE username = :username");
            $stmt->execute(['username'=>$username]);
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "App\\models\\User");
            return $stmt->fetch();
        }
    
        public function findByUserID($user_id){
            $stmt = self::$connection->prepare("SELECT * FROM user WHERE user_id = :user_id");
            $stmt->execute(['user_id'=>$user_id]);
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "App\\models\\user");
            return $stmt->fetch();
        }


        public function findBySearch($search) {
            $stmt = self::$connection->prepare("SELECT * FROM user WHERE username LIKE :search");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "\\App\\models\\user");
            $search = "%".$search."%";
            $stmt->execute(['search'=>$search]);
            return $stmt->fetchAll();
        }

        public function getAll() {
            $stmt = self::$connection->prepare("SELECT * FROM user");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "\\App\\models\\user");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        
        public function updatePassword(){
            $stmt = self::$connection->prepare("UPDATE user SET password_hash = :password_hash WHERE user_id = :user_id");
            $stmt->execute(['password_hash'=>$this->password_hash,'user_id'=>$this->user_id]);
        }

        public function insert(){
            $stmt = self::$connection->prepare("INSERT INTO user(username, password_hash) VALUES (:username, :password_hash)");
            $stmt->execute(['username'=>$this->username, 'password_hash'=>$this->password_hash]);
        }

        public function insertStaff(){
            $stmt = self::$connection->prepare("INSERT INTO user(username, password_hash, is_staff) VALUES (:username, :password_hash, :is_staff)");
            $stmt->execute(['username'=>$this->username, 'password_hash'=>$this->password_hash, 'is_staff'=>$this->is_staff]);
        }

        public function update2fa() {
            $stmt = self::$connection->prepare("UPDATE user SET token = :token WHERE user_id = :user_id");
            $stmt->execute(['token'=>$this->token, 'user_id'=>$this->user_id]);
        }        

        public function update(){
            $stmt = self::$connection->prepare("UPDATE user SET password_hash = :password_hash WHERE user_id = :user_id");
            $stmt->execute(['user_id'=>$this->user_id, 'password_hash'=>$this->password_hash]);
        }

        
    }
?>