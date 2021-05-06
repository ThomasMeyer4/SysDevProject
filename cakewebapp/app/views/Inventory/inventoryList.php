<!DOCTYPE html>
<head>
	<title>Cake</title>
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href=''>Cake</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href='<?=BASE?>/Order/index'>Order <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href='<?=BASE?>/Inventory/index'>Inventory</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='<?=BASE?>/Order/sale'>Sale <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='<?=BASE?>/Settings/index'>Settings <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='<?=BASE?>/Login/logout'>Logout <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="">
      <input class="form-control mr-sm-2" type="text" name="search_term" placeholder="Search...">
      <input class="btn btn-outline-success my-2 my-sm-0" name="action" type="submit" value="Search"></input>
    </form>
  </div>
</nav>
<a href='<?=BASE?>/Inventory/addNewItem'>Add New Item</a>
<div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Ingredients</th>
                <th scope="col">Quantity</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($data as $item){
              echo "
              <tr>
                  <td>$item->name</td>
                  <td>$item->quantity</td>
                  <td></td>
              <tr>";
            }
        ?>
        <tbody>
    </table>
</div>
</body>
</html>