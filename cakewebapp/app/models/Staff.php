<?php
    namespace App\models;

    class Staff extends \App\core\Model {

        public function __construct() { 
            parent::__construct();
        }

        public function findByUsername($username){
            $stmt = self::$connection->prepare("SELECT * FROM staff WHERE username = :username");
            $stmt->execute(['username'=>$username]);
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "App\\models\\Staff");
            return $stmt->fetch();
        }
    
        public function findByUserID($staff_id){
            $stmt = self::$connection->prepare("SELECT * FROM staff WHERE staff_id = :staff_id");
            $stmt->execute(['staff_id'=>$staff_id]);
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "App\\models\\Staff");
            return $stmt->fetch();
        }

        public function findBySearch($search) {
            $stmt = self::$connection->prepare("SELECT * FROM staff WHERE username LIKE :search");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "\\App\\models\\Staff");
            $search = "%".$search."%";
            $stmt->execute(['search'=>$search]);
            return $stmt->fetchAll();
        }

        public function getAll() {
            $stmt = self::$connection->prepare("SELECT * FROM staff");
            $stmt->setFetchMode(\PDO::FETCH_GROUP|\PDO::FETCH_CLASS, "\\App\\models\\Staff");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function insert(){
            $stmt = self::$connection->prepare("INSERT INTO staff(first_name, last_name, position, username, password_hash) VALUES (:first_name, :last_name, :position, :username, :password_hash)");
            $stmt->execute(['first_name'=>$this->first_name, 'last_name'=>$this->last_name, 'position'=>$this->position, 'username'=>$this->username, 'password_hash'=>$this->password_hash]);
        }

        public function update2fa() {
            $stmt = self::$connection->prepare("UPDATE staff SET token = :token WHERE staff_id = :staff_id");
            $stmt->execute(['token'=>$this->token, 'staff_id'=>$this->staff_id]);
        }        

        public function update(){
            $stmt = self::$connection->prepare("UPDATE staff SET password_hash = :password_hash WHERE staff_id = :staff_id");
            $stmt->execute(['user_id'=>$this->user_id, 'password_hash'=>$this->password_hash]);
        }

        
    }
?>