
<?php
session_start(); // Starting Session
$error=''; 

		$con=mysqli_connect("localhost","root","tiow0403","online_sale_games");

	if (!$con) {
    die("Connection failed: ".mysqli_connect_error());
	}

			

$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['inputEmail']) || empty($_POST['inputPassword'])) {
$error = "Email or Password is invalid.Please rewrite again.a";
}
else
{
$inputEmail=$_POST['inputEmail'];
$inputPassword=$_POST['inputPassword'];
$inputPassword=sha1('$inputPassword');


$inputEmail		=mysqli_real_escape_string($con,$inputEmail);
$inputPassword	=mysqli_real_escape_string($con,$inputPassword);

$query = mysqli_query($con,"SELECT * FROM customer where password='$inputPassword' AND email='$inputEmail'");
$row = mysqli_fetch_assoc($query);
$username 	=$row['user_name'];


if (!empty($username)) {
$_SESSION['login_user']=$username;
header("location: ogs.php"); 
}else {
$query = mysqli_query($con,"SELECT * FROM staff where password='$inputPassword' AND staffEmail='$inputEmail'");
$row = mysqli_fetch_assoc($query);
$staff 	=$row['staff_ID'];

if (!empty($staff)) {
$_SESSION['staff']=$staff;
header("location: ogs.php"); 
}else {	$error = "Email or Password is invalid.Please rewrite again.1";
}
}
}
}


								
		

	


?>