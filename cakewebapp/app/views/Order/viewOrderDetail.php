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
  <h1 class="display-4">Order Detail</h1>
  </br>
  </br>
</div>
<form action="" method="post" class="form-inline my-2 my-lg-0" style="margin-left: 350px;">
					<input type="text" name="input" placeholder="Search" aria-label="Search">
					<input type="submit" name="search" value="Search">
<a href='<?=BASE?>/Order/addNewOrder'>Add New Order</a>
<div class='container'>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">$item->order_id</h5>
            <p class="card-text">$item->description</p>
            <p class="card-text">$item->price</p>
            <p class="card-text">$item->description</p>
            <p class="card-text">$item->description</p>
    </div>
</div>
</div>
<p>Pending: <?=$data['confirmations']->pendingCount ?></p>
<p>Accepted: <?=$data['confirmations']->acceptedCount ?></p>
<p>Denied: <?=$data['confirmations']->deniedCount ?></p>
</body>
</html>