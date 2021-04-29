<?php
    namespace App\core;
    
    #[\Attribute]
    class LoginFilter {
        public function execute() {
            if (!isset($_SESSION['staff_id'])){
                header('location:'.BASE.'/Login/login');
            }
        }
    }
?>
