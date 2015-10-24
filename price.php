<?php

$connection = mysql_connect("localhost", "root", "tiow0403");

$db = mysql_select_db("online_sale_games", $connection);
 if(isset($_POST['submit'])){
		$gameName=$_POST['gameName'];
		$ses_sql=mysql_query("select * from game where gameName='$gameName'", $connection);
		$row = mysql_fetch_assoc($ses_sql);
		$gamePrice =$row['price'];
		$store =$row['store'];
		if((!isset($gamePrice))||$store==0){
		mysql_close($connection); 
		}
			
		
		

}else if(isset($_POST['submit2'])){
		$gameName2=$_POST['gameName2'];
		$ses_sql=mysql_query("select * from game where gameName='$gameName2'", $connection);
		$row = mysql_fetch_assoc($ses_sql);
		$gamePrice2 =$row['price'];
		$store2 =$row['store'];
		if((!isset($gamePrice2))||$store2==0){
		
		mysql_close($connection); 
		}
}else if(isset($_POST['submit3'])){
		$gameName3=$_POST['gameName3'];
		$ses_sql=mysql_query("select * from game where gameName='$gameName3'", $connection);
		$row = mysql_fetch_assoc($ses_sql);
		$gamePrice3 =$row['price'];
		$store3 =$row['store'];
		if((!isset($gamePrice3))||$store3==0){
		
		mysql_close($connection); 
		}
}else if(isset($_POST['submit4'])){
		$gameName4=$_POST['gameName4'];
		$ses_sql=mysql_query("select * from game where gameName='$gameName4'", $connection);
		$row = mysql_fetch_assoc($ses_sql);
		$gamePrice4 =$row['price'];
		$store4 =$row['store'];
		if((!isset($gamePrice4))||$store4==0){
		
		mysql_close($connection); 
		}
}else if(isset($_POST['buyit'])){
	

		$quantity=$_POST['quantity'];
		$gameName=$_POST['gameName'];
		$ses_sql=mysql_query("select * from game where gameName='$gameName'", $connection);
		$row = mysql_fetch_assoc($ses_sql);
		$gamePrice =$row['price'];
		$gameID		=$row['gameID'];
		
		$ses_sql=mysql_query("select * from customer where user_name='$user_check'", $connection);
		$row = mysql_fetch_assoc($ses_sql);
		$customerID		=$row['customerID'];
		
		if ((!empty($gamePrice))and(!empty($gameID))and(!empty($customerID))and(!empty($quantity))) {
			$sql=mysql_query("INSERT INTO order_item(gameID,quantity,customerID) VALUES('$gameID','$quantity','$customerID')", $connection);
				if(!$sql){
			        echo "Failed".mysql_error();
				}
			    else{
				$url="orderItem.php";
				echo "<script type='text/javascript'>window.open('$url');</script>";
			}
		}
		
		
	
	mysql_close($connection);
}else if(isset($_POST['buyit2'])){
	

		$quantity2=$_POST['quantity2'];
		$gameName2=$_POST['gameName2'];
		$ses_sql=mysql_query("select * from game where gameName='$gameName2'", $connection);
		$row = mysql_fetch_assoc($ses_sql);
		$gamePrice2 =$row['price'];
		$gameID2		=$row['gameID'];
		
		$ses_sql=mysql_query("select * from customer where user_name='$user_check'", $connection);
		$row = mysql_fetch_assoc($ses_sql);
		$customerID2		=$row['customerID'];
		
		if ((!empty($gamePrice2))and(!empty($gameID2))and(!empty($customerID2))and(!empty($quantity2))) {
			$sql=mysql_query("INSERT INTO order_item(gameID,quantity,customerID) VALUES('$gameID2','$quantity2','$customerID2')", $connection);
				if(!$sql){
			        echo "Failed".mysql_error();
				}
			    else{
				$url="orderItem.php";
				echo "<script type='text/javascript'>window.open('$url');</script>";
			}
		}
		
		
	
	mysql_close($connection);
}else if(isset($_POST['buyit3'])){
	

		$quantity3=$_POST['quantity3'];
		$gameName3=$_POST['gameName3'];
		$ses_sql=mysql_query("select * from game where gameName='$gameName3'", $connection);
		$row = mysql_fetch_assoc($ses_sql);
		$gamePrice3 =$row['price'];
		$gameID3		=$row['gameID'];
		
		$ses_sql=mysql_query("select * from customer where user_name='$user_check'", $connection);
		$row = mysql_fetch_assoc($ses_sql);
		$customerID3		=$row['customerID'];
		
		if ((!empty($gamePrice3))and(!empty($gameID3))and(!empty($customerID3))and(!empty($quantity3))) {
			$sql=mysql_query("INSERT INTO order_item(gameID,quantity,customerID) VALUES('$gameID3','$quantity3','$customerID3')", $connection);
				if(!$sql){
			        echo "Failed".mysql_error();
				}
			    else{
				$url="orderItem.php";
				echo "<script type='text/javascript'>window.open('$url');</script>";
			}
		}
		
		
	
	mysql_close($connection);
}else if(isset($_POST['buyit4'])){
	

		$quantity4=$_POST['quantity4'];
		$gameName4=$_POST['gameName4'];
		$ses_sql=mysql_query("select * from game where gameName='$gameName4'", $connection);
		$row = mysql_fetch_assoc($ses_sql);
		$gamePrice4 =$row['price'];
		$gameID4	=$row['gameID'];
		
		$ses_sql=mysql_query("select * from customer where user_name='$user_check'", $connection);
		$row = mysql_fetch_assoc($ses_sql);
		$customerID4		=$row['customerID'];
		
		if ((!empty($gamePrice4))and(!empty($gameID4))and(!empty($customerID4))and(!empty($quantity4))) {
			$sql=mysql_query("INSERT INTO order_item(gameID,quantity,customerID) VALUES('$gameID4','$quantity4','$customerID4')", $connection);
				if(!$sql){
			        echo "Failed".mysql_error();
				}
			    else{
				$url="orderItem.php";
				echo "<script type='text/javascript'>window.open('$url');</script>";
			}
		}
		
		
	
	mysql_close($connection);
}else if(isset($_POST['edit'])){
	$gameName=$_POST['gameName'];
	$store	=mysql_real_escape_string($_POST['store']);
	$sql = mysql_query("UPDATE game SET store='$store' 	 WHERE gameName='$gameName'",$connection);
			if(!$sql){
			 echo "Failed".mysql_error();
				}else{
					echo "<script>alert('Record updated successfully')</script>";
				}
			   

}else if(isset($_POST['edit2'])){
	$gameName2=$_POST['gameName2'];
	$store2	=mysql_real_escape_string($_POST['store2']);
	$sql = mysql_query("UPDATE game SET store='$store2' 	 WHERE gameName='$gameName2'",$connection);
			if(!$sql){
			 echo "Failed".mysql_error();
				}else{
					echo "<script>alert('Record updated successfully')</script>";
				}
			   

}else if(isset($_POST['edit3'])){
	$gameName3=$_POST['gameName3'];
	$store3	=mysql_real_escape_string($_POST['store3']);
	$sql = mysql_query("UPDATE game SET store='$store3' 	 WHERE gameName='$gameName3'",$connection);
			if(!$sql){
			 echo "Failed".mysql_error();
				}else{
					echo "<script>alert('Record updated successfully')</script>";
				}
			   

}else if(isset($_POST['edit4'])){
	$gameName4=$_POST['gameName4'];
	$store4	=mysql_real_escape_string($_POST['store4']);
	$sql = mysql_query("UPDATE game SET store='$store4' 	 WHERE gameName='$gameName4'",$connection);
			if(!$sql){
			 echo "Failed".mysql_error();
				}else{
					echo "<script>alert('Record updated successfully')</script>";
				}
			   

}																
?>
