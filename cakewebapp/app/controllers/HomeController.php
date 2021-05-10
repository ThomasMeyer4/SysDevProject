<?php
    namespace App\controllers;
    #[\App\core\LoginFilter]
    class HomeController extends \App\core\Controller {   
        function staffHomepage() {
            $this->view('Home/staffHomepage', $_SESSION['user_id']);
        }
    }
    
?>