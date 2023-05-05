<?php
include "config.php";
$id_evt = $_GET['kode'];
$sql = mysqli_query($conn, "SELECT * FROM event WHERE id_evt='$id_evt'");
$data = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Event</title>
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
    <div class="container">
        <div class="col-md-12 row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="col-md-12 text-center">
                    <h2>Edit event</h2>
                </div>
                <form enctype="multipart/form-data" method="POST" action="events-admin.php">
                <div class="col-md-12 mt-5">
                    <div class="mb-4">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" value="<?php echo $data['judul'];?>">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="<?php echo $data['tanggal'];?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" value="<?php echo $data['lokasi'];?>">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Isi</label>
                        <input type="text" name="isi" class="form-control" value="<?php echo $data['isi'];?>">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Foto</label>
                        <input type="file" name="gambar" class="form-control" value="<?php echo $data['gambar'];?>">
                    </div>

                    <div class="mb-3 text-end">
                    <a href="about-admin.php"><input type="submit" value="kirim" class="btn btn-primary" name="proses"></a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

<!--code updatenya-->
<?php
include "config.php";

// Retrieve the data from the database and store it in $data
$data = array();
if (isset($_GET['id_evt'])) {
    $id_evt = $_GET['id_evt'];
    $result = mysqli_query($conn, "SELECT * FROM event WHERE id_evt=$id_evt");
    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_object($result);
    }
}

if (isset($_POST['proses'])) {
    
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];
    $isi = $_POST['isi'];
    $gambar = $_FILES['gambar'];

    // Check if a new image file was uploaded
    if (!empty($_FILES['gambar']['tmp_name'])) {
        $gambar = file_get_contents($_FILES['gambar']['tmp_name']);
    } else {
        // Otherwise, keep the existing image
        $result = mysqli_query($conn, "SELECT gambar FROM event WHERE id_evt=$id_evt");
        $data = mysqli_fetch_object($result);
        $gambar = $data->gambar;
    }

    $stmt = mysqli_prepare($conn, "UPDATE event set judul=?, tanggal=?, lokasi=?, isi=?, gambar=? WHERE id_evt=?");
    if (!$stmt) {
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "sssssb", $judul, $tanggal, $lokasi, $isi, $gambar, $id_evt);
    mysqli_stmt_execute($stmt);
    if (mysqli_stmt_error($stmt)) {
        die(mysqli_stmt_error($stmt));
    }
    $affected_rows = mysqli_stmt_affected_rows($stmt);
    mysqli_stmt_close($stmt);

    if ($affected_rows > 0) {
        echo "Edit telah diubah";
        echo "<meta http-equiv=refresh content=1; URL='events-admin.php'>";
    } 
}
?>

</body>
</html>

