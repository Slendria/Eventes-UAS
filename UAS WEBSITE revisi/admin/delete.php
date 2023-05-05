<?php
include "config.php";
$data = mysqli_query($conn, "SELECT * FROM event where id_evt = '$_GET[kode]'");
$row = mysqli_fetch_array($data);

$gambar = $row['gambar'];
if (file_exists('admin/gambar/'.$gambar)) {
    unlink('admin/gambar/'.$gambar);
}

$query = "DELETE FROM event WHERE id_evt = '$_GET[kode]'";
mysqli_query($conn, $query) or die ("SQL Error".mysqli_error($conn));
header ('location: events-admin.php');
?>
