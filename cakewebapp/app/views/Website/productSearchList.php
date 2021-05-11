<!DOCTYPE html>
<html>
<head>
  <title>Dess'Art</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./../css/global.css">
  <link rel="stylesheet" type="text/css" href="./../css/products.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-static-top navbar-light bg-white navbar-custom">
  <div class="container-fluid">
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarLeftAlignExample"
      aria-controls="navbarLeftAlignExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
      <ul class="navbar-nav nav-justified me-auto ">
        <li class="nav-item">
          <a class="nav-link" href='<?=BASE?>/Website/homepage'>Home<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href='<?=BASE?>/Website/products'>Products<span class="sr-only"></span></a>
        </li>
      </ul>
    </div>
  <div
      class="collapse navbar-collapse justify-content-center"
      id="navbarCenteredExample"
      >
      <ul class="navbar-nav">
      <img src="./../images/Logo.png" class="brand-logo center rounded-circle"  width="100px">
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarRightAlignExample">
      <ul class="navbar-nav ms-auto pe-5">
        <li class="nav-item">
          <a class="nav-link" href='<?=BASE?>/Website/aboutUs'>About us<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='<?=BASE?>/Website/contacts'>Contacts<span class="sr-only"></span></a>
        </li>
          <form action="<?=BASE?>/Login/login">
            <button class="btn btn-outline-success me-2" type="submit">Login</button>
          </form>
      </ul>
    </div>
  </div>
</nav>
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
<div class="footer">---------- Follow Us
  <br>
<img src="./../images/facebook.png" width="3%">
<img src="./../images/instagram.png" width="3%">
</div>
</body>
</html>


