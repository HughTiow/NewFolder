<?php
include('session.php'); 

?>

<!DOCTYPE html>
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
   
    </script>
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
	                <li class="active"><a href="ogs.php">Home</a></li>
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
              
              
              <p><a class="btn btn-lg btn-primary" href="register.php" role="button">Join Us</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/Nice-Design-Game-Wallpaper2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 class="test">What Are You Waiting For?</h1>
              
              <p><a class="btn btn-lg btn-primary" href="#jump" role="button">Jump to</a></p>
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

    
    <hr class="featurette-divider" id="jump">
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <h1 class="test">Platform</h1>
    <br/>

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="img/ps4logo.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>PlayStation®3</h2>
          <p>The Best Place to Play™</p>
          <p>Gamer Focused, Developer Inspired</p>
          <p>New DUALSHOCK®4 Wireless Controller</p>
          </br>
          <p><a class="btn btn-default" href="ps4.php" role="button">View Games &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/ps3logo.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>PlayStation®4</h2>
          <p>High Quality Gaming Experience</p>
          <p>Unlimitied Extension</p>
          <p>Blu-ray in One</p>
          </br>
          <p><a class="btn btn-default" href="ps3.php" role="button">View Games &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/psplogo.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>PlayStation®Portable</h2>
          <p>Enjoy portable gaming with PSP®</p>
          <p>Powerful and Portable</p>
          <p>All in one digital device</p>
          </br>
          <p><a class="btn btn-default" href="psp.php" role="button">View Games &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <br/>
      <br/>
      <br/>
      
      <div class="row" style="width: 70%; margin: 0px auto;">
      
        <div class="col-lg-4" style="width: 55%; margin: 0px auto;">
          <img class="img-circle" src="img/psvitalogo.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>PlayStation®VITA</h2>
          <br/>
          <p>Transform your world</p>
          <p>Interact with the world</p>
          <p>Non-stop action</p>
          </br>
          <p><a class="btn btn-default" href="psvita.php" role="button">View Games &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4" >
          <img class="img-circle" src="img/psvitatvlogo.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>PlayStation®VITA TV</h2>
          <p>Easy for Beginners & More Fun for Game Lovers</p>
          <p>From “Watch TV” to “Play with TV”</p>
          
          </br>
          <p><a class="btn btn-default" href="psvitatv.php" role="button">View Games &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
       
      </div><!-- /.row -->
      
      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      


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
