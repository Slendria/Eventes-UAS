<?php
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> About Us </title>
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
</head>
<body>
<style>
        .about-img{
            margin-left: 100px;
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
                                        <li><a href="events_user.php">Events</a></li>
                                        <li><a href="contact_user.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                <a href="profile_user.php" class="btn header-btn">Profile</a>
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
</header>
<main>
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="about-low-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <div class="section-tittle mb-35">

                        <?php
                            include "config.php";
                            $ambildata = mysqli_query($conn, "SELECT * FROM about ");
                            while($tampil = mysqli_fetch_array($ambildata)){
                                echo "
                                <tr>
                                    <td><h2>$tampil[jenis]</h2></td>
                                </tr>";
                                }
                                ?>

                            <p>
                            <?php
                            include "config.php";
                            $ambildata = mysqli_query($conn, "SELECT * FROM about ");
                            while($tampil = mysqli_fetch_array($ambildata)){
                                echo "
                                <tr>
                                    <td>$tampil[isi]</td>
                                </tr>";

                            }
                            ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <div class="single-caption mb-20">
                                <div class="caption-icon">
                                    <span class="flaticon-communications-1"></span>

                                    <p>
                                    <?php
                                    include "config.php";
                                    $ambildata = mysqli_query($conn, "SELECT * FROM about ");
                                    while($tampil = mysqli_fetch_array($ambildata)){
                                    echo "
                                    <tr>
                                        <td>$tampil[oleh]</td>
                                    </tr>";
                                    }
                                    ?>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-img ">
                        <img src="assets/img/gallery/about2.png" alt=" " width="700px">
                        <div class="about-font-img d-none d-lg-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>

    <footer>
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                <li><span class="contact-info__icon"><i class="ti-tablet"></i></span>
                                        <?php
                            include "config.php";
                            $ambildata = mysqli_query($conn, "SELECT * FROM contact ");
                            while($tampil = mysqli_fetch_array($ambildata)){
                                echo "
                                <tr>
                                    <td>$tampil[nomor]</td>
                                </tr>";
                                }
                                ?>
                                </li>

                                    <li>
                                    <?php
                            include "config.php";
                            $ambildata = mysqli_query($conn, "SELECT * FROM contact ");
                            while($tampil = mysqli_fetch_array($ambildata)){
                                echo "
                                <tr>
                                    <td>$tampil[email]</td>
                                </tr>";
                                }
                                ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
               <div class="row footer-wejed justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-logo mb-20">
                        <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-10 col-lg-8 ">
                             <div class="footer-copy-right">
                                 <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by Eventes</p>
                             </div>
                         </div>
                         <div class="col-xl-2 col-lg-4">
                             <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/_kelvin_garcia"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
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

<?php
include "config.php";

if (isset($_POST['proses'])) {
    $id_abt = $_POST['id_abt'];
    $jenis = $_POST['jenis'];
    $isi = $_POST['isi'];
    $oleh = $_POST['oleh'];

    $stmt = mysqli_prepare($conn, "UPDATE about SET jenis=?, isi=?, oleh=? WHERE id_abt=?");
    mysqli_stmt_bind_param($stmt, "sssi", $jenis, $isi, $oleh, $id_abt);
    mysqli_stmt_execute($stmt);
    $affected_rows = mysqli_stmt_affected_rows($stmt);
    mysqli_stmt_close($stmt);

    if ($affected_rows > 0) {
        echo "Edit telah diubah";
        echo "<meta http-equiv=refresh content=1; URL='nampil.php'>";
    } else {
        echo "Edit gagal diubah";
    }
}
?>