

<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Event</title>
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
                    <h2>Tambah event</h2>
                </div>
                <form enctype="multipart/form-data" method="post" action="upload.php">
                <div class="col-md-12 mt-5">
                    <div class="mb-4">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Tanggal</label>
                        <input type="text" name="tanggal" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Isi</label>
                        <input type="text" name="isi" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Foto</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>

                    <div class="mb-3 text-end">
                    <input type="submit" class="btn btn-primary" value="kirim" name="proses">
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
