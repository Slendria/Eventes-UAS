<?php
include 'config.php';

$host="localhost";
$user="root";
$password="";
$db="users";

session_start();


$conn=mysqli_connect($host,$user,$password,$db);

if($conn===false)
{
	die("connection error");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
    $password = ($_POST['password']);


	$sql="SELECT * from users where username='".$username."' AND password='".$password."' ";
	$result=mysqli_query($conn,$sql);
    if ($result->num_rows > 0) {
	$row=mysqli_fetch_array($result);
    if($row["usertype"]=="user")
	{   $_SESSION["username"]=$username;
		header("location: home.php");
	}} else {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }    

    $sql="SELECT * from users where username='".$username."' AND password='".$password."' ";
    $result=mysqli_query($conn,$sql);   
    if ($result->num_rows > 0) {
    if($row["usertype"]=="admin")
    {
        $_SESSION["username"]=$username;
        header("location: admin/dash-admin.php");
    }}  {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }    
}
}
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">    
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
       background-color: #C0C0C0;
		}
    img{
      display:block;
		}
    .responsive-image {
			max-width: 100%;
			height: auto;
		}
	</style>
   

<div class="container">
<form action="" method="POST" class="login-email">
    <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
        <div class="input-group">
		<input type="text" name="username" placeholder="Username"  required>
        </div>

        <div class="input-group">
        <input type="password" name="password" placeholder="Password"  required>
        </div>
		
		<div class="input-group">
            <button name="submit" value="Login" class="btn">Login</button>
        </div>		
		<p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
</form>


	
 </div>

</body>
</html>