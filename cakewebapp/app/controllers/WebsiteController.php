<?php
    namespace App\controllers;
    class WebsiteController extends \App\core\Controller {   
        function homepage() {
            $this->view('Website/websiteHomePage');
        }

        function aboutUs() {
            $this->view('Website/aboutUsPage');
        }

        function contacts() {
            $this->view('Website/contactsPage');
        }

        function products() {
            if (isset($_POST["search"])){
                $product = new \App\models\Product();
                $products = $product->searchByName($_POST["input"]);
                $this->view('Website/productSearchList', $products);
            }else {
                $product = new \App\models\Product();
                $products = $product->getAll();
                $this->view('Website/productsPage', $products);
            } 
        }
    }
    
?>