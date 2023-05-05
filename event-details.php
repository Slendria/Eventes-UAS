<?php
include "config.php";
?>

<!doctype html>
<html>
<head>
    <title>Events</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Events </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
<style>
    .slider-area2{
 
    background-repeat:no-repeat ;
    background-size: cover;
}

.slider-area2{
    .hero-cap{
        & h2{
            color: #fff;
            font-size: 50px;
            font-weight: 700;
            text-transform: capitalize;
            line-height: 1;
            @media #{$sm}{
                font-size: 50px;
              }
            @media #{$xs}{
                font-size: 35px;
              }
        }
        .breadcrumb {
            background: none;
            padding: 0;
            margin: 0;

            a {
                color: #dcdcdc;
                font-size: 18px;
                text-transform: capitalize;
            }
        }
        .breadcrumb-item + .breadcrumb-item::before {
            color: #dcdcdc;
        }
    }

}

</style>

<body>
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
       

<div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Events</h2>
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
                    <?php
                    include "config.php";
                    if (isset($_GET['kode'])) {
                        $kode = $_GET['kode'];
                        // query untuk mengambil data event dengan kode yang diberikan
                        $ambildata = mysqli_query($conn, "SELECT * FROM event WHERE id_evt = $kode");
                        // menampilkan data event
                        while ($tampil = mysqli_fetch_array($ambildata)) {
                            // tampilkan detail event di sini
                            echo "<div class='section-tittle mb-35'>";
                            echo "<img src='admin/gambar/".$tampil['gambar']."' style='width:300px;'>";
                            echo "</div>";
                            echo "<h2>$tampil[judul]</h2>";
                            echo "<h4>Tanggal</h4>";
                            echo "$tampil[tanggal]";
                            echo "<h4>Lokasi</h4>";
                            echo "$tampil[lokasi]";
                            echo "<h4></h4>";
                            echo "$tampil[isi]";
                            
                        }
                    } else {
                        // jika parameter kode tidak diberikan, tampilkan pesan kesalahan
                        echo "Kode event tidak ditemukan!";
                    }
                    ?>
                </div>
            </div>
            <div class="about-font-img d-none d-lg-block"></div>
        </div>
    </div>
</section>

</main>

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

    <?php
include "config.php";
if(isset($_GET['id_evt'])){
    mysqli_query($conn, "DELETE from event where id_evt='$_GET[id_evt]'");
 
    echo "Data berhasil dihapus";
    echo"<meta http-equiv=refresh content=2; URL='edit-event.php'>";
 
 }
 
 ?>
 
</body>
</html>