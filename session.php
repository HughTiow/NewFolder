<?php

$connection = mysql_connect("localhost", "root", "tiow0403");

$db = mysql_select_db("online_sale_games", $connection);
session_start();
if ((empty($_SESSION['login_user']))AND(empty($_SESSION['staff']))){
	mysql_close($connection); 
}else if(!empty($_SESSION['staff'])){
		$user_check=$_SESSION['staff'];

		$ses_sql2=mysql_query("select * from staff where staff_ID='$user_check'", $connection);
		$row = mysql_fetch_assoc($ses_sql2);
		$login_staff =$row['staffEmail'];
		if(!isset($login_staff)){
		$login_staff="";	
		mysql_close($connection); 
	}
}else{
		$user_check=$_SESSION['login_user'];

		$ses_sql=mysql_query("select user_name from customer where user_name='$user_check'", $connection);
		$row = mysql_fetch_assoc($ses_sql);
		$login_session =$row['user_name'];
		if(!isset($login_session)){
		$login_session="";	
		mysql_close($connection); 
	}

	}

?>
