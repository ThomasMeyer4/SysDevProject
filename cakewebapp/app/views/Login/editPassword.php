<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Edit Password</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <div class="container">
      <form action="" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Edit Password</h1>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
        <label for="inputConfirmPassword" class="sr-only">Confirm Password</label>
        <input type="password" id="inputConfirmPassword" name="confirm_password" class="form-control" placeholder="Retype Password">
        <div class="checkbox mb-3">
          <label>
            </br> <a href="<?=BASE?>/Settings/index">Cancel</a>
          </label>
        </div>
        <input type="submit" class="btn btn-lg btn-primary" name="action" value="Register"></input>
        <p class="mt-5 mb-3 text-muted">&copy; Jeeva & Thomas</p>
      </form>
    </div>
  </body>
</html>