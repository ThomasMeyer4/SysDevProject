<!DOCTYPE html>
<html>
<head>
  <title>Dess'Art</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./../css/global.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-static-top navbar-light bg-white navbar-custom">
  <div class="container-fluid">
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarLeftAlignExample"
      aria-controls="navbarLeftAlignExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
      <ul class="navbar-nav nav-justified me-auto ">
        <li class="nav-item ">
          <a class="nav-link" href='<?=BASE?>/Website/homepage'>Home<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='<?=BASE?>/Website/products'>Products<span class="sr-only"></span></a>
        </li>
      </ul>
    </div>
  <div
      class="collapse navbar-collapse justify-content-center"
      id="navbarCenteredExample"
      >
      <ul class="navbar-nav">
      <img src="./../images/Logo.png" class="brand-logo center rounded-circle"  width="100px">
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarRightAlignExample">
      <ul class="navbar-nav ms-auto pe-5">
        <li class="nav-item active">
          <a class="nav-link" href='<?=BASE?>/Website/aboutUs'>About us<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='<?=BASE?>/Website/contacts'>Contacts<span class="sr-only"></span></a>
        </li>
          <form action="<?=BASE?>/Login/login">
            <button class="btn btn-outline-success me-2" type="submit">Login</button>
          </form>
      </ul>
    </div>
  </div>
</nav>
<br><br><br>
<div class="page">ABOUT US</div>

<br>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae lacus nec lorem lacinia cursus id a sapien. Quisque vulputate convallis efficitur. Aliquam ut euismod orci, a porta massa. Sed et nibh ac est elementum rutrum id quis odio. Nulla justo tellus, dapibus a facilisis at, sollicitudin nec lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus pretium eget quam sit amet egestas. Vivamus a ornare orci, non feugiat dui. Nullam malesuada, odio ac suscipit semper, velit leo porta ipsum, in aliquam neque risus in augue. Sed sed ultrices tellus, at porta diam. Curabitur quam diam, auctor nec sem at, viverra elementum enim. Donec non dignissim sem, quis interdum mi. Duis sodales iaculis lorem, sit amet aliquam ipsum consectetur ut.

<br>

Vivamus dui lectus, volutpat sed ipsum id, suscipit imperdiet ligula. Phasellus vel nibh maximus, pretium nisi in, porta arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam sapien lorem, ullamcorper id sapien vitae, ultricies ornare nulla. Aliquam molestie quam ac egestas dapibus. Duis ornare vulputate sollicitudin. Mauris augue enim, facilisis sed libero ut, tempus rhoncus arcu. Mauris in finibus ex. Nullam efficitur maximus turpis, non porttitor nisi commodo ac. Ut eu massa et dui vehicula feugiat ac nec ipsum. Praesent mi diam, porttitor elementum vehicula consectetur, consectetur in risus. Curabitur elementum nulla in bibendum ultrices. Aenean a posuere nisl.

<br>

In a justo tempor, feugiat eros at, fringilla orci. Proin interdum eleifend aliquam. Duis ut luctus odio. Vestibulum leo leo, dapibus at dapibus non, fringilla vel nulla. Duis bibendum tristique lobortis. Maecenas auctor, augue in aliquet ultrices, arcu lectus interdum nunc, vitae varius risus neque quis nibh. Quisque quis metus suscipit arcu dignissim fringilla vestibulum malesuada elit. Donec lacus erat, euismod a dui at, pretium porttitor ipsum. Fusce sit amet est orci. Vivamus quis justo quis quam rhoncus semper quis ut lorem. Curabitur lacus lorem, pharetra id maximus et, placerat ac est. Sed dapibus commodo pellentesque. Nam faucibus at nisi vitae faucibus. Pellentesque rhoncus elit eget odio viverra, nec sollicitudin lorem aliquam.</p>

<div class="footer">---------- Follow Us
  <br>
<img src="./../images/facebook.png" width="3%">
<img src="./../images/instagram.png" width="3%">
</div>
</body>
</html>