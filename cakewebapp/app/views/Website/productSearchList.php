<!DOCTYPE html>
<html>
<head>
  <title>Dess'Art</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./../css/global.css">
  <link rel="stylesheet" type="text/css" href="./../css/products.css">
  <link rel="stylesheet" type="text/css" href="./../css/navigation.css">
  <link rel="stylesheet" href="./../css/slicknav.min.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
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
                    <li><a href='<?=BASE?>/Website/homepage'>Home</a></li>
                    <li><a href='<?=BASE?>/Website/products'>Products</a></li>
                    <li><a href='<?=BASE?>/Website/aboutUs'>About Us</a></li>
                    <li><a href='<?=BASE?>/Website/contacts'>Contacts</a></li>
                    <li><a href='<?=BASE?>/Login/login'>Account</a></li>
                    <li><a href='<?=BASE?>/Login/login'>Login</a></li>
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
</br></br></br>
<div style="background: url(./../images/cake4.jpg)" class="jumbotron bg-cover text-white">
<div class="container py-5 text-center">
        <h1 class="display-4 font-weight-bold">Products</h1>
        <p class="font-italic mb-0">Check out our recent custom cakes!</p>
        <p class="font-italic">CakeArtByJames</p>
    </div>
</div>
</br></br></br></br></br></br>
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
<div class="container">
<section class="card-container">
<?php
foreach ($data as $product) {
echo "<div class='flip-card-container' style='--hue: 220'>
<div class='flip-card'>
  <div class='card-front'>
    <figure>
      <div class='img-bg'></div>
      <img src='" . BASE . "/uploads/$product->filename' alt='$product->name'>
      <figcaption>$product->name</figcaption>
    </figure>

    <ul class='ulCard'>
      <li class='liCard'>$product->price $</li>
    </ul>
  </div>
  <div class='card-back'>
    <figure>
      <div class='img-bg'></div>
      <img src='" . BASE . "/uploads/$product->filename' alt='$product->name'>
    </figure>

    <button>More Details</button>

    <div class='design-container'>
      <span class='design design--1'></span>
      <span class='design design--2'></span>
      <span class='design design--3'></span>
      <span class='design design--4'></span>
      <span class='design design--5'></span>
      <span class='design design--6'></span>
      <span class='design design--7'></span>
      <span class='design design--8'></span>
    </div>
  </div>
</div>
</div>";
}
?>
</section>
</div>
<br><br><br>
<div class="footer-basic">
        <footer>
            <div class="social"><a href="https://www.instagram.com/cakeartbyjames/"><i class="icon ion-social-instagram"></i></a><a href="https://www.facebook.com/cakeartbyjames"><i class="icon ion-social-facebook"></i></a></div>
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


