<!DOCTYPE html>
<html>
<head>
  <title>Dess'Art</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./../css/global.css">
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
<?php
			foreach ($data as $product) {
				echo "<div class='col-sm-3'>
						<div class='card' style='width: 18rem;'>
						<div class='card-header text-center'>$product->name</div>
							<img class='card-img-top mx-auto' src='" . BASE . "/uploads/$product->filename' alt='$product->name'>
							<div class='card-body'>
								<p class='card-text text-center'>$product->description</p>
                <br><br><br><br>
							</div>
						</div>
					</div>        
          ";
			} 
?>
</div>
<br><br><br>
<div class="footer">---------- Follow Us
  <br>
<img src="./../images/facebook.png" width="3%">
<img src="./../images/instagram.png" width="3%">
</div>
</body>
</html>