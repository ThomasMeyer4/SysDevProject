<?php
    namespace App\controllers;

    #[\App\core\LoginFilter]
    class ProductController extends \App\core\Controller {
        function index(){
            // $product = new \App\models\Product();
            // $products = $product->getAll();
            // $this->view('Product/productList', $products);
            // if (isset($_POST["action"])){
			// 	$product = new \App\models\Product();
			// 	$product = $product->findBySearch($_POST["search_term"]);
			// 	$this->view('Product/productSearchList', $product);
			// } 
            
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

        function addProduct() {
            if(isset($_POST['action'])){
                if(isset($_FILES['myImage'])){
                    $check = getimagesize($_FILES['myImage']['tmp_name']);
                    $allowedTypes = ['image/gif','image/jpeg','image/png'];
                    if($check !== false && in_array($check['mime'], $allowedTypes)){
                        $extension = ['image/gif'=>'gif','image/jpeg'=>'jpg','image/png'=>'png'];
                        $extension = $extension[$check['mime']];
                        $target_folder = 'uploads/';
                        $targetFile = uniqid().".$extension";

                        if(move_uploaded_file($_FILES['myImage']['tmp_name'], $target_folder.$targetFile)){
                            $product = new \App\models\Product();
                            $product->staff_id = $_SESSION['staff_id'];
                            $product->name = $_POST['name'];
                            $product->description = $_POST['description'];
                            $product->price = $_POST['price'];
                            $product->filename = $targetFile;
                            $product->insert();
                            header('location:'.BASE.'/Product/productForm');
                        }else{
                            echo 'error';
                        }
                    }
                }
            }else
                $this->view('Product/productForm');
        }

        // function search() {
        //     // $product = new \App\models\Product();
        //     // $product = $product->findBySearch($_POST['search_term']);
        //     // // $order = new \App\models\Order();
        //     // // $sales = $order->getAllStatusComplete();
        //     // // $totalSale = $order->getSumCompletedPrice();
        //     // $this->view('Product/productList', $product);


        //     if (isset($_POST["action"])){
		// 		$product = new \App\models\Product();
		// 		$product = $product->findBySearch($_POST["search_tem"]);
		// 		$this->view('Product/index', ['product' => $product]);
		// 	}
        // }
    }
?>