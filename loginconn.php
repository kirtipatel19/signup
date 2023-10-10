<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$host ="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "intro";


$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
$sql = "SELECT * FROM info WHERE username = '$username' and password = '$password'";

$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if($num==1){
	header("location:front.html");
}else{
	echo '<script> alert("Invalid username or password");</script>';
}



?>