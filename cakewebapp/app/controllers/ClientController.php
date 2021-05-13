<?php
    namespace App\controllers;
    #[\App\core\LoginFilter]
    class ClientController extends \App\core\Controller {   
        function homepage() {
            $this->view('Client/websiteHomePage');
        }

        function aboutUs() {
            $this->view('Client/aboutUsPage');
        }

        function contacts() {
            $this->view('Client/contactsPage');
        }

        function products() {
            if (isset($_POST["search"])){
                $product = new \App\models\Product();
                $products = $product->searchByName($_POST["input"]);
                $this->view('Client/productSearchList', $products);
            }else {
                $product = new \App\models\Product();
                $products = $product->getAll();
                $this->view('Client/productsPage', $products);
            } 
        }

        function account() {
            $order = new \App\models\Order();
            $client = new \App\models\Client();
            $client = $client->findClientProfile($_SESSION['user_id']);
            $client_id = $client->client_id;
            $_SESSION['client_id'] = $client->client_id;
            $orders = $order->getAllRequestFromClient($client_id);
            $this->view('Client/accountPage', $orders);
        }
    }
?>