<?php
    namespace App\controllers;

    #[\App\core\LoginFilter]
    #[\App\core\StaffFilter]
    class SettingsController extends \App\core\Controller {
        function index(){
            $this->view('Settings/index');
        }
    }
?>