
<?php
include('db_login.php');
session_start();
$connection = mysqli_connect($db_host, $db_username, $db_password);
if (!$connection)
{
	die ("Could not connect to the database: <br />". mysqli_error($connection));
}
mysqli_select_db($connection,'book');

// check for form submission - if it doesn't exist then send back to signin form
if (!isset($_POST['save']) || $_POST['save'] != 'signin') {
    header('Location: login.php'); exit;
}

	
// get the posted data
$userid = strip_tags( utf8_decode( $_POST['userid'] ) );
$password = strip_tags( utf8_decode( $_POST['password'] ) );
	

// check that user id was entered
if (empty($userid))
    $error = 'You must enter your user id.';

	
// check that a message was entered
if (empty($password))
    $error = 'You must enter password.';



//Check whether the student is already registered.
$select ="select * from register where userid = '" . $userid . "' and password = '" . $password . "'";

//$query = mysqli_real_escape_string($select);
$result=mysqli_query($connection,$select);
$num_rows = mysqli_num_rows($result);

if ( $num_rows == 0)
	$error = 'You are not registered.';
	
	
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header('Location: login.php?e='.urlencode($error)); exit;
}


?>

<!DOCTYPE HTML>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Konto użytkownika</title>

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
      <link  href="css/account.css" rel="stylesheet">
      <link  href="css/table.css" rel="stylesheet">
      
      
	

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
                <a class="nav-link js-scroll-trigger" href="./Logout.php">Wyloguj</a></li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#">Witamy, <?php echo $userid; ?></a></li>
           
              
          </ul>
        </div>
      </div>
    </nav>
</div>
      <div class="spacing"></div>
      
<div class="spacing"></div>
      <h2>Tutaj możesz zobaczyć swoje rezerwacje</h2>
	
		<br><br><br>
		<div class="container">
			<div class="row">
				<div class="span10">
					<?php
						$query = "select * from seat where userid = '" . $userid . "'";
						$result = mysqli_query($connection, $query);
						if ( mysqli_num_rows($result) == 0 )
						{
							echo "You have not booked any tickets.";
						}
						else
						{
							echo "<form action='cancelled.php' method='POST' onsubmit='return validateCheckBox();'>";
								echo "<table align='center' class='table table-hover table-bordered table-striped span6 rwd-table' align='center'>";
									echo "<thead>";
										echo "<tr>";
											echo "<th>Select</th>";
                            echo "<th>Nazwa filmu</th>";
                            
											echo "<th>Numer miesjca</th>";
											echo "<th>Data</th>";
                            echo "<th>Czas</th>";
										echo "</tr>";
									echo "</thead>";
									echo "<tbody>";
								
									while($row = mysqli_fetch_array($result))
									{
										echo "<tr>";
											echo "<td><input type='checkbox' name='formSeat[]' value='".$row['PNR']."'/></td>";
                                        echo "<td>". $row['movie_name'] ."</td>";
											echo "<td>". $row['number'] ."</td>";
											echo "<td>". $row['date'] ."</td>";
                                        echo "<td>". $row['time'] ."</td>";
										echo "</tr>";				
									}
									echo "<tr>";
										echo "<td>";
										echo "</td>";
										echo "<td>";
											echo '<button type="submit" name="formSubmit" class="btn btn-info">';
												echo '<i class="icon-ok icon-white"></i> Podtwierdz';
											echo '</button>';
										echo "</td>";
										echo "<td>";
											echo '<button type="reset" class="btn">';
												echo '<i class="icon-refresh icon-black"></i> Wyczyść';
											echo '</button>';
										echo "</td>";
                         
										echo "<td>";
										echo "</td>";
									echo "</tr>";
									echo "</tbody>";
								echo "</table>";
							echo "</form>";
						}
					?>
				</div>
			</div>
		</div>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript">
			function validateCheckBox()
			{
				var c = document.getElementsByTagName('input');
				for (var i = 0; i < c.length; i++)
				{
					if (c[i].type == 'checkbox')
					{
						if (c[i].checked) 
						{
							return true;
						}
					}
				}
				alert('Please select at least 1 ticket.');
				return false;
			}
		</script>
	</BODY>
</HTML>
