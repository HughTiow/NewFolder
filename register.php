<?php
include('SignUp.php'); 
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Online Sale Game</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="background-image: url(img/bg.jpg);background-attachment:fixed">

    <div class="container">

      <form class="form-signin" role="form" action="" method="post">
        <h2 class="form-signin-heading">Please register</h2>
        <label for="user_name" class="sr-only">User name</label>
        <input type="text" id="user_name" name="user_name" class="form-control" placeholder="User name" required>

         <label for="first_name" class="sr-only">Frist name</label>
        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Frist name" required>

        <label for="last_name" class="sr-only">Last name</label>
        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last name" required>

        <label for="Contact_number" class="sr-only"> Contact number</label>
        <input type="text" id="Contact_number" name="Contact_number" class="form-control" placeholder="Contact number" required>

        <label for="home_address" class="sr-only"> home address</label>
        <input type="text" id="home_address" name="home_address" class="form-control" placeholder="home address" required>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
       
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Register</button>
        <span><?php echo $error; ?></span>
      </form>

    </div> 
   <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
