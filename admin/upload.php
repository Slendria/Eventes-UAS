<?php
include "config.php";
$judul = $_POST['judul'];
if (isset($_FILES['gambar'])) {
    $gambar = $_FILES['gambar']['name'];
    $file_tmp = $_FILES['gambar']['tmp_name'];

    // Check file type
    $allowed_types = array('jpg', 'jpeg', 'png');
    $file_ext = strtolower(pathinfo($gambar, PATHINFO_EXTENSION));
    if (!in_array($file_ext, $allowed_types)) {
        echo "Error: File must be either JPEG or PNG.";
        exit();
    }

    // Check file size
    $file_size = $_FILES['gambar']['size'];
    if ($file_size > 2 * 1024 * 1024) { // 2 MB limit
        echo "Error: File size must be less than 2 MB.";
        exit();
    }

    // Move file to destination folder
    $folder = './gambar/';
    $destination = $folder.$gambar;
    if (move_uploaded_file($file_tmp, $destination)) {
        echo "File uploaded successfully.";
    } else {
        echo "Error uploading file.";
    }
}

$query="INSERT INTO event SET
judul = '$judul',
tanggal ='$tanggal',
lokasi ='$lokasi',
isi = '$isi',
gambar = '$gambar'";

mysqli_query($conn, $query)
or die ("SQL ERROR".mysqli_error());
header('location:events-admin.php');
?>
