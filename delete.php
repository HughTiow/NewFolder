
<?php
	$login=mysql_connect("localhost","root",'tiow0403');
	
	mysql_selectDB("online_sale_games",$login);
		

	$orderItemID=$_GET['orderItemID'];
	$query=mysql_query("delete from order_item where orderItemID='$orderItemID'");
	
	$url="orderItem.php";
	echo "<script type='text/javascript'>window.open('$url','_self');</script>";
	
?>
