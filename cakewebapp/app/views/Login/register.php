<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./../css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center" style="height: 100%;">
    <div class="container">
      <form action="" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
        <label for="inputConfirmPassword" class="sr-only">Confirm Password</label>
        <input type="password" id="inputConfirmPassword" name="confirm_password" class="form-control" placeholder="Retype Password">
        <label for="inputFirstName" class="sr-only">First name</label>
        <input type="text" id="inputFirstName" name="first_name" class="form-control" placeholder="First Name">
        <label for="inputLastName" class="sr-only">Last name</label>
        <input type="text" id="inputLastName" name="last_name" class="form-control" placeholder="Last Name">
        <label for="inputPosition" class="sr-only">Position</label>
        <input type="text" id="inputPosition" name="position" class="form-control" placeholder="Position">
        <br class="checkbox mb-3">
        </br>
        <input type="submit" class="btn btn-lg btn-primary" name="action" value="Register"></input>
        <p class="mt-5 mb-3 text-muted">&copy;</p>
      </form>
    </div>
  </body>
</html>