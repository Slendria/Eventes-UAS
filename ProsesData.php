<?php
require "config.php";
session_start();
$action = $_REQUEST['action'];

if($action=="edit"){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE users SET nama='$nama', alamat='$alamat' where username ='" . $_SESSION[ "username" ] . "'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss",$nama,$alamat);
    
    if($stmt->execute()){
        header("location: profile_user.php");
    } else {
        die();
    }

}