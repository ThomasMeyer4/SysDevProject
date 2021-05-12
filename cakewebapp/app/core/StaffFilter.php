<?php
    namespace App\core;
    #[\Attribute]
    class StaffFilter {
        public function execute() {
            if (!isset($_SESSION['is_staff'])){
                header('location:'.BASE.'/Website/websiteHomePage');
            }
        }
    }
?>