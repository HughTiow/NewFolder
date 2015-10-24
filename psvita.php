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
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/psvita/Sword Art Online1.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Sword Art Online</h1>
              <p><a class="btn btn-lg btn-primary" href="#Sword Art Online" role="button">Jump To</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/psvita/Freedom Wars1.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Let's kill them</h1>
              
              <p><a class="btn btn-lg btn-primary" href="#Freedom Wars" role="button">See more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/psvita/Child of light1.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Child of light</h1>
              <p><a class="btn btn-lg btn-primary" href="#Child of light" role="button">See More</a></p>
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


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette" id="Sword Art Online">
        <div class="col-md-7">
        <form class="form-signin" role="form" action="" method="post">
          <h2 class="featurette-heading" ><input type="hidden" name="gameName" id="gameName" value="Sword Art Online"/>Sword Art Online</br><span class="text-muted"> Full Game(Chinese And English Version.)</span>
          <br/><?php 
          if(isset($_POST['submit'])){
         if((!isset($gamePrice))||$store==0){
          echo "<span>This game is out of stock</span>";
          }else{
          echo "RM".$gamePrice; 
          }
          }?>
          </h2>
          <p> The 2nd series of the Sword Art Online game has further evolved on PS Vita! Besides the attractive characters there is also the new development of a complete original story which can’t be experienced from the anime or the original work! Let’s go on an adventure in the world of Sword Art Online for multiple play and active battles!!.</p>

          <p>©REKI KAWAHARA/ASCII MEDIA WORKS/SAO Project ©2014 BANDAI NAMCO Games Inc.</p>
           <?php
          if((isset($_POST['submit']))AND(!empty($_SESSION['staff']))){
            echo "store :".$store."<br/>
                <input type='number' id='store' name='store' min='1' step='1' class='form-control' placeholder='Edit the store'  required><br/>
                <button class='btn btn-lg btn-primary btn-block' name='edit' type='submit'>Edit</button>";
          }else if(isset($_POST['submit'])){
            if((!isset($gamePrice))||$store==0){
           echo "<button class='btn btn-lg btn-primary btn-block' name='back' type='submit'>Back</button>";
            }else{
            echo "<button class='btn btn-lg btn-primary btn-block' name='buy' type='submit'>Buy it</button>";
            echo "<button class='btn btn-lg btn-primary btn-block' name='back' type='submit'>Back</button>";  
            }
          }else if(isset($_POST['buy'])){
            if(empty($_SESSION['login_user'])){
            echo "<span style='color:#FF0000'>You haven't sign in.Please sign in.</span>";
              echo "<button class='btn btn-lg btn-primary btn-block' name='back' type='submit'>Back</button>";  
              }else{
                echo" <input type='number' id='quantity' name='quantity' min='1' step='1' class='form-control' placeholder='How many want to buy'  required><br/>
                 <button class='btn btn-lg btn-primary btn-block' name='buyit' type='submit'>Buy it</button>";
               }
          }else{
            echo "<button class='btn btn-lg btn-primary btn-block' name='submit' type='submit'>Check it</button>";
          }?>
        </form>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/psvita/Sword Art Online.jpg" height="300" width="350" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider" id="Freedom Wars">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/psvita/Freedom Wars.jpg" height="300" width="300" alt="Generic placeholder image">
        </div>
        
        <div class="col-md-7">
        <form class="form-signin" role="form" action="" method="post">
          <h2 class="featurette-heading"><input type="hidden" name="gameName2" id="gameName2" value="Freedom Wars"/>Freedom Wars</br><span class="text-muted">Full Game(English version.)</span>
            <br/><?php 
          if(isset($_POST['submit2'])){
         if((!isset($gamePrice2))||$store2==0){
          echo "<span>This game is out of stock</span>";
          }else{
          echo "RM".$gamePrice2; 
          }
          }?>
          </h2>
          <p>In the modern times the remaining survivors of the human race have constructed several confined jail cities of “Panopticon” at various locations of the world. However, these cities states are in continuous conflict due to a severe lack of resources. In order to carry out a complete control of men, Panopticon has implemented an extreme law system called the “PT law” and sentenced most people into prison.</p>
          <p>©2014 Sony Computer Entertainment Inc.</p>
          <?php 
          if((isset($_POST['submit2']))AND(!empty($_SESSION['staff']))){
            echo "store :".$store2."<br/>
                 <input type='number' id='store2' name='store2' min='1' step='1' class='form-control' placeholder='Edit the store'  required><br/>
                <button class='btn btn-lg btn-primary btn-block' name='edit2' type='submit'>Edit</button>";
          }else if(isset($_POST['submit2'])){
            if((!isset($gamePrice2))||$store2==0){
           echo "<button class='btn btn-lg btn-primary btn-block' name='back2' type='submit'>Back</button>";
            }else{
            echo "<button class='btn btn-lg btn-primary btn-block' name='buy2' type='submit'>Buy it</button>";
            echo "<button class='btn btn-lg btn-primary btn-block' name='back2' type='submit'>Back</button>";  
            }
          }else if(isset($_POST['buy2'])){
            if(empty($_SESSION['login_user'])){
            echo "<span style='color:#FF0000'>You haven't sign in.Please sign in.</span>";
              echo "<button class='btn btn-lg btn-primary btn-block' name='back2' type='submit'>Back</button>";  
              }else{
                echo" <input type='number' id='quantity' name='quantity2' min='1' step='1' class='form-control' placeholder='How many want to buy'  required><br/>
                 <button class='btn btn-lg btn-primary btn-block' name='buyit2' type='submit'>Buy it</button>";
               }
          }else{
            echo "<button class='btn btn-lg btn-primary btn-block' name='submit2' type='submit'>Check it</button>";
          }?>
        </form>    
        </div>
      </div>

      <hr class="featurette-divider" id="Child of light">

      <div class="row featurette">
        <div class="col-md-7">
        <form class="form-signin" role="form" action="" method="post">
          <h2 class="featurette-heading"><input type="hidden" name="gameName3" id="gameName3" value="Child of light"/>Child of light</br><span class="text-muted">Full Game(Chinese And English Version.)</span>
             <br/><?php 
          if(isset($_POST['submit3'])){
         if((!isset($gamePrice3))||$store3==0){
          echo "<span>This game is out of stock</span>";
          }else{
          echo "RM".$gamePrice3; 
          }
          }?>
          </h2>
          <p>The Black Queen has stolen the Sun, the Moon and the Stars. You play as Aurora, a young princess with a pure heart whose soul is brought to the kingdom of Lemuria. Embark on a quest to recapture the three sources of light, defeat the Black Queen and restore the kingdom of Lemuria.</p>
          <p>Across your experience through Lemuria you will meet encounters that you will remember, from friendly fairies and gnomes to vile wolves and dark dragons. </p>
          <p>© 2014 Ubisoft Entertainment. All Rights Reserved. Child of Light, the Child of Light logo, Ubisoft and the Ubisoft logo are trademarks of Ubisoft Entertainment in the U.S. and/or other countries.</p>
          <?php 
          if((isset($_POST['submit3']))AND(!empty($_SESSION['staff']))){
            echo "store :".$store3."<br/>
                 <input type='number' id='store3' name='store3' min='1' step='1' class='form-control' placeholder='Edit the store'  required><br/>
                 <button class='btn btn-lg btn-primary btn-block' name='edit3' type='submit'>Edit</button>";
          }else if(isset($_POST['submit3'])){
            if((!isset($gamePrice3))||$store3==0){
           echo "<button class='btn btn-lg btn-primary btn-block' name='back3' type='submit'>Back</button>";
            }else{
            echo "<button class='btn btn-lg btn-primary btn-block' name='buy3' type='submit'>Buy it</button>";
            echo "<button class='btn btn-lg btn-primary btn-block' name='back3' type='submit'>Back</button>";  
            }
          }else if(isset($_POST['buy3'])){
            if(empty($_SESSION['login_user'])){
              echo "<span style='color:#FF0000'>You haven't sign in.Please sign in.</span>";
              echo "<button class='btn btn-lg btn-primary btn-block' name='back3' type='submit'>Back</button>";  
              }else{
                echo" <input type='number' id='quantity' name='quantity3' min='1' step='1' class='form-control' placeholder='How many want to buy'  required><br/>
                 <button class='btn btn-lg btn-primary btn-block' name='buyit3' type='submit'>Buy it</button>";
               }
          }else{
            echo "<button class='btn btn-lg btn-primary btn-block' name='submit3' type='submit'>Check it</button>";
          }?>
          </form> 
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/psvita/Child of light.jpg" height="300" width="300" alt="Generic placeholder image">
        </div>
      </div>

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
