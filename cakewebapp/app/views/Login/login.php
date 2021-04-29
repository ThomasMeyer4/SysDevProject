<!doctype html>
<htm lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./../css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <div class="container">
      <form action="" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
        <div class="checkbox mb-3">
          <label>
            Need an account? Register <a href="<?=BASE?>/Login/register">here</a>.<br />
          </label>
        </div>
        <input type="submit" class="btn btn-lg btn-primary" name="action" value="Login"></input>
        <p class="mt-5 mb-3 text-muted">&copy;</p>
      </form>
    </div>
  </body>
</html>