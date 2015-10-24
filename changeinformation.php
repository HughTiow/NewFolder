<?php

if (isset($_POST['change'])){
$conn=mysqli_connect("localhost","root","tiow0403","online_sale_games");
	
	if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
	}


				$user_name		=mysqli_real_escape_string($conn,$_POST['user_name']);
				$first_name		=mysqli_real_escape_string($conn,$_POST['first_name']);
				$last_name		=mysqli_real_escape_string($conn,$_POST['last_name']);
				$Contact_number	=mysqli_real_escape_string($conn,$_POST['Contact_number']);
				$home_address	=mysqli_real_escape_string($conn,$_POST['home_address']);
				$inputEmail		=mysqli_real_escape_string($conn,$_POST['inputEmail']);

	$result= $conn->query("SELECT user_name FROM customer WHERE user_name='$user_name'");
	if($result->num_rows==1){

						echo "<script>alert('User Name  has been used .Please rewrite again.')</script>";
						

					}else{
					$sql = "UPDATE customer SET user_name='$user_name' 	 WHERE customerID='$customerID'";
					$sql2 = "UPDATE customer SET firstName='$first_name' WHERE customerID='$customerID'";
					$sql3 = "UPDATE customer SET lastName='$last_name' 	 WHERE customerID='$customerID'";
					$sql4 = "UPDATE customer SET email='$inputEmail'	 WHERE customerID='$customerID'";
					$sql5 = "UPDATE customer SET address='$home_address' WHERE customerID='$customerID'";
					$sql6 = "UPDATE customer SET phone='$Contact_number' WHERE customerID='$customerID'";

				$_SESSION['login_user']=$user_name;
		if ((mysqli_query($conn, $sql))AND(mysqli_query($conn, $sql2))AND(mysqli_query($conn, $sql3))AND(mysqli_query($conn, $sql4))AND(mysqli_query($conn, $sql5))AND(mysqli_query($conn, $sql6))){
		    echo "<script>alert('Record updated successfully')</script>";
		    header("location:user.php");
		} else {
		    echo "<script>alert('Error updating record: ')</script>". mysqli_error($conn);
		}
}
mysqli_close($conn);
}
?>