<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="./../css/registration.css" rel="stylesheet">

    <title>Register</title>

    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="./../css/signin.css" rel="stylesheet">
  </head>
  <body class="container">
    <div class="container">
      <form action="" method="post">
        <div class='bold-line'></div>
            <div class='window'>
            <div class='overlay'></div>
            <div class='content'>
            <div class='welcome'>Change Password</div>
            <div class='input-fields'>
            <input type='password' placeholder='Current Password' name="current_password" class='input-line full-width' required></input>
            <input type='password' placeholder='New Password' name="new_password" class='input-line full-width' required></input>
            <input type='password' placeholder='Retype Password' name="confirm_password" class='input-line full-width' required></input>
            <div><button class='ghost-round full-width' type="submit" name="action" value="Change Password">Change Password</button></div>
            <a href="<?=BASE?>/Settings/index">Go Back!</a>
            </div>
  </div>
</div>
</form>
</div>
</body>
</html>

