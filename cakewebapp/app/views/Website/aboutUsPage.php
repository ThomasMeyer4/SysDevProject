<!DOCTYPE html>
<html>
<head>
  <title>Dess'Art</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./../css/global.css">
  <link rel="stylesheet" type="text/css" href="./../css/aboutus.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
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
                    <li><a href='<?=BASE?>/Website/homepage'>Home</a></li>
                    <li><a href='<?=BASE?>/Website/products'>Products</a></li>
                    <li><a href='<?=BASE?>/Website/aboutUs'>About Us</a></li>
                    <li><a href='<?=BASE?>/Website/contacts'>Contacts</a></li>
                    <li><a href='<?=BASE?>/Login/login'>Account</a></li>
                    <li><a href='<?=BASE?>/Login/login'>Login</a></li>
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
<br><br><br><br><br><br><br><br><br>
<div class="container">
<div class="page">ABOUT US</div>

<br>

<p>Cake Art by James was founded by Anthonie James Domingo. James began his studies with a focus on visual arts and design since high school. He obtained professional cooking diploma from St Pius Culinary Institute.

<br>

With his strong interest in pastry and cake decoration, he continued to refine his skills at the Pearson School of Culinary Arts (PSCA), which was mentioned in Maclean's magazine as 2017 one of the best culinary schools in Canada. 

<br>

He worked in pastries since the age of 22 and has combined his skills with his creative passion to create delicious works of art.</p>
</div>
<br><br><br><br><br><br><br><br><br>
<div class="footer-basic">
        <footer>
        <div class="social"><a target="_blank" href="https://www.instagram.com/cakeartbyjames/"><i class="icon ion-social-instagram"></i></a><a target="_blank" href="https://www.facebook.com/cakeartbyjames"><i class="icon ion-social-facebook"></i></a></div>
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