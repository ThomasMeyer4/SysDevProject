<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="./../css/registration.css" rel="stylesheet">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  <link href="./../css/signin.css" rel="stylesheet">
  </head>
  <body class="container">
    <div class="container">
      <form action="" method="post">
        <div class='bold-line'></div>
            <div class='window'>
            <div class='overlay'></div>
            <div class='content'>
            <div class='welcome'>Register</div>
            <div class='input-fields'>
            <input type='text' placeholder='Username' for="inputUsername" name="username" class='input-line full-width'></input>
            <input type='password' placeholder='Password' for="inputPassword" name="password" class='input-line full-width'></input>
            <input type='password' placeholder='Retype Password' for="inputConfirmPassword" name="confirm_password" class='input-line full-width'></input>
            <input type='text' placeholder='First Name' name="first_name" class='input-line full-width'></input>
            <input type='text' placeholder='Last Name' name="last_name" class='input-line full-width'></input>
            <input type='text' placeholder='Position' name="position" class='input-line full-width'></input>
            <div><button class='ghost-round full-width' type="submit" name="action" value="Register">Create Account</button></div>
            <div><a href="<?= BASE ?>/Settings/index">Cancel</a></div>
        </div>
  </div>
</div>
</form>
</div>
</body>
</html>
