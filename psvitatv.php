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
          <img src="img/psvitatv/Toukiden1.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Nice?</h1>
              <p>We are waiting you.Warrior</p>
              <p><a class="btn btn-lg btn-primary" href="#toukiden" role="button">Jump To</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/psvitatv/GOD EATER 21.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Let's kill them</h1>
              
              <p><a class="btn btn-lg btn-primary" href="#God Eater 2" role="button">See more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/psvitatv/OBORO MURAMASA1.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>OBORO MURAMASA</h1>
              <p>Collect Demons</p>
              <p><a class="btn btn-lg btn-primary" href="#OM" role="button">See More</a></p>
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

      <div class="row featurette" id="toukiden">
        <div class="col-md-7">
         <form class="form-signin" role="form" action="" method="post">
          <h2 class="featurette-heading" ><input type="hidden" name="gameName" id="gameName" value="Toukiden"/>Toukiden</br><span class="text-muted"> Full Game(Japanese Ver.)</span>
          <br/><?php 
          if(isset($_POST['submit'])){
        if((!isset($gamePrice))||$store==0){
          echo "<span>This game is out of stock</span>";
          }else{
          echo "RM".$gamePrice; 
          }
          }?>
          </h2>
          <p> Toukiden is a brand new action adventure game by the “ω-Force”, development team of TECMO KOEI GAMES CO., LTD. that has produced wide range of blockbuster titles including the renowned Dynasty Warriors series. Highly respected for its premier “historical” games, TECMO KOEI delivers a massive world of Japanese-style fantasy through Toukiden.</p>
          
          <p>The story rolls out in a world where battles against the “Oni” (demon) never cease.  Players will assume the role of a warriors called “mononofu” and fight the “Oni” with their allies in order to prevent the perishing of mankind.  Users can enjoy the multiplayer mode for up to 4 players, in addition to the Cross Play and Ad-hoc mode between PS Vita and PSP® (PlayStation®Portable), as well as the Infrastructure mode on PS Vita.</p>
          
          <p>©2013 TECMO KOEI All rights reserved.</p>
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
          <img class="featurette-image img-responsive" src="img/psvitatv/Toukiden.jpg" height="300" width="350" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider" id="God Eater 2">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/psvitatv/GOD EATER 2.jpg" height="300" width="300" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
        <form class="form-signin" role="form" action="" method="post">
          <h2 class="featurette-heading"><input type="hidden" name="gameName2" id="gameName2" value="GOD EATER 2"/>GOD EATER 2</br><span class="text-muted">Full Game(Japanese Ver.)</span>
            <br/><?php 
          if(isset($_POST['submit2'])){
        if((!isset($gamePrice2))||$store2==0){
          echo "<span>This game is out of stock</span>";
          }else{
          echo "RM".$gamePrice2; 
          }
          }?>
          </h2>
          <p>The official sequel to the top selling action game GOD EATER is finally here! Enjoy even faster, brisker linked burst attacking action! In addition to new weapons and action, players can now collect new and diverse elements, such as more than 300 lethal "Blood Arts" which can be adapted to your playing style! Fashion your own distinctive Blood Arts to let loose in single player and multiplayer! Take charge of your own band of colorful characters amidst an unfolding story of epic proportions! Your can use your saved game data from GOD EATER BURST! Come experience the dramatically enhanced world of GOD EATER 2!</p>
          
          <p>©2013 NAMCO BANDAI Games Inc.</p>
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

      <hr class="featurette-divider" id="OM">

      <div class="row featurette">
        <div class="col-md-7">
        <form class="form-signin" role="form" action="" method="post">
          <h2 class="featurette-heading"><input type="hidden" name="gameName3" id="gameName3" value="OBORO MURAMASA"/>OBORO MURAMASA</br><span class="text-muted">Full Game(Japanese Ver.)</span>
            <br/><?php 
          if(isset($_POST['submit3'])){
         if((!isset($gamePrice3))||$store3==0){
          echo "<span>This game is out of stock</span>";
          }else{
          echo "RM".$gamePrice3; 
          }
          }?>
          </h2>
          <p>Pull the blood-thirst demon blade Muramasa and unleash the demon blade moves.</p>
          <p>Extremely elaborate graphics and gorgeous swashbuckler actions!This is a swashbuckler action RPG title set on the stage of the Genroku era evolving around the demon blade. </p>
          <p>Control the two protagonists, Momohime and Kisuke, collect the demon blades scattered around the various regions. Unleash the secretive power hidden within the blade and defeat the demons!  </p>
          <p>©2009, 2013 MarvelousAQL Inc.</p>
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
          <img class="featurette-image img-responsive" src="img/psvitatv/OBORO MURAMASA.jpg" height="300" width="300" alt="Generic placeholder image">
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
