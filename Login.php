<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" style="
                       width:1920px;
                       height:1020px;">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>New-cinema</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
      <link rel="shortcut icon" href="./img/img1.png" type="image/x-icon">

   <link rel="stylesheet" href="styles.css"> 
 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript">
</script>
  <script src="script.js"></script> 
    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<!-- Gem style -->
<link href="css/film.css" rel="stylesheet">
      <link href="css/login.css" rel="stylesheet">
  </head>

  <body class="loginbody">
<div class="spacinglogin"></div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="./HOME.php">New-Cinema</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./UPDATE.PHP">Repertuar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="">Wydarzenia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="">Contact</a>
            </li>

              
          </ul>
        </div>
      </div>
    </nav>
	<div class="loginBox">
        <img class="user" src="https://www.shareicon.net/data/128x128/2016/09/01/822711_user_512x512.png">
			<?php
					// check for a successful form post
					if (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";
			?> 

      <form class="form-signin" action="cancel.php" method="POST">
	  	<center>
        <h2 class="form-signin-heading">Zaloguj sie.</h2>
        <input type="text" class="input-block-level" name="userid" pattern="[A-z ]{3,}" title="Please enter a valid username." placeholder="User ID" required>
        <input type="password" class="input-block-level" name="password" placeholder="Password" required>
		<input type="hidden" name="save" value="signin">
		<button type="submit" class="btn btn-info">
			<i class="icon-ok icon-white"></i> Login
		</button>
		<button type="reset" class="btn">
			<i class="icon-refresh icon-black"></i> Clear
		</button>
		</center>
      </form>

    </div>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</body>
</html>