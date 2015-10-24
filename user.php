<?php
include('session.php'); 
include('userInfomation.php'); 
include('changeinformation.php'); 
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<title>Untitled Document</title>

<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-family: "Times New Roman", Times, serif;
}
.style2 {font-size: 18px}
.style3 {font-size: 18px; font-family: Arial, Helvetica, sans-serif; }
.style4 {font-size: 9px}
-->
</style>
<link href="carousel.css" rel="stylesheet">
</head>
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
                  <li ><a href="ogs.php">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="specialOrder.php">Special Order</a></li>
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
                  <li><?php
                     
                    if(empty($_SESSION['login_user'])){
                      echo " <a href='#'' class='dropdown-toggle' data-toggle='dropdown'>Joint us<span class='caret'></span></a>
                            <ul class='dropdown-menu' role='menu'>
                            <li><a href='register.php'>Register</a></li>
                            <li><a href='signIn.php'>Sign in</a></li>
                            </ul>";
                     }else{
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
	
	
<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/Nice-Design-Game-Wallpaper.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              
              
              <p><a class="btn btn-lg btn-primary" href="#jump" role="button">Jump To</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/Nice-Design-Game-Wallpaper2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 class="test">What Are You Waiting For?</h1>
              
              <p><a class="btn btn-lg btn-primary" href="#assassin" role="button">See more</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

<div align="center" style="color:#FFFFFF">
  <p class="style1">Customer ID </p>
</div>

<p class="style3" style="color:#FFFFFF">Personal Info</p>

<span class="style2"></span>
<form class="form-signin" role="form" action="" method="post">
<table width="846" border="1" cellspacing="10" style="color:#0066FF" bordercolorlight="red" bordercolordark="#CCFF33">
  <tr>
    <td width="234" height="41"><span class="style2"> <label for="user_name">User_Name</label></span></td>
    <td width="572">
    <?php 
    if(isset($_POST['submit'])){
       echo "<input type='text' id='user_name' name='user_name' class='form-control' value='$login_session' required>";
    }else{
      echo $login_session;
      } ?>
    </td>
  </tr>
  <tr>
    <td height="37"><span class="style2"><label for="first_name">First Name </label></span></td>
    <td>
    <?php 
    if(isset($_POST['submit'])){
       echo "<input type='text' id='first_name' name='first_name' class='form-control' value='$firstName' required>";
    }else{
      echo $firstName;
      } ?>
    </td>
  </tr>
  <tr>
    <td height="36"><span class="style2"><label for="last_name">Last Name </label></span></td>
    <td>
    <?php 
    if(isset($_POST['submit'])){
       echo "<input type='text' id='last_name' name='last_name' class='form-control' value='$lastName' required>";
    }else{
      echo $lastName;
      } ?>
      </td>
  </tr>
  <tr>
    <td height="37"><span class="style2"><label for="inputEmail">Email</label></span></td>
    <td>
     <?php 
    if(isset($_POST['submit'])){
       echo "<input type='text' id='inputEmail' name='inputEmail' class='form-control' value='$email' required>";
    }else{
      echo $email;
      } ?>
    </td>
  </tr>
  <tr>
    <td height="37"><span class="style2"><label for="home_address">Address</label></span></td>
    <td>
     <?php 
    if(isset($_POST['submit'])){
       echo "<input type='text' id='home_address' name='home_address' class='form-control' value='$address' required>";
    }else{
      echo $address;
      } ?>
    </td>
  </tr>
  <tr>
    <td height="37" ><span class="style2"><label for="Contact_number">Phone Number</label></span></td>
    <td>
     <?php 
    if(isset($_POST['submit'])){
       echo "<input type='text' id='Contact_number' name='Contact_number' class='form-control' value='$phone' required>";
    }else{
      echo $phone;
      } ?>
    </td>
  </tr>
</table>
<?php
if(isset($_POST['submit'])){
   echo "<button class='btn btn-lg btn-primary btn-block' name='change' type='submit'>Done</button>";
}else{
  echo "<button class='btn btn-lg btn-primary btn-block' name='submit' type='submit'>Change Information</button>";
  }
?>
</form>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
