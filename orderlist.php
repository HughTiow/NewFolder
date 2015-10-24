<?php
include('session.php'); 
include('price.php');
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
<!-- NAVBAR
================================================== -->
  <body style="background-image: url(img/bg.jpg);background-attachment:fixed">
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="ogs.php">Online Sale Game</a>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li><a href="ogs.php">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <?php
                  if(!empty($_SESSION['staff'])){
                      echo " <li><a href='checkSpecialOrder.php'>Special Order</a></li>";
                }else{
                   echo " <li><a href='specialOrder.php'>Special Order</a></li>";
                }
                ?>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Platform<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="ps3.php">PS3</a></li>
                      <li><a href="ps4.php">PS4</a></li>
                      <li><a href="psp.php">PSP</a></li>
                      <li class="divider"></li>
                      <li><a href="psvita.php">PSVITA</a></li>
                      <li><a href="psvitatv.php">PSVITA TV</a></li>
                    </ul>
                  </li>
                  <li class="active"><a href="#"><b>PSVITA</b></a></li>
                  <li><?php
                     
                    if((empty($_SESSION['login_user']))AND(empty($_SESSION['staff']))){
                      echo " <a href='#'' class='dropdown-toggle' data-toggle='dropdown'>Joint us<span class='caret'></span></a>
                            <ul class='dropdown-menu' role='menu'>
                            <li><a href='register.php'>Register</a></li>
                            <li><a href='signIn.php'>Sign in</a></li>
                            </ul>";
                     }else if(!empty($_SESSION['staff'])){
                      echo "<a class='dropdown-toggle' data-toggle='dropdown'>$login_staff<span class='caret'></span><a>
                            <ul class='dropdown-menu' role='menu'>
                            <li> <a href='orderlist.php'>Order List</a></li>
                            <li> <a href='logout.php'>Log out</a></li></ul>";
                     } else{
                      echo "<a class='dropdown-toggle' data-toggle='dropdown'>$login_session<span class='caret'></span><a>
                            <ul class='dropdown-menu' role='menu'>
                            <li> <a href='user.php'>Home</a></li>
                            <li> <a href='logout.php'>Log out</a></li></ul>";
                     } 
                      ?>
                  </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
    <br/><br/><br/><br/><br/>
     <form class="form-signin" role="form" action="" method="post">
   <table border="1" cellspacing="10"  bordercolorlight="red" bordercolordark="#CCFF33" style="margin-left:10pt">
   <caption style="font-size:25pt">Game Order List</caption>
   <tr>                    

                          <td>orderID</td>
                          <td>customerID</td>
                          <td>Game ID</td>
                          <td>Game Name</td>
                          <td>date</td>
                          <td>Price</td>
                          <td>Quantity</td>
                          <td>Total Price</td>
                          </tr>
   <?php
       $conn = mysqli_connect("localhost", "root", "tiow0403","online_sale_games");

      
      
      if (!$conn) {
          die("Connection failed: " . mysql_connect_error());
      }

     

     $user_check=$_SESSION['staff'];


      $sql = "SELECT * FROM  order_list l,game g where  l.gameID=g.gameID ";
       $result = mysqli_query($conn,$sql);

      if(!$result){
              echo "Failed".mysql_error();
        }
     
      if (mysqli_num_rows($result) > 0) {
          
          while($row = $result->fetch_assoc()) {
               echo     "<tr>
                          <td>".$row["orderID"]."</td>
                          <td>".$row["customerID"]."</td>
                          <td>".$row["gameID"]."</td>
                          <td>".$row["gameName"]."</td>
                          <td>".$row["date"]."</td>
                          <td>".$row["price"]."</td>
                          <td>".$row["quantity"]."</td>
                          <td>".$row["totalPrice"]."</td>
                          </tr>";
          }
      } else {
           $reation="0 results";
      }



mysqli_close($conn);
    ?>
   <tr>
   </tr>
   </table>
   </form>
   <form class="form-signin" role="form" action="" method="post">
   <table border="1" cellspacing="10"  bordercolorlight="red" bordercolordark="#CCFF33" style="margin-left:10pt">
   <caption style="font-size:25pt">Customer Order List</caption>
   <tr>                    

                          <td>orderID</td>
                          <td>customerID</td>
                          <td>Game ID</td>
                          <td>Firs tName</td>
                          <td>Last Name</td>
                          <td>date</td>
                          <td>email</td>
                          <td>address</td>
                          <td>phone</td>
                          <td>Total Price</td>
                          </tr>
   <?php
       $conn = mysqli_connect("localhost", "root", "","online_sale_games");

      
      
      if (!$conn) {
          die("Connection failed: " . mysql_connect_error());
      }

     

     $user_check=$_SESSION['staff'];


      $sql = "SELECT c.*,l.* FROM  order_list l LEFT JOIN customer c ON  c.customerID=l.customerID";
       $result = mysqli_query($conn,$sql);

      if(!$result){
              echo "Failed".mysql_error();
        }
     
      if (mysqli_num_rows($result) > 0) {
          
          while($row = $result->fetch_assoc()) {
               echo     "<tr>
                          <td>".$row["orderID"]."</td>
                          <td>".$row["customerID"]."</td>
                          <td>".$row["gameID"]."</td>
                          <td>".$row["firstName"]."</td>
                          <td>".$row["lastName"]."</td>
                          <td>".$row["date"]."</td>
                          <td>".$row["email"]."</td>
                          <td>".$row["address"]."</td>
                          <td>".$row["phone"]."</td>
                          <td>".$row["totalPrice"]."</td>
                          </tr>";
          }
      } else {
           $reation="0 results";
      }



mysqli_close($conn);
    ?>
   <tr>
   </tr>
   </table>
   </form>




    <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
