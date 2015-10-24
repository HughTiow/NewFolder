
<?php
session_start(); // Starting Session
$error=''; 

if (isset($_POST['submit'])){
		$con=mysqli_connect("localhost","root","tiow0403","online_sale_games");
	
	if (!$con) {
    die("Connection failed: ".mysqli_connect_error());
	}

	
			$response=array();
			

				$user_name		=mysqli_real_escape_string($con,$_POST['user_name']);
				$first_name		=mysqli_real_escape_string($con,$_POST['first_name']);
				$last_name		=mysqli_real_escape_string($con,$_POST['last_name']);
				$Contact_number	=mysqli_real_escape_string($con,$_POST['Contact_number']);
				$home_address	=mysqli_real_escape_string($con,$_POST['home_address']);
				$inputEmail		=mysqli_real_escape_string($con,$_POST['inputEmail']);
				$inputPassword	=mysqli_real_escape_string($con,$_POST['inputPassword']);

					$result= $con->query("SELECT user_name FROM customer WHERE user_name='$user_name'");
					$result2= $con->query("SELECT email FROM customer WHERE email='$inputEmail'");
					$result2= $con->query("SELECT email FROM staff WHERE staffEmail='$inputEmail'");

					if($result->num_rows==1){

						echo "<script>alert('User Name  has been used .Please rewrite again.')</script>";
						

					}else if($result2->num_rows==1){
						echo "<script>alert('Email address  has been used .Please rewrite again.')</script>";

					}else if($result3->num_rows==1){
						echo "<script>alert('Email address  has been used .Please rewrite again.')</script>";

					}else{

					$sql=mysqli_query($con,"INSERT INTO customer(user_name,password,firstName,lastName,email,address,phone) VALUES('$user_name',sha1('$inputPassword'),'$first_name','$last_name','$inputEmail','$home_address','$Contact_number')");
					$_SESSION['login_user']=$user_name;
					header("location:ogs.php");

					}
					


								
		

	mysqli_close($con);

}
?>