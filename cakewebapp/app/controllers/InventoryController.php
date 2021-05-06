<?php
    namespace App\controllers;


    #[\App\core\LoginFilter]
    class InventoryController extends \App\core\Controller {   
        function index(){
            $inventory = new \App\models\Inventory();
            $items = $inventory->getAll();
            $this->view('Inventory/inventoryList', $items);
        }

        function addNewItem() {
            if(isset($_POST['action'])){
               $inventory = new \App\models\Inventory();
               $inventory->name = $_POST['name'];
               $inventory->quantity = $_POST['quantity'];
               $inventory->insert();
               header('location:'.BASE.'/Inventory/index/');
            } else {
                $this->view('Inventory/inventoryForm');
            }
        }

        function addQuantity($inventory_id, $quantity) {
            $inventory = new \App\models\Inventory();
            $inventory = $inventory->findByInventoryID($inventory_id);         
            $inventory->updateQuantity($quantity);
        }
    }
    
    
?>