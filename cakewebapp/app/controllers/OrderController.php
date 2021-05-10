<?php
    namespace App\controllers;

    #[\App\core\LoginFilter]
    class OrderController extends \App\core\Controller {
        function index(){

            if (isset($_POST["search"])){
                $order = new \App\models\Order();
                $orders = $order->findBySearch($_POST["input"]);
                $this->view('Order/orderSearchList', ['orders'=>$orders]);
            } else {
                $order = new \App\models\Order();
                $orders = $order->getAll();
                $confirmations = $order->countAllConfirmation();
                $this->view('Order/orderList', ['orders'=>$orders, 'confirmations'=>$confirmations]);
            }

            

            /*
if (isset($_POST["search"])){
				$product = new \App\models\Product();
				$product = $product->searchByName($_POST["input"]);
				$this->view('Product/productSearchList', ['product' => $product]);
			}else {
                $product = new \App\models\Product();
                $products = $product->getAll();
                $this->view('Product/productList', $products);
            }
        }
            */
        }

        function addNewOrder() {
            if(isset($_POST['action'])){
                $order = new \App\models\Order();
                if ($_POST['client_id'] == "")
                    $order->client_id = NULL;
                else 
                    $order->client_id = $_POST['client_id'];
                $order->description = $_POST['description'];
                $order->price = $_POST['price'];
                $order->insert();
                
                header('location:'.BASE.'/Order/index/');
                } else {
                    $this->view('Order/orderForm');
            }
        }

        function sale() {
            $order = new \App\models\Order();
            $sales = $order->getAllStatusComplete();
            $totalSale = $order->getSumCompletedPrice();
            $this->view('Order/saleList', ['sales'=>$sales, 'totalSale'=>$totalSale]);
        }
    }
?>