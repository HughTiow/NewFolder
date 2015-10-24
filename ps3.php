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
                  <li class="active"><a href="#"><b>PS3</b></a></li>
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
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/FinalFantasyXIII/2.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Lightning Under Your Control</h1>
              
              <p><a class="btn btn-lg btn-primary" href="#FF" role="button">See More</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/BattleField4/2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Come and experience the</br>Thrill of War</h1>
              
              <p><a class="btn btn-lg btn-primary" href="#BF" role="button">See more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/Beyond2Soul/2.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>A young woman who possesses </br>supernatural powers...</h1>
              
              <p><a class="btn btn-lg btn-primary" href="#B2S" role="button">See more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/Alien/2.jpg" alt="Fourth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Underpowered and underprepared, you must scavenge...</h1>
              
              <p><a class="btn btn-lg btn-primary" href="#alien" role="button">See More</a></p>
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

            <hr class="featurette-divider" id="FF">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/FinalFantasyXIII/1.jpg"  height="500" width="280" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
        <form class="form-signin" role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          <h2 class="featurette-heading"><input type="hidden" name="gameName" id="gameName" value="LIGHTNING RETURNS: FINAL FANTASY XIII"/>LIGHTNING RETURNS: FINAL FANTASY XIII<br><span class="text-muted">(English Version)</span>
          <br/><?php 
          if(isset($_POST['submit'])){
         if((!isset($gamePrice))||$store==0){
          echo "<span>This game is out of stock</span>";
          }else{
          echo "RM".$gamePrice; 
          }
          }?>
          </h2>
          <p>LIGHTNING RETURNS: FINAL FANTASY XIII is a new FINAL FANTASY adventure that gives the player direct control over iconic heroine Lightning in a constantly moving, expansive environment, on a quest to save a doomed world from complete destruction. How will you spend your final days?</p>
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
        
      </div>
      <!-- 1end -->
      <hr class="featurette-divider" id="alien">

      <div class="row featurette">

        <div class="col-md-7">
        <form class="form-signin" role="form" action="" method="post">
          <h2 class="featurette-heading"><input type="hidden" name="gameName2" id="gameName2" value="Alien: Isolation"/>Alien: Isolation</br><span class="text-muted">Full Game (English Ver.) </span>
          <br/><?php 
          if(isset($_POST['submit2'])){
         if((!isset($gamePrice2))||$store2==0){
          echo "<span>This game is out of stock</span>";
          }else{
          echo "RM".$gamePrice2; 
          }
          }?>
          </h2>
          <p>Discover the true meaning of fear in Alien: Isolation, a survival horror set in an atmosphere of constant dread and mortal danger. Fifteen years after the events of Alien™, Ellen Ripley’s daughter, Amanda enters a desperate battle for survival, on a mission to unravel the truth behind her mother's disappearance.</p>

          <p>As Amanda, you will navigate through an increasingly volatile world as you find yourself confronted on all sides by a panicked, desperate population and an unpredictable, ruthless Alien.</p>

          <p>Underpowered and underprepared, you must scavenge resources, improvise solutions and use your wits, not just to succeed in your mission, but to simply stay alive.</p>
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
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/Alien/1.jpg" height="500" width="280" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider" id="B2S">
      <!-- 2end -->
      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/Beyond2Soul/1.jpg" height="500" width="280"  alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
        <form class="form-signin" role="form" action="" method="post">
          <h2 class="featurette-heading"><input type="hidden" name="gameName3" id="gameName3" value="Beyond: Two Souls"/>Beyond: Two Souls™</br><span class="text-muted">(English/Chinese version)</span>
          <br/>
          <?php 
          if(isset($_POST['submit3'])){
         if((!isset($gamePrice3))||$store3==0){
          echo "<span>This game is out of stock</span>";
          }else{
          echo "RM".$gamePrice3; 
          }
          }?>
          </h2>
          <p >Beyond: Two Souls™ is a psychological action thriller starring Hollywood actors Ellen Page (Inception, Juno) and Willem Dafoe (Platoon, Spider-Man). From the makers of the award-winning Heavy Rain™, players live out 15 years in the life of Jodie Holmes, a young woman who possesses supernatural powers through her psychic link to an invisible entity. The blockbuster movie action is matched in its deep emotional engagement, giving players a truly personal journey where every decision shapes the course of their unpredictable adventure.</p>
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
      </div>

      <hr class="featurette-divider" id="BF">

      <div class="row featurette">
        <div class="col-md-7">
         <form class="form-signin" role="form" action="" method="post">
          <h2 class="featurette-heading"><input type="hidden" name="gameName4" id="gameName4" value="Battlefield 4 Premium Edition"/>Battlefield 4™ Premium Edition<br/><span class="text-muted">(English/ Chinese/ Korean Ver.)</span>
           <br/><?php 
          if(isset($_POST['submit4'])){
         if((!isset($gamePrice4))||$store4==0){
          echo "<span>This game is out of stock</span>";
          }else{
          echo "RM".$gamePrice4; 
          }
          }?>
          </h2>
          <p>Own more, be more with the Battlefield 4™ Premium Edition! This is the ultimate Battlefield 4 experience that delivers unrivaled team-based multiplayer, dynamic destructible environments and epic vehicular combat. Battlefield 4 Premium Edition is the ultimate all-out war collection that includes the Battlefield 4 game plus Battlefield 4 Premium membership that gives you five themed digital expansion packs with tons of new multiplayer content, including 20 new maps, new game modes, and plenty of new weapons and vehicles. The collection adds even more diversity, ranging from dramatic amphibious action in Naval Strike and battles across the majestic levels of China Rising to infantry focused urban combat in Dragon’s Teeth and experimental high-tech warfare in the blissful artic landscape of Final Stand. Plus four fan-favorite maps from Battlefield 3 remade in Second Assault.</p>
          <?php 
           if((isset($_POST['submit4']))AND(!empty($_SESSION['staff']))){
            echo "store :".$store4."<br/>
                 <input type='number' id='store4' name='store4' min='1' step='1' class='form-control' placeholder='Edit the store'  required><br/>
                 <button class='btn btn-lg btn-primary btn-block' name='edit4' type='submit'>Edit</button>";
          }else if(isset($_POST['submit4'])){
            if((!isset($gamePrice4))||$store4==0){
           echo "<button class='btn btn-lg btn-primary btn-block' name='back4' type='submit'>Back</button>";
            }else{
            echo "<button class='btn btn-lg btn-primary btn-block' name='buy4' type='submit'>Buy it</button>";
            echo "<button class='btn btn-lg btn-primary btn-block' name='back4' type='submit'>Back</button>";  
            }
          }else if(isset($_POST['buy4'])){
            if(empty($_SESSION['login_user'])){
            echo "<span style='color:#FF0000'>You haven't sign in.Please sign in.</span>";
              echo "<button class='btn btn-lg btn-primary btn-block' name='back' type='submit'>Back</button>";  
              }else{
                echo" <input type='number' id='quantity' name='quantity4' min='1' step='1' class='form-control' placeholder='How many want to buy'  required><br/>
                 <button class='btn btn-lg btn-primary btn-block' name='buyit4' type='submit'>Buy it</button>";
               }
          }else{
            echo "<button class='btn btn-lg btn-primary btn-block' name='submit4' type='submit'>Check it</button>";
          }?>
          </form>

        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/BattleField4/1.jpg"  height="500" width="280" alt="Generic placeholder image">
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
