<!DOCTYPE html>
<html>
<head>
  <title>Dess'Art</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./../css/global.css">
  <link rel="stylesheet" type="text/css" href="./../css/contacts.css">
  <link rel="stylesheet" type="text/css" href="./../css/navigation.css">
  <link rel="stylesheet" href="./../css/slicknav.min.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<body>
<div id="main_menu">
            <div class="logo_area">
                <a href=""><img src="./../images/Logo2.png" class="brand-logo center rounded-circle"  width="100%" alt=""></a>
            </div>
            <div class="inner_main_menu">
                <ul id="menu">
                    <li><a href='<?=BASE?>/Client/homepage'>Home</a></li>
                    <li><a href='<?=BASE?>/Client/products'>Products</a></li>
                    <li><a href='<?=BASE?>/Client/aboutUs'>About Us</a></li>
                    <li><a href='<?=BASE?>/Client/contacts'>Contacts</a></li>
                    <li><a href='<?=BASE?>/Client/account'>Account</a></li>
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
<br><br><br></br></br></br></br>
<div class="container">
<div class="page">CONTACTS</div>
<br>

<p>sit amet, consectetur adipiscing elit. Mauris vitae lacus nec lorem lacinia cursus id a sapien. Quisque vulputate convallis efficitur. Aliquam ut euismod orci, a porta massa. Sed et nibh ac est elementum rutrum id quis odio. Nulla justo tellus, dapibus a facilisis at, sollicitudin nec lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus pretium eget quam sit amet egestas. Vivamus a ornare orci, non feugiat dui. Nullam malesuada, odio ac suscipit semper, velit leo porta ipsum, in aliquam neque risus in augue. Sed sed ultrices tellus, at porta diam. Curabitur quam diam, auctor nec sem at, viverra elementum enim. Donec non dignissim sem, quis interdum mi. Duis sodales iaculis lorem, sit amet aliquam ipsum consectetur ut.

</br></br>
<table>
  <tr>
    <td></td>
    <td rowspan="3"><img src="./../images/map.png" width="55%"></td>
  </tr>
  <tr>
    <td class="contact"><img src="./../images/telephone.png" width="5%"> (514) 889-9382
      <br>
      <img src="./../images/mail.png" width="5%"> aaa@aaaaaaa.com
    </td>

  </tr>
 
  <tr>
    <td></td>
  </tr>  
</table>
</div>
      </br></br>
<div class="footer-basic">
  <footer>
      <div class="social"><a href="https://www.instagram.com/cakeartbyjames/"><i class="icon ion-social-instagram"></i></a><a href="https://www.facebook.com/cakeartbyjames"><i class="icon ion-social-facebook"></i></a></div>
      <ul class="list-inline">
          <li class="list-inline-item"><a href='<?=BASE?>/Website/homepage'>Home</a></li>
          <li class="list-inline-item"><a href='<?=BASE?>/Website/products'>Products</a></li>
          <li class="list-inline-item"><a href='<?=BASE?>/Website/aboutUs'>About Us</a></li>
          <li class="list-inline-item"><a href='<?=BASE?>/Website/contacts'>Contacts</a></li>
          <li class="list-inline-item"><a href='<?=BASE?>/Login/login'>Login</a></li>
      </ul>
      <p class="copyright">CakeArtByJames © 2021</p>
  </footer>
</div>
</body>
</html>