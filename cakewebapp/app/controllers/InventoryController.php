<?php
    namespace App\controllers;

    #[\App\core\LoginFilter]
    class InventoryController extends \App\core\Controller {   
        function index(){   
            if (isset($_POST["search"])){
				$inventory = new \App\models\Inventory();
				$items = $inventory->searchByName($_POST["input"]);
				$this->view('Inventory/inventorySearchList', ['items' => $items]);
			} else {
                $inventory = new \App\models\Inventory();
                $items = $inventory->getAll();
                $this->view('Inventory/inventoryList', $items);
            }
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

        function addQuantity($inventory_id) {
            $inventory = new \App\models\Inventory();
            $inventory = $inventory->findByInventoryID($inventory_id);
            $quantity = $inventory->getQuantityByInventoryID($inventory_id);   
            $quantity = $inventory->quantity + 1;  
            $inventory->updateQuantity($quantity);
            header('location:'.BASE.'/Inventory/index');
        }

        function removeQuantity($inventory_id) {
            $inventory = new \App\models\Inventory();
            $inventory = $inventory->findByInventoryID($inventory_id);
            $quantity = $inventory->getQuantityByInventoryID($inventory_id);
            if ($inventory->quantity > 0) {
                $quantity = $inventory->quantity - 1;       
                $inventory->updateQuantity($quantity);
            }
            
            header('location:'.BASE.'/Inventory/index');
        }
    }
    
    
?>