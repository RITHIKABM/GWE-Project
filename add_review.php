<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_customer'])){
header("location: index.php"); //Redirecting to myrestaurant Page
}

if(!isset($_GET["orderid"])) {
    header("location: customer.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GWE&#9824;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">
  
  <!-- <div class="site-wrap"> -->

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3 js-site-navbar site-navbar-target" role="banner" id="site-navbar">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2 site-logo">
            <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0">GWE</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="customer.php" class="nav-link">Welcome, <?php echo $_SESSION["login_customer"]?></a></li>
                <li><a href="restaurant_choose.php"><span class="glyphicon glyphicon-shopping-cart"></span>Branch</a></li>
                <li><a href="logout.php" class="nav-link">Logout</a></li>
              </ul>
            </nav>
          </div>
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

    <div class="jumbotron" style="color: #FFFFFF; margin-bottom: 0rem; background: #333333; border-radius:0rem">
        <div class="container text-center">
            <h1>Add Review</h1>     
        </div>
    </div>
    <br>

    <div class="site-section" id="section-home" style="background-image: url(images/food_bg1.jpg); background-size: cover; margin-top: -2rem">
        <div class="m" role="dialog" style="color:#000000;">
            <div class="modal-dialog" role="document" style="width:500px">
                <div class="modal-content" >
                    <div class="modal-header">
                        <h4 class="modal-title text-primary">Review of Order No: <?php echo $_GET["orderid"]?></h4>
                        <!-- <button type="button" class="close"><span aria-hidden="true">&times;</span></button> -->
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-12">
                                <div class="credit-card-div">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <form action="add_review_action.php?orderid=<?php echo $_GET["orderid"]?>" method="POST">
                                                <div class="row">
                                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                                        <h5 class="text-muted" style="color:#000000 !important; font-size: 20px"> Rating</h5>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <input type="number" name="rating" class="form-control" min="1" max="5" placeholder="5" required/>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <h5 class="text-muted" style="color:#000000 !important; font-size: 20px"> Description</h5>
                                                        <input type="text" style="height:10rem" name="description" class="form-control" maxlength = "2000" required/>
                                                    </div>
                                                </div>
                                                <div class="row " style="margin-top: 10px">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <input type="submit" class="form-control btn btn-success" value="Submit" />
                                                    </div>
                                                </div>
                                            <form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5 mr-auto">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>We Have The Glory Begining in Export Business Greenway Exports is an eminent name from Tirupur (Tamil Nadu) that is operational in the garments and textile industry of the world. We are counted among successful exporters and suppliers of the high-quality girls wear, boys wear, ladies wear, and men’s short sets. Our procurement experts obtain these products from leading production houses in India after getting assured for their quality and performance. We are offering our products in various packaging options and specifications. With our wide distribution network, we ensure timely delivery of fashion products to our clients from our headquarters in Tirupur. We have a whopping turnover i.e. 50 Million USD.</p>
              </div>
              
              
              <div class="col-md-6">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
           &copy;GreenWay Exports<script>document.write(new Date().getFullYear());</script> All rights reserved
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  
  </body>
</html>