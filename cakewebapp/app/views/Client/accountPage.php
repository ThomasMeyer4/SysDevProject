<!DOCTYPE html>
<html>
<head>
  <title>Dess'Art</title>
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
                    <li><a href='<?=BASE?>/Client/homepage'>Home</a></li>
                    <li><a href='<?=BASE?>/Client/products'>Products</a></li>
                    <li><a href='<?=BASE?>/Client/aboutUs'>About Us</a></li>
                    <li><a href='<?=BASE?>/Client/contacts'>Contacts</a></li>
                    <li><a href='<?=BASE?>/Client/account'>Account</a></li>
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
</br>
</br>
</br>
</br>
<div class="jumbotron jumbotron-fluid text-center">
  </br>
  </br>
  </br>
  </br>
</br>
  <h1 class="display-4">Order Requests</h1>
  </br>
  </br>
</div>
</br>
<div class="d-flex justify-content-lg-center">
<form action="<?=BASE?>/Order/addNewOrderByClient">
    <button class="btn btn-success me-2" type="submit">Request an Order! <i class="fas fa-plus"></i></button>
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
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($data as $order){
                echo "
                <tr>
                    <td>$order->order_id</td>
                    <td>$order->description</td>
                    <td>$order->date</td>
                    <td>$order->price</td>
                    <td>$order->confirmation</td>
                    <td>$order->status</td>
                </tr>";
            }
        ?>
        <tbody>
    </table>
</div>
<br><br><br><br><br><br><br><br><br>
<div class="footer-basic">
        <footer>
        <div class="social"><a target="_blank" href="https://www.instagram.com/cakeartbyjames/"><i class="icon ion-social-instagram"></i></a><a target="_blank" href="https://www.facebook.com/cakeartbyjames"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href='<?=BASE?>/Website/homepage'>Home</a></li>
                <li class="list-inline-item"><a href='<?=BASE?>/Website/products'>Products</a></li>
                <li class="list-inline-item"><a href='<?=BASE?>/Website/aboutUs'>About Us</a></li>
                <li class="list-inline-item"><a href='<?=BASE?>/Website/contacts'>Contacts</a></li>
                <li class="list-inline-item"><a href='<?=BASE?>/Login/login'>Login</a></li>
            </ul>
            <p class="copyright">CakeArtByJames © 2021</p>
        </footer>
</div>
</body>
</html>