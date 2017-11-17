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
      <link href="css/reg.css" rel="stylesheet">
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
      <img class="user" src="http://individual.icons-land.com/IconsPreview/POI/PNG/Circled/256x256/Cinema_Circle_Blue.png">
      <h2>Rejestracja</h2>
      <form action="reg.php" method="post">
          <p>Imię i Nazwisko</p>
          <input name="name" type="text" placeholder="Imię">
        <p>Login</p>
        <input type="text" name="user"  placeholder="Username">
          <p>Email</p>
          <input name="email" type="email" placeholder="Email">
        <p>Hasło</p>
        <input type="password"  name="pass"  placeholder="*****" required="required">
          <p>Powtórz hasło</p>
          <input name="repass" type="password"  placeholder="*****" required="required">
           <input type="submit" name="submits"  value="Zarejestruj konto">
        </form>
</div>
  
          
      <?php session_commit(); ?>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
       <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>
</center>
</html>