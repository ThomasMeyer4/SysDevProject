<?php
    namespace App\controllers;

    #[\App\core\LoginFilter]
    class OrderController extends \App\core\Controller {
        function index(){
            if (isset($_POST["search"])){
                $order = new \App\models\Order();
                $orders = $order->findBySearch($_POST["input"]);
                $this->view('Order/orderSearchList', $orders);
            } else {
                $order = new \App\models\Order();
                $orders = $order->getAll();
                $confirmations = $order->countAllConfirmation();
                $status = $order->countAllStatus();
                $this->view('Order/orderList', ['orders'=>$orders, 'confirmations'=>$confirmations, 'status'=>$status]);
            }
        }

        function addNewOrderByClient() {
            if(isset($_POST['action'])){
                $order = new \App\models\Order();
                $order->client_id = $_SESSION['client_id'];
                $order->description = $_POST['description'];
                $order->price = 0;
                $order->insert();
                header('location:'.BASE.'/Client/account');
                } else {
                    $this->view('Order/orderFormClient');
            }
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
                
                header('location:'.BASE.'/Order/index');
                } else {
                    $this->view('Order/orderForm');
            }
        }                                                                   

        #[\App\core\StaffFilter]
        function sale() {
            $order = new \App\models\Order();
            $sales = $order->getAllStatusComplete();
            $totalSale = $order->getSumCompletedPrice();
            $this->view('Order/saleList', ['sales'=>$sales, 'totalSale'=>$totalSale]);
        }

        function detail($order_id) {
            $order = new \App\models\Order();
            $order = $order->findByOrderId($order_id);
            $this->view('Order/viewOrderDetail', $order);
        }

        #[\App\core\StaffFilter]
        function modify($order_id){
            $order = new \App\models\Order();
            $order = $order->findByOrderId($order_id);
            if (isset($_POST["action"])){
                $order->confirmation = $_POST["confirmation"];
                $order->description = $_POST["description"];
                $order->status = $_POST["status"];
                $order->price = $_POST["price"];
                $order->modify();
                header('location:'.BASE.'/Order/index');
            } else {
                $this->view('Order/orderModify', ['order' => $order]);
            }
	    }
        
        #[\App\core\StaffFilter]
        function delete($order_id){
            $order = new \App\models\Order();
			$order = $order->findByOrderId($order_id);
			$order->delete(); 
			header('location:'.BASE.'/Order/index');
	    }
    } 
	

?>