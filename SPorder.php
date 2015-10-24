<?php

if (isset($_POST['submit'])){
$conn=mysqli_connect("localhost","root","tiow0403","online_sale_games");
	
	if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
	}
				
				$first_name		=mysqli_real_escape_string($conn,$_POST['first_name']);
				$last_name		=mysqli_real_escape_string($conn,$_POST['last_name']);
				$gender			=mysqli_real_escape_string($conn,$_POST['gender']);
				$inputEmail		=mysqli_real_escape_string($conn,$_POST['inputEmail']);
				$phone			=mysqli_real_escape_string($conn,$_POST['phone']);
				$game_name		=mysqli_real_escape_string($conn,$_POST['game_name']);
				$home_address	=mysqli_real_escape_string($conn,$_POST['home_address']);
				$country		=mysqli_real_escape_string($conn,$_POST['country']);
				$language		=mysqli_real_escape_string($conn,$_POST['language']);
				



				
				

				if(!empty($_POST['PS3'])){
					$PS3			=mysqli_real_escape_string($conn,$_POST['PS3']);
				}else{
					$PS3="no";
				}
				
				if(!empty($_POST['PS4'])){
					$PS4			=mysqli_real_escape_string($conn,$_POST['PS4']);
				}else{
					$PS4="no";
				}

				if(!empty($_POST['PSP'])){
					$PSP			=mysqli_real_escape_string($conn,$_POST['PSP']);
				}else{
					$PSP="no";
				}

				if(!empty($_POST['PSVista'])){
					$PSVista			=mysqli_real_escape_string($conn,$_POST['PSVista']);
				}else{
					$PSVista="no";
				}

				if(!empty($_POST['PSVista_TV'])){
					$PSVista_TV			=mysqli_real_escape_string($conn,$_POST['PSVista_TV']);
				}else{
					$PSVista_TV="no";
				}

				if(!empty($_POST['comments'])){
					$comments			=mysqli_real_escape_string($conn,$_POST['comments']);
				}else{
					$comments="no";
				}


				$sql=mysqli_query($conn,"INSERT INTO specialorder(firstName,lastName,gender,email,phone,address,country,gameName,language,PS3,PS4,PSP,PSVista,PSVista_TV,commet) 
					VALUES('$first_name','$last_name','$gender','$inputEmail','$phone','$home_address','$country','$game_name','$language','$PS3','$PS4','$PSP','$PSVista','$PSVista_TV','$comments')");
				
				    echo "<script>alert('Record updated successfully')</script>";
				
				    echo "<script>alert('Error updating record: ')</script>". mysqli_error($conn);
				


mysqli_close($conn);
}
?>