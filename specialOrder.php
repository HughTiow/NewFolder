<?php
include('session.php'); 
include('userInfomation.php'); 
include('SPorder.php'); 
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

      </style>
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
                  <li ><a href="ogs.php">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li class="active"><a href="specialOrder.php">Special Order</a></li>
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
    <form name="reg" id="reg" action="" method="post">
<table width="100%" bgcolor="yellow" >
  <thead style="font-family: sans-serif; background-color: rgb(0,153,255)">
    <tr>
       <td style="font-size: 1.2em; color: yellow; font-weight: bold; font-style: italic"
         valign="top" align="center" colspan="2">
        Special order form
       </td>
    </tr>
  </thead>
  <tr>
     <td style="font-family: sans-serif; font-size: large; font-weight: bold"
       colspan="2" width="100%" valign="top" align="center">
       Personal Information
     </td>
  </tr>
  <tr>
     <td colspan="2">
          <hr style="color: rgb(133,0,0); background-color: rgb(133,0,0); height: 1" />
        </td>
      </tr>
      <tr>   
       <td valign="top" >
       <table>
       <tr>
          <td width="100"><label for="first_name">First Name</label></td>
          <td style="color: rgb(0,0,0)"><input type ="text" name="first_name" id="first_name" size="30" class="form-control" accesskey="f" <?php if(!empty($_SESSION['login_user'])){echo "value='".$firstName."'";}?>/></td>
          <td><label for="iname">Last Name</label></td>

          <td style="color: rgb(0,0,0)"><input type="text" name="last_name" id="last_name" size="40"class="form-control" class="form-signin" <?php if(!empty($_SESSION['login_user'])){echo "value='".$lastName."'";}?>/></td>
          </td>
      </tr>
      <tr>
        <td>
        <label for="gender">Gender</label>
        </td>

        <td>
        <input type="radio" name="gender" id="Male" value="Male" checked="checked" class="form-signin"/>
        <label for="Male">Male</label>
        <input type="radio" name="gender" id="Female" value="Female" class="form-signin"/>
        <label for="Female">Female</label>
        </td>
      </tr>
      <tr>
          <td><label for="inputEmail">Email Address</label></td>
          <td style="color: rgb(0,0,0)"><input type="text" name="inputEmail" id="inputEmail" size="40"  class="form-control" <?php if(!empty($_SESSION['login_user'])){echo "value='".$email."'";}?>/>
          </td>
      
          <td><label for="phone">Contact number</label></td>
          <td style="color: rgb(0,0,0)"><input type="text" name="phone" id="phone" size="20" class="form-control" <?php if(!empty($_SESSION['login_user'])){echo "value='".$phone."'";}?>/>
          </td>
      </tr>
      
      </tr>
      <tr>
          <td><label for="home_address">Home Address</label></td>
          <td style="color: rgb(0,0,0)"><input type="text" name="home_address" id="home_address" size="60" class="form-control" <?php if(!empty($_SESSION['login_user'])){echo "value='".$address."'";}?>/>
          </td>
      
          <td><label for="country">Country</label></td>
          <td style="color: rgb(0,0,0)"><input type="text" name="country" id="country" size="40" class="form-control" value="United States"/>
          </td>
      </tr>   
      </table>
     </td>
  </tr> 
  <tr>
     <td colspan="2">
      <hr style="color: rgb(133,0,0); background-color: rgb(133,0,0); height: 1" />
     </td>
  </tr>
  <tr>
     <td style="font-family: sans-serif; font-size: large; font-weight: bold"
       colspan="2" width="100%" valign="top" align="center">
       Order Requet
     </td>
  </tr>
  <tr>
     <td colspan="2">
      <hr style="color: rgb(133,0,0); background-color: rgb(133,0,0); height: 1" />
     </td>
  </tr>
  <tr>
    <td valign="top" colspan="2">
      <table>
       <tr>
          <td width="100"><label for="game_name">Game Name</label></td>
          <td style="color: rgb(0,0,0)"><input type ="text" name="game_name" id="game_name" size="30" class="form-control" /></td>
          <td width="100" valign="top" rowspan="2"><label for="language">Game language</label></td>
          <td valign="top" rowspan="2">
          <select name="language" id="language" size="1" style="color: rgb(0,0,0)">
              <option>Chinese</option>
              <option>English</option>
              <option>Japanese</option>
              <option>Spanish</option>
              <option>Tamil</option>
          </select>       
        </td>
      </tr>
      <tr>
          <td colspan="2">
          <fieldset>
          <legend><span style="color: rgb(255,255,255)">Choose platform(can more than one)</span></legend>
            <input type="checkbox" name="PS3" id="PS3" value="yes"/>
            <label for="PS3">PS3</label><br/>
            <input type="checkbox" name="PS4" id="PS4" value="yes"/>
            <label for="PS4">PS4</label><br/>
            <input type="checkbox" name="PSP" id="PSP" value="yes"/>
            <label for="PSP">PSP</label><br/>
            <input type="checkbox" name="PSVista" id="PSVista" value="yes"/>
            <label for="PSVista">PSVista</label><br/>
            <input type="checkbox" name="PSVista_TV" id="PSVista_TV" value="yes"/>
            <label for="PSVista_TV">PSVista TV</label><br/>
          </fieldset>
          </td>
      </tr>
      <tr>
          <td valign="top" colspan="2">
   <table>
    <tr>
      <td width="100" align="top">
      <label for="comments">Comments?</label>
      </td>
      <td valign="top">
      <textarea name="comments" id="comments" rows="6" cols="50"></textarea>
      </td>
    </tr>
  </table>  
   </td>
        </tr>
      </table>
    </td>
  </tr> 
  <tr>
    <td>
    <table align="center">
        <tr >
            <td>
             <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Submit</button>
            </td>
            <td>
             <button class="btn btn-lg btn-primary btn-block" name="cancel" type="cancel">cancel</button>
            </td>
        </tr>
  </table>
    </td>
    </tr>
    </table>
    </form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
