<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label>Name: <input type="text" name="name" /></label><br />
        <label>Description: <input type="text" name="description" /></label><br />
        <label>Price <input type="text" name="price" /></label><br />
        <label>Select an image file to upload: <input type= "file" name="myImage" /></label><br>
		<input type="submit" name="action" />
	</form>
    <a href="<?=BASE?>/Product/index">Cancel</a>	
</body>
</html>