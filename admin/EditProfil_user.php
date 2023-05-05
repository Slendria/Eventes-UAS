<?php
include "config.php";
session_start();

$username = $_SESSION['username'];
$sql = "SELECT usr.* FROM users usr WHERE username='" . $_SESSION[ "username" ] . "'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$hasil = $stmt->get_result();
$row = $hasil->fetch_assoc();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
 
    $sql = "UPDATE users SET nama='$nama', email='$email', alamat='$alamat' where username ='" . $_SESSION[ "username" ] . "'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss",$nama,$email,$alamat);
    
    if($stmt->execute()){
        header("location: dash-admin.php");
    } else {
        die();
    }
}
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/slicknav.css">
   <link rel="stylesheet" href="css/animate.min.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
   <link rel="stylesheet" href="css/responsive.css">
   <link rel="stylesheet" href="css/fontawesome-all.min.css">
   <link rel="stylesheet" href="css/themify-icons.css">
   <link rel="stylesheet" href="css/slick.css">
   <link rel="stylesheet" href="css/nice-select.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/style2.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <img src="img/loder.png" alt="">
                </div>
            </div>
        </div>
</div>    

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
          <h2>&nbsp;Personal info</h2>
          <br>
        
        <form class="form-horizontal" method="post">
        <div class="form-group">
            <label class="col-md-3 control-label"> Username : <?php echo  "".$row['username']?></label>
        </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Nama : </label>
            <div class="col-lg-8">
                <input type="text" name="nama" value="<?php echo $row['nama'];?>"/><br>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email :</label>
            <div class="col-lg-8">
                <input type="email" name="email" value="<?php echo $row['email'];?>"/><br>
            </div>
          </div>
          <div class="form-group">
          <label class="col-lg-3 control-label">Alamat :</label>
            <div class="col-lg-8">
            <input type="text" name="alamat" value="<?php echo $row['alamat'];?>"/><br>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <a href="admin/dash-admin.php"><input type="submit" class="btn btn-primary" value="Save Changes" name="submit"></a>
              <span></span>
              <a href="admin/dash-admin.php"><input type="button" class="btn btn-success" value="Cancel"></a>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
</div>

</main>
    </footer>
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

 <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/animated.headline.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
   
    </body>
</html>