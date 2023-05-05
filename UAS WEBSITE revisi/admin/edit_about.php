<?php
include "config.php";
$id_abt = $_GET['kode'];
$sql = mysqli_query($conn, "SELECT * FROM about WHERE id_abt='$id_abt'");
$data = mysqli_fetch_array($sql);
?>

<!doctype html>
<html>
<head>
    <title>About Us</title>
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
<style>
.slider-area2{
    background-image: url(img/h2_hero.png);
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
                    <img src="img/loder.png" alt="">
                </div>
            </div>
        </div>
</div>    

    <input type="checkbox" id="checkbox">
    <header class="header">
        <h2 class="admin"><b>About Us</b>
            <label for="checkbox">
            <i id="navbtn" class="fa fa-bars" aria-hidden="true"></i> 
            </label>
        </h2>
        <i class="fa fa-user" aria-hidden="true"></i>
    </header>

<div class="body">
        <nav class="side-bar">
            <div class="admin-p">
                <img src="img/admin.png">
                <h4>Admin</h4>
            </div>

            <ul>
                <li>
                    <a href="dash-admin.php">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="home-admin.php">
                    <i class="fa fa-home" aria-hidden="true"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li>
                    <a href="about-admin.php">
                    <i class="fa fa-sticky-note" aria-hidden="true"></i>
                        <span>About Us</span>
                    </a>
                </li>

                <li>
                    <a href="events-admin.php">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                        <span>Events</span>
                    </a>
                </li>

                <li>
                    <a href="contact-admin.php">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                        <span>Contact Us</span>
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <span>Log Out</span>
                    </a>
                </li>

            </ul>
        </nav>

<section class="section-1">
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

                        <!--Edit-->
                        <!--Kotak form wa gabisa memperbesar tapi bisa di update-->
                        <form action="" method="post">
                            
                            <h3>Jenis</h3>
                            <input type="text" name="jenis" value="<?php echo $data['jenis']; ?>">
                            

                            <h3>Isi</h3>
                            <input type="text" name="isi" value="<?php echo $data['isi']; ?>">
                            
                            
                            <h3>Oleh</h3>
                            <input type="text" name="oleh" value="<?php echo $data['oleh']; ?>">
                            
                          <a href="about-admin.php"><input type="submit" value="Simpan" name="proses"></a>
                        </form>
<!--code updatenya-->
<?php
include "config.php";

if (isset($_POST['proses'])) {
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
        echo "<meta http-equiv=refresh content=1; URL='about-admin.php'>";
    } else {
        echo "Edit gagal diubah";
    }
}
?>

                        <p>
                            
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <div class="single-caption mb-20">
                                <div class="caption-icon">
                                    <span class="flaticon-communications-1"></span>
                                    <p>
                                    
                                    </p>
                
                                        
                                        <span></span><br>
                                        <a href="about-admin.php"><input type="button" class="btn btn-default" value="Kembali"></a>                 

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="about-img ">
                        <img src="img/about2.png" alt=" " width="400px">
                        <div class="about-font-img d-none d-lg-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    </main>
</section>
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

