<?php
include('session.php'); 
include('order.php');

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Online Game Sale</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
   <body style="background-image: url(img/bg.jpg);background-attachment:fixed">
   <form class="form-signin" role="form" action="" method="post">
   <table border="1" cellspacing="10"  bordercolorlight="red" bordercolordark="#CCFF33">
   <tr>
                          <td>Game Name</td>
                          <td>Price</td>
                          <td>Quantity</td>
                          <td>Total Price</td>
                          </tr>
   <?php
       $conn = mysqli_connect("localhost", "root", "tiow0403","online_sale_games");

      
      
      if (!$conn) {
          die("Connection failed: " . mysql_connect_error());
      }

     

      $user_check=$_SESSION['login_user'];

     $ses_sql=mysqli_query($conn,"select * from customer where user_name='$user_check'");
     $customer_row = mysqli_fetch_assoc($ses_sql);
     $customerID    =$customer_row['customerID'];

      $sql = "SELECT gameName,g.price,orderItemID,quantity FROM game g,order_item o Where g.gameID=o.gameID AND o.customerID='$customerID' ";
       $result = mysqli_query($conn,$sql);

      if(!$result){
              echo "Failed".mysql_error();
        }
        $allTotalPrice=0;
       
      if (mysqli_num_rows($result) > 0) {
          
          while($row = $result->fetch_assoc()) {
             $orderItemID=$row['orderItemID'];
            $totalPrice= $row["price"]*$row["quantity"];
               echo     "<tr>
                          <td>".$row["gameName"]."</td>
                          <td>".$row["price"]."</td>
                          <td>".$row["quantity"]."</td>
                          <td>".$totalPrice."</td>
                          <td><a href=delete.php?orderItemID=$orderItemID /><input type='button' value='Delete'></a></td>
                          </tr>";
              
          }
      } else {
           $reation="0 results";
      }



mysqli_close($conn);
    ?>
   <tr>
    <td colspan="3" >TOTAL PRICE</td>
    <td><?php echo $allTotalPrice; ?></td>
   </tr>
   <tr>
    <td colspan="4" ><button class='btn btn-lg btn-primary btn-block' name='confrim' type='submit'>confrim</button></td>
   </tr>
   </table>
   </form>
       

   </body>
</html>
