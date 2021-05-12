<!DOCTYPE html>
<html>
<head>
  <title>Dess'Art</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?=BASE?>/css/global.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="<?=BASE?>/css/navigation.css">
  <link rel="stylesheet" href="<?=BASE?>/css/slicknav.min.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<style>
	.modifyOrder {
		width: 100%;
		max-width: 330px;
		padding: 15px;
		margin: 0 auto;
		transform: scale(0.9, 0.9);
	}
</style>
<body>
<div id="main_menu">
            <div class="logo_area">
                <a href=""><img src="<?=BASE?>/images/Logo2.png" class="brand-logo center rounded-circle"  width="100%" alt=""></a>
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
  </br>
</br>
  <h1 class="display-4">Modify Order</h1>
  </br>
  </br>
</div>
</br>
<div class="container">
<div class="modifyOrder">
<div class="d-flex justify-content-lg-center">
		<form method="post" action="" enctype="multipart/form-data">
			<label>Description</label>
			<textarea name="description" class="form-control" placeholder="Description"><?= $data['order']->description ?></textarea><br>
			<label>Confirmation</label>
			<select name="confirmation" class="form-control">
				<option><?=$data['order']->confirmation?></option>
				<?php
					if ($data['order']->confirmation == "pending") {
						echo "<option value='accepted'>accepted</option>";
						echo "<option value='denied'>denied</option>";
					} else if ($data['order']->confirmation == "accepted") {
						echo "<option value='pending'>pending</option>";
						echo "<option value='denied'>denied</option>";
					} else {
						echo "<option value='pending'>pending</option>";
						echo "<option value='accepted'>accepted</option>";
					}
				?>
			</select>
			<label>Status</label>
			<select name="status" class="form-control">
				<option><?=$data['order']->status?></option>
				<?php
					if ($data['order']->status == "ongoing") {
						echo "<option value='completed'>completed</option>";
					} else {
						echo "<option value='ongoing'>ongoing</option>";
					}
				?>
			</select>
            <label>Price</label>
			<input type="number" name="price" class="form-control" value="<?= $data['order']->price ?>"></input><br>
			<input type="submit" name="action" value="Modify Order" class="btn btn-success btn-primary btn-block" /><br>
			<div style="text-align: center">
				<a class="text-center" href="<?= BASE ?>/Order/index">Cancel</a>
			</div>
		</form>
	</div>
</div>
</div>
</br>
</br>
</br>
</br>
</br>
</br>
</body>
</html>
