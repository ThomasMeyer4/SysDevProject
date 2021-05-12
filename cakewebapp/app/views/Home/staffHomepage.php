<!DOCTYPE html>
<html>
<head>
  <title>Dess'Art</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./../css/global.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="./../css/navigation.css">
  <link rel="stylesheet" href="./../css/slicknav.min.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<body>
<div id="main_menu">
            <div class="logo_area">
                <a href=""><img src="./../images/Logo2.png" class="brand-logo center rounded-circle"  width="100%" alt=""></a>
            </div>
            <div class="inner_main_menu">
                <ul id="menu">
                    <li><a href='<?=BASE?>/Order/index'>Order</a></li>
                    <li><a href='<?=BASE?>/Order/sale'>Sale </a></li>
                    <li><a href='<?=BASE?>/Inventory/index'>Inventory</a></li>
                    <li><a href='<?=BASE?>/Settings/index'>Settings</a></li>
                    <li><a href='<?=BASE?>/Product/index'>Website</a></li>
                    <li><a href='<?=BASE?>/Login/logout'>Logout</a></li>
                </ul>
            </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="./../js/jquery.slicknav.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#menu').slicknav();
        });
    </script>
</br></br></br></br>
<div class="jumbotron jumbotron-fluid text-center">
  </br>
  </br>
</br>
  <h1 class="display-4">Orders</h1>
  </br>
</div>
</br>
<div class="container">
<div class="d-flex justify-content-end">
<form action="" method="post" class="form-inline mb-2 mb-lg-0">
	<input type="search" name="input" placeholder="" aria-label="Search">
  <button type="submit" name="search" class="btn btn-success">
  <i class="fa fa-search"></i>
  </button>
</form>
</div>
</div>
<div class="d-flex justify-content-lg-center">
<form action="<?=BASE?>/Order/addNewOrder">
  <button class="btn btn-success me-2" type="submit">Add Order <i class="fas fa-plus"></i></button>
</form>
</div>
</br>
<div class='container'>
    <table class="table table-bordered table-light">
        <thead>
            <tr>
                <th scope="col" class="bg-success">Order#</th>
                <th scope="col" class="bg-success">Description</th>
                <th scope="col" class="bg-success">Date</th>
                <th scope="col" class="bg-success">Price</th>
                <th scope="col" class="bg-success">Confirmation</th>
                <th scope="col" class="bg-success">Status</th>
                <th scope="col" class="bg-success">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($data["orders"] as $order){
              echo "
              <tr>
                  <td>$order->order_id</td>
                  <td>$order->description</td>
                  <td>$order->date</td>
                  <td>$order->price</td>
                  <td>$order->confirmation</td>
                  <td>$order->status</td>
                  <td><a class='btn btn-success' href='" . BASE . "/Order/detail/$order->order_id' role='button'>View Order</a></td>
              <tr>";
            }
        ?>
        <tbody>
    </table>
</div>
<div class="d-flex justify-content-lg-center">
  <p id="pending">Pending: <?=$data['confirmations']->pendingCount ?> &nbsp&nbsp</p>
  <p id="accepted">Accepted: <?=$data['confirmations']->acceptedCount ?> &nbsp&nbsp</p>
  <p id="denied">Denied: <?=$data['confirmations']->deniedCount ?> &nbsp&nbsp</p>
</div>
</body>
</html>