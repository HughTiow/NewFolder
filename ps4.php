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
                  <li class="active"><a href="#"><b>PS4</b></a></li>
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
          <img src="img/LastOfUs/2.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>You Are Our Only Hope...</h1>
              <p>A Journey to Save the World...</p>
              <p><a class="btn btn-lg btn-primary" href="#LOU" role="button">Wait For What?</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/Assassin'sCreedUnity/2.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Help the People of France carve an entirely new destiny.</h1>
              <p><a class="btn btn-lg btn-primary" href="#assasin" role="button">Wait For What?</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/TheEvilWithin/1.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:black" >Come survive and confront the world of terror that has never been experienced by anyone.</h1>
              <p><a class="btn btn-lg btn-primary" href="#TEW" role="button">Let's Go</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/DriveClub/2.jpg" alt="Fourth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>DRIVECLUB</h1>
              
              <p><a class="btn btn-lg btn-primary"   href="#DC" role="button">Come Drive</a></p>
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

      <hr class="featurette-divider" id="LOU">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/LastOfUs/1.jpg" height="500" width="280" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
         <form class="form-signin" role="form" action="" method="post">
          <h2 class="featurette-heading"><input type="hidden" name="gameName" id="gameName" value="The Last Of Us"/>The Last Of Us</br><span class="text-muted">(English/Chinese version)</span>
          <br/><?php 
          if(isset($_POST['submit'])){
         if((!isset($gamePrice))||$store==0){
          echo "<span>This game is out of stock</span>";
          }else{
          echo "RM".$gamePrice; 
          }
          }?>
          </h2>
          <p>20 years after a pandemic has radically changed known civilization, infected humans run wild and survivors are killing each other for food, weapons; whatever they can get their hands on. Joel, a violent survivor, is hired to smuggle a 14 year-old girl, Ellie, out of an oppressive military quarantine zone, but what starts as a small job soon transforms into a brutal journey across the U.S.</p>
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

      <hr class="featurette-divider" id="assasin">

      <div class="row featurette">
        <div class="col-md-7">
        <form class="form-signin" role="form" action="" method="post">
          <h2 class="featurette-heading"><input type="hidden" name="gameName2" id="gameName2" value="The Evil Within"/>The Evil Within</br><span class="text-muted">(English version)</span>
            <br/><?php 
          if(isset($_POST['submit2'])){
         if((!isset($gamePrice2))||$store2==0){
          echo "<span>This game is out of stock</span>";
          }else{
          echo "RM".$gamePrice2; 
          }
          }?>
          </h2>
          <p>For this title the player will have to survive and confront what is ahead in a world of terror that has never been experienced by anyone. Be prepared to explore a world of horror and confront unknown terrifying creatures and attacks. The player will feel a new sensation by overcoming these horrors by themselves for sure. This title will have dramatic characteristics containing interesting characters and elements that will challenge the players to solve difficult mysterious and obstacles. These features will create the best form of horror entertainment with a unique balance.</p>
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
          <img class="featurette-image img-responsive" src="img/TheEvilWithin/2.jpg" height="500" width="280" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider" id="DC">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/DriveClub/1.jpg" height="500" width="280" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
        <form class="form-signin" role="form" action="" method="post">
          <h2 class="featurette-heading"><input type="hidden" name="gameName3" id="gameName3" value="DRIVECLUB"/>DRIVECLUB™<span class="text-muted">As fast as you can.</span>
          <br/><?php 
          if(isset($_POST['submit3'])){
         if((!isset($gamePrice3))||$store3==0){
          echo "<span>This game is out of stock</span>";
          }else{
          echo "RM".$gamePrice3; 
          }
          }?>
          </h2>
          <p >DRIVECLUB brings to life the heart and soul of car culture. An incredible, authentic and immersive driving experience, DRIVECLUB makes you feel the exhilaration of driving the most powerful and beautifully designed cars in the world, all rendered in staggering detail, inside and out. Race them in richly detailed real-world locations, alongside your teammates.</p>
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

      <hr class="featurette-divider" id="assasin">

      <div class="row featurette">
        <div class="col-md-7">
        <form class="form-signin" role="form" action="" method="post">
          <h2 class="featurette-heading"><input type="hidden" name="gameName4" id="gameName4" value="Assassin Creed Unity"/>Assassin’s Creed® Unity</br><span class="text-muted">Transform yourself into a true Master Assassin...</span>
          <br/><?php 
          if(isset($_POST['submit4'])){
        if((!isset($gamePrice4))||$store4==0){
          echo "<span>This game is out of stock</span>";
          }else{
          echo "RM".$gamePrice4; 
          }
          }?>
          </h2>
          <p>Paris, 1789. The French Revolution turns a once-magnificent city into a place of terror and chaos. Its cobblestoned streets run red with the blood of commoners who dare to rise up against an oppressive aristocracy. Yet as the nation tears itself apart, a young man named Arno will embark upon an extraordinary journey to expose the true powers behind the Revolution. His pursuit will throw him into the middle of a ruthless struggle for the fate of a nation, and transform him into a true Master Assassin.</p>
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
          <img class="featurette-image img-responsive" src="img/Assassin'sCreedUnity/1.jpg" height="500" width="280" alt="Generic placeholder image">
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
