<!DOCTYPE html>
<head>
	<title>Cake</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./../css/global.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
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
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href='<?=BASE?>/Order/index'>Order <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='<?=BASE?>/Order/sale'>Sale <span class="sr-only"></span></a>
        </li>
      </ul>
    </div>
    <div
      class="collapse navbar-collapse justify-content-center"
      id="navbarCenteredExample">
      <ul class="navbar-nav mb-2 mb-lg-0">
      <img src="./../images/Logo.png" class="brand-logo center rounded-circle"  width="100px">
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarRightAlignExample">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href='<?=BASE?>/Inventory/index'>Inventory</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='<?=BASE?>/Product/index'>Website <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <form action="<?=BASE?>/Login/logout">
            <button class="btn btn-success me-2" type="submit">Logout</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>
</br></br></br></br></br>
<div class="jumbotron jumbotron-fluid text-center">
  </br>
  </br>
  <h1 class="display-4">Products</h1>
  </br>
  </br>
</div>
<a href='<?=BASE?>/Product/addProduct'>Add New Product</a>
<form action="" method="post" class="form-inline my-2 my-lg-0" style="margin-left: 350px;">
					<input type="text" name="input" placeholder="Search" aria-label="Search">
					<input type="submit" name="search" value="Search">
</form>
<div>
      <?php
			foreach ($data as $product) {
				echo "<div class='col-sm-3'>
						<div class='card' style='width: 15rem;'>
						<div class='card-header text-center'>$product->name</div>
							<img class='card-img-top smallimg mx-auto' src='" . BASE . "/uploads/$product->filename' alt='$product->name' style='width:150px;height:150px'>
							<div class='card-body'>
								<p class='card-text text-center'>$product->description</p>
								<p class='card-text text-center'>Price: $product->price$ 
							</div>
							<div class='card-footer text-center'>
									<a href='" . BASE . "/Product/modify/$product->product_id' class='btn btn-success btn-sm'>Edit</a>
									<a href='" . BASE . "/Product/delete/$product->product_id' class='btn btn-danger btn-sm'>Delete</a>
							</div>
						</div>
					</div>";
			} ?>
        <tbody>
    </table>
</div>
</body>
</html>