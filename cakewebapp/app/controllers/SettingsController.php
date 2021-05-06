<?php
    namespace App\controllers;


    #[\App\core\LoginFilter]
    class SettingsController extends \App\core\Controller {
        function index(){
            $this->view('Settings/index');
        }
    }
?>