<?php
    namespace App\controllers;


    #[\App\core\LoginFilter]
    class HomeController extends \App\core\Controller {   
        
        function index() {
            $this->view('Home/home', $_SESSION['staff_id']);
        }
    }
    
?>