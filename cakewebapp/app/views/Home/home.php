<!DOCTYPE html>
<html>
<head>
	<title>Dess'Art</title>
	<link rel="stylesheet" href="..\CSS\global.css">
</head>
<body>
		<div class="navBar">
		<div class="nav1">
			<a class="active" href="home.html"><button type="button">Home</button></a>
			<a href="products.html"><button type="button">Products</button></a>
		</div>

		<img src="..\PICTURES\Logo.png" class="logo">
		
		<div class="nav2">
			<a href="aboutUs.html"><button type="button">About Us</button></a>
			<a href="contacts.html"><button type="button">Contacts</button></a>
		</div>
	</div>

	<div class="container">
		<p>TEXT</p>
	</div>
</body>
</html>

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
      <li class="nav-item">
        <a class="nav-link" href='<?=BASE?>/Inventory/index'>Inventory</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='<?=BASE?>/Order/sale'>Sale <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='<?=BASE?>/Settings/index'>Settings <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="">
      <input class="form-control mr-sm-2" type="text" name="search_term" placeholder="Search...">
      <input class="btn btn-outline-success my-2 my-sm-0" name="action" type="submit" value="Search"></input>
      <form class="form-inline my-2 my-md-0">
            <a href="<?=BASE?>/Login/logout">Log Out</a>
      </form>
    </form>
  </div>
</nav>
</body>
</html>
