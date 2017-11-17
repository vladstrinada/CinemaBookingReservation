<?php
include("SESSION.PHP");?>

<!DOCTYPE html>
<html lang="en">

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

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="./img/img1.png" type="image/x-icon">
	 <link  href="css/film.css" rel="stylesheet">
      <link  href="css/mov.css" rel="stylesheet">
      
      
	

  </head>

  <body id="page-top">
<div class="filmbody">
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
              <a class="nav-link js-scroll-trigger" href="./HOME.php">Home</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./sample.php">Wyloguj</a>
            </li>
              <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./profile.php">Witamy,&nbsp;<?php echo $login_session; ?>!</a>
              
          </ul>
        </div>
      </div>
    </nav>
</div>



<div class="loginBox">
    <img class="user" src="http://www.thefrasercentre.com/wp-content/themes/Retro/images/symbols/ico_01.png">
<form action="m6.php" method="post">
<p>Twoje imie:</p>
  <input name="cname"  type="text" required="required" placeholder="Imie">
<p>ilosc biletow:
  <select type="a" name="quantity"id="quantity" text-align="center">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
  </select>
  </p>
 <div class="spacingloginpass"></div>
<p>Nazwa filmu:</p>
    <input name="Title" type="text" readonly value="
 <?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema6`");
{
	$row=mysql_fetch_array($query);
	echo "".$row['title']."";
}
?>">
    <p>Cena:</p>
  <input name="price" readonly type="text" value="
 <?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema6`");
{
	$row=mysql_fetch_array($query);
	echo "".$row['price']."";
}
?>">

<p>Czas seansu:</p>
  <select name="Time">
    <option><?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema6`");
{
	$row=mysql_fetch_array($query);
	echo "".$row['time1']."";
}
?></option>
    <option><?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema6`");
{
	$row=mysql_fetch_array($query);
	echo "".$row['time2']."";
}
?></option>
    <option><?php
include('conn.php');
$query=mysql_query("SELECT * FROM `cinema6`");
{
	$row=mysql_fetch_array($query);
	echo "".$row['time3']."";
}
?></option>
  </select>
    <div class="spacingloginpass"></div>
<input name="submits" value="Reserve Movie" type="submit">

</form>
      </div>





<br>
</body>
</html>