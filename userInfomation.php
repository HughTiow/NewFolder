<?php

$connection = mysql_connect("localhost", "root", "tiow0403");

$db = mysql_select_db("online_sale_games", $connection);

if (empty($_SESSION['login_user'])){
	mysql_close($connection); 
}else{
		$user_check=$_SESSION['login_user'];

		$ses_sql=mysql_query("select * from customer where user_name='$user_check'", $connection);
		$row = mysql_fetch_assoc($ses_sql);

		$login_session 	=$row['user_name'];
		$firstName 		=$row['firstName'];
		$lastName 		=$row['lastName'];
		$email 			=$row['email'];
		$address		=$row['address'];
		$phone			=$row['phone'];
		$customerID		=$row['customerID'];

		
		if(!isset($login_session)){
		$login_session="";	
		$firstName 	="";
		$lastName 	="";
		$email 		="";
		$address 	="";
		$phone		="";
		}

}
?>
