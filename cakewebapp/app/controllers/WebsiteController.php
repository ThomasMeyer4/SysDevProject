<?php
    namespace App\controllers;
    class WebsiteController extends \App\core\Controller {   
        function index() {
            $this->view('Website/index');
        }

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
            $product = new \App\models\Product();
            $products = $product->getAll();
            $this->view('Website/productsPage', $products);
        }
    }
    
?>