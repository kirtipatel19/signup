<?php
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');


//database connection
 
$conn = new mysqli('localhost', 'root', '', 'intro');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$sql = "INSERT INTO  info(username, email,  password)
	       values('$username' ,'$email',  '$password')";

	       if($conn->query($sql)){
	       	header("location:loginn.php");
	       }

	       $conn->close();
}



?>

?>