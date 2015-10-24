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
                      <li ><a href="psvitatv.php">PSVITA TV</a></li>
                    </ul>
                  </li>
                  <li class="active"><a href="#"><b>PSP</b></a></li>
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
          <img src="img/MonsterHunterP3/1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Cool?</h1>
              <p>Waiting for your Hunting</p>
              <p><a class="btn btn-lg btn-primary" href="#mh3" role="button">Jump To</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/Assassin'sCreedBloodlines/5.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Let's Assassinate him</h1>
              
              <p><a class="btn btn-lg btn-primary" href="#assassin" role="button">See more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/GodofWarGhostofSparta/1.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>God of War</h1>
              <p>Ghost of Sparta</p>
              <p><a class="btn btn-lg btn-primary" href="#GOW" role="button">See More</a></p>
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

      <div class="row featurette" id="mh3">
        <div class="col-md-7">
        <form class="form-signin" role="form" action="" method="post">
          <h2 class="featurette-heading" ><input type="hidden" name="gameName" id="gameName" value="Monster Hunter Portable 3rd"/>Monster Hunter Portable 3rd</br><span class="text-muted"> Full Game(Japanese Ver.)</span>
            <br/><?php 
          if(isset($_POST['submit'])){
         if((!isset($gamePrice))||$store==0){
          echo "<span>This game is out of stock</span>";
          }else{
          echo "RM".$gamePrice; 
          }
          }?>
          </h2>
          <p> As a hunter, face a large variety of monsters and lead an exciting hunter life.
            This installment introduces a new base, a hot spring village Yukumo and a new beautiful battlefield, Mountain Stream. A group of new monsters, including the thunder wolf wyvern Jin'ouga, await your challenge! With 12 weapon types, the largest variety in the series, complete quests with your partners or Airu companions!</p>
          <p>In addition to the ad-hoc cooperative play with up to 4 players, Airu companions have been also improved! Now you can take up to 2 Airu companions during single play, and they can also use a variety of weapons and armor. This is the ultimate hunting action game for both new players and skilled veterans!</p>
          <p>©CAPCOM CO., LTD. 2010, 2011 ALL RIGHTS RESERVED.</p>
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
          <img class="featurette-image img-responsive" src="img/MonsterHunterP3/4.jpg" height="300" width="240" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider" id="assassin">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/Assassin'sCreedBloodlines/4.jpg" height="300" width="240" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
        <form class="form-signin" role="form" action="" method="post">
          <h2 class="featurette-heading"><input type="hidden" name="gameName2" id="gameName2" value="Assassin Creed : Bloodlines"/>Assassin's Creed : Bloodlines</br><span class="text-muted">Full Game(English Ver.)</span>
          <br/><?php 
          if(isset($_POST['submit2'])){
         if((!isset($gamePrice2))||$store2==0){
          echo "<span>This game is out of stock</span>";
          }else{
          echo "RM".$gamePrice2; 
          }
          }?>
          </h2>
          <p class="lead">For the first time, become a Master Assassin on the PSP® (PlayStation®Portable) system with Assassin's Creed: Bloodlines™. Follow the story of Altair immediately following the events of Assassin’s Creed® and track down the last of the Templars who have fled the Holy Land and retreated to the Island of Cyprus.</p>
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

      <hr class="featurette-divider" id="GOW">

      <div class="row featurette">
        <div class="col-md-7">
        <form class="form-signin" role="form" action="" method="post">
          <h2 class="featurette-heading"><input type="hidden" name="gameName3" id="gameName3" value="God of War Ghost of Sparta"/>God of War Ghost of Sparta</br><span class="text-muted">Full Game(English Ver.)</span>
            <br/><?php 
          if(isset($_POST['submit3'])){
        if((!isset($gamePrice3))||$store3==0){
          echo "<span>This game is out of stock</span>";
          }else{
          echo "RM".$gamePrice3; 
          }
          }?>
          </h2>
          <p>Set in the realm of Greek mythology, God of War: Ghost of Sparta is a single-player game that allows players to take on the powerful role of Spartan warrior Kratos. This new adventure picks up after God of War concludes, telling the story of Kratos' ascension to power as the God of War. In his quest to rid himself of the nightmares that haunt him, Kratos must embark on a journey that will reveal the origins of lost worlds, and finally answer long-awaited questions about his dark past. Armed with the deadly chained Blades of Chaos, he will have to overcome armies of mythological monsters, legions of undead soldiers, and amazingly dangerous and brutal landscapes throughout his merciless quest.</p>
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
          <img class="featurette-image img-responsive" src="img/GodofWarGhostofSparta/Ghost_of_Sparta_--_Alternate_Box_Art.jpg" height="300" width="240" alt="Generic placeholder image">
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
