<!DOCTYPE html>
<head>
	<title>Cake</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./../css/global.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarLeftAlignExample" aria-controls="navbarLeftAlignExample" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
      <ul class="navbar-nav nav-justified me-auto">
        <li class="nav-item active">
          <a class="nav-link" href='<?=BASE?>/Order/index'>Order <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='<?=BASE?>/Order/sale'>Sale <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='<?=BASE?>/Inventory/index'>Inventory</a>
        </li>
      </ul>
    </div>
    <div
      class="collapse navbar-collapse justify-content-center"
      id="navbarCenteredExample">
      <ul class="navbar-nav">
      <img src="./../images/Logo.png" class="brand-logo center rounded-circle"  width="100px">
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarRightAlignExample">
      <ul class="navbar-nav ms-auto pe-5">
        <li class="nav-item">
          <a class="nav-link" href='<?=BASE?>/Settings/index'>Settings <span class="sr-only"></span></a>
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
</br></br></br>
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
<a href='<?=BASE?>/Order/addNewOrder'>Add New Order</a>
<div class='container'>
    <table class="table table-bordered table-light">
        <thead>
            <tr>
                <th scope="col" class="bg-success">Order#</th>
                <th scope="col" class="bg-success">Description</th>
                <th scope="col" class="bg-success">Date</th>
                <th scope="col" class="bg-success">Price</th>
                <th scope="col" class="bg-success">Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($data as $item){
              echo "
              <tr>
                  <td>$item->order_id</td>
                  <td>$item->description</td>
                  <td>$item->date</td>
                  <td>$item->price</td>
                  <td>$item->status</td>
              <tr>";
            }
        ?>
        <tbody>
    </table>
</div>
</body>
</html>