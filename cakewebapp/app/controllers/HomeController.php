<?php
    namespace App\controllers;
    #[\App\core\LoginFilter]
    class HomeController extends \App\core\Controller {   
        function staffHomepage() {
            $order = new \App\models\Order();
            $orders = $order->getAll();
            $confirmations = $order->countAllConfirmation();
            $this->view('Home/staffHomepage', ['orders'=>$orders, 'confirmations'=>$confirmations]);
        }
    }
?>