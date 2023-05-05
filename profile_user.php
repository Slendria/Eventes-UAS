<?php
include 'config.php';
session_start();
$sql = "SELECT usr.* FROM users usr WHERE username='" . $_SESSION[ "username" ] . "'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$hasil = $stmt->get_result();
$row = $hasil->fetch_assoc();
?>


<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Profile </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/scss/_h1-hero.scss">
</head>
<body>
<style>
		.my-div { 
			color: black; 
			padding: 20px; 
		}
    .my-div2{
      background-color: white;
    }
    body {
      background-color: #F0F0F0;
		}
    hr{
      background-color:#000000;
      height:2px;
    }
    
	</style>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
<header>
    <div class="header-area">
     <div class="my-div2">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="home.php">Home</a></li>
                                        <li><a href="about_user.php">About</a></li>
                                        <li><a href="blog_user.php">Blog</a></li>
                                        <li><a href="contact_user.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                <a href="home.php" class="btn header-btn">Home</a>
                            </div>
                        </div>
                    </div>   
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
     </div>
    </div>
</header>
<div class="my-div">
<main>
<div class="container">
  <h1>Edit Profile</h1>
  <hr>
	<div class="row">
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          <input type="file" class="form-control">
        </div>
      </div>
      
 <div class="col-md-9 personal-info">         
        <h1>&nbsp;<bold>Personal info</bold></h1>
        <br>

        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Nama : <?php echo "".$row['nama'];?></label>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Alamat : <?php echo  "".$row['alamat'];?></label>
            
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email : <?php echo "".$row['email']; ?></label>
          </div>
          <div class="form-group">
            <div class="col-lg-8">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Username : <?php echo  "".$row['username']?></label>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
            <a href="home.php" class="btn header-btn">Back to Home</a>
            <a href="EditProfil_user.php" class="btn header-btn">Edit Profile</a>
            <a href="logout.php" class="btn header-btn">Logout</a>
              <span></span>
            </div>
        </form>
      </div>
  </div>
</div>
<hr>
</main>
    </footer>
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.slicknav.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>
    <script src="./assets/js/gijgo.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    </body>
</html>