<?php
include "db_login.php";
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Potwierdzenie rezerwacji</title>

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
      <link  href="css/book.css" rel="stylesheet">
      
      
	

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
              <a class="nav-link js-scroll-trigger" href="./Login.php">Zaloguj</a>
           
              
          </ul>
        </div>
      </div>
    </nav>
</div>			
			<?php

					// check for a successful form post
					if (isset($_GET['s'])) 
					{
						echo "<div class=\"alert alert-success\">".$_GET['s']." You will be automatically redirected after 5 seconds.</div>";
//						echo "You will be automatically redirected after 5 seconds.";
						header("refresh: 5; UPDATE.php");
					}

					// check for a form error
					elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";

			?> 
      <div class="loginBox">
    <img class="user" src="http://www.thefrasercentre.com/wp-content/themes/Retro/images/symbols/ico_01.png">
			<form name="contactForm" action="register.php" method="POST" class="form-horizontal">
				<div class='control-group'>
                      <?php
						if(isset($_POST['Title']))
						{
							echo "<div class='control-group'>";
							echo "<label class='control-label' for='input1'>Nazwa seansu</label>";
								echo "<div class='controls'>";
									echo "<input type='text' name='nazwa_seansu' id='input1' class='span3' value=". $_POST['Title'] ." readonly />";
								echo "</div>";
							echo "</div>";
						}
					?>
					<label class='control-label' for='input1'>Seat Numbers</label>
					<div class='controls'>
                    
					<?php 
						for($i=1; $i<31; $i++)
						{
							$chparam = "ch" . strval($i);
							if(isset($_POST[$chparam]))
							{
								echo "<input type='text' class='span3' name=ch".$i." value=".$i." readonly/><br>";
							}
						}
					?>
	                </div>
	            </div>
	  
					<?php
						if(isset($_POST['doj']))
						{
							echo "<div class='control-group'>";
							echo "<label class='control-label' for='input1'>Data rezerwacji</label>";
								echo "<div class='controls'>";
									echo "<input type='text' name='journey_date' id='input1' class='span3' value=". $_POST['doj'] ." readonly />";
								echo "</div>";
							echo "</div>";
						}
					?>
                  <?php
						if(isset($_POST['time']))
						{
							echo "<div class='control-group'>";
							echo "<label class='control-label' for='input1'>Czas seansu</label>";
								echo "<div class='controls'>";
									echo "<input type='text' name='czas_seansu' id='input1' class='span3' value=". $_POST['time'] ." readonly />";
								echo "</div>";
							echo "</div>";
						}
					?>
	            
				<div class="control-group">
	                <label class="control-label" for="input1">Name</label>
	                <div class="controls">
	                    <input type="text" name="user_name" id="input1" placeholder="Type your name" class="span3" pattern="[A-z ]{3,}" title="Please enter a valid name." required>
	                </div>
	            </div>
				
	            <div class="control-group">
	                <label class="control-label" for="input2">Address</label>
	                <div class="controls">
	                    <input type="text" name="address" id="input2" placeholder="Type your address" class="span3" required>
	                </div>
	            </div>

	            <div class="control-group">
	                <label class="control-label" for="input3">Contact Number (only 10 digits)</label>
	                <div class="controls">
	                    <input type="text" name="mobile" pattern=".{10}" title="Please enter 10 digit no." class="span3" placeholder="Type your mobile number" maxlength="10" required/>
	                </div>
	            </div>
				

	            <div class="control-group">
	                <label class="control-label" for="input4">User ID</label>
	                <div class="controls">
	                    <input type="text" class="span3" placeholder="Type your user id" name="userid" pattern="[A-z ]{3,}" title="Please enter a valid username." required/>
	                </div>
	            </div>


	            <div class="control-group">
	                <label class="control-label" for="input5">Email ID</label>
	                <div class="controls">
	                    <input type="text" class="span3" placeholder="Type your email id" name="email" pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$" title="Please enter a valid email id." required/>
	                </div>
	            </div>

	            <div class="control-group">
	                <label class="control-label" for="input6">Password</label>
	                <div class="controls">
	                    <input type="password" class="span3" name="password" placeholder="Type your password" required/>
	                </div>
	            </div>

	          

	            
	                <input type="hidden" name="save" value="contact">
					<button type="submit" class="btn">
						<i class="icon-ok icon-white"></i>Zarezerwuj
					</button>
					
	        

			</form>
		</div>
      </div>

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</body>
</html>