<?php

 $conn = mysqli_connect("localhost", "root", "tiow0403","online_sale_games");

      
      
      if (!$conn) {
          die("Connection failed: " . mysql_connect_error());
      }
 if(isset($_POST['confrim'])){

      $user_check2=$_SESSION['login_user'];

     $ses_sql2=mysqli_query($conn,"select * from customer where user_name='$user_check2'");
     $customer_row2 = mysqli_fetch_assoc($ses_sql2);
     $customerID2    =$customer_row2['customerID'];

 	$sql2 = "SELECT g.gameID,gameName,store,g.price,orderItemID,quantity FROM game g,order_item o Where g.gameID=o.gameID AND o.customerID='$customerID2' ";
       $result2 = mysqli_query($conn,$sql2);

      if(!$result2){
              echo "Failed".mysql_error();
        }
 	if (mysqli_num_rows($result2) >0) {
		while($row = $result2->fetch_assoc()) {
            $totalPrice= $row["price"]*$row["quantity"];
         
            
              $sql3=mysql_query("INSERT INTO order_list(orderID,customerID,gameID,date,quantity,totalPrice) VALUES('".$row['orderItemID']."','$customerID2','".$row['gameID']."','".date('Y/m/d')."','".$row['quantity']."','$totalPrice')", $connection);
          if(!$sql3){
			        echo "Failed".mysql_error();
				}
			    else{
        $store= $row["store"]-$row["quantity"];

        
        $sql5 =mysql_query("UPDATE game SET store='$store'  WHERE gameName='".$row['gameName']."'", $connection);
          if(!$sql5){
              echo "Failed".mysql_error();

              }else{
    				$sql4 =mysql_query("DELETE FROM order_item WHERE orderItemID='".$row['orderItemID']."'", $connection);
    					if(!$sql4){
    			        echo "Failed".mysql_error();
                }
				}
			}    

          }
      } else {
           $reation="0 results";
      }
		mysql_close($connection); 
		
		

}		
?>
