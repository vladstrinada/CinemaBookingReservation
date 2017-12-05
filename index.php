
<!DOCTYPE HTML>

<?php
	include('db_login.php');
	session_start();
	$connection = mysqli_connect($db_host, $db_username, $db_password);
	if (!$connection)
	{
		die ("Could not connect to the database: <br />". mysqli_error($connection));
	}
	mysqli_select_db($connection,'book');
?>

<HTML>

	<HEAD>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Wybierz date</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="css/datepicker.css" />
	</HEAD>

	<BODY>
		<br /><br /><br />
		<div class="container">
			<div class="row well">
				<div class="span10">
					<form action="seat.php" method="POST">
						<center>
							<label>Data rezerwacji</label>
                            <p>Nazwa filmu:</p>
    <input name="Title" type="text" readonly value="
 <?php
$query="SELECT * FROM book.movies where No=1";
$result=mysqli_query($connection,$query);
{
	$row=mysqli_fetch_array($result);
	echo "".$row['title']."";
}
?>">
                           <select name="doj">
    <option> <?php
$query="SELECT * FROM book.time where id=1";
$result=mysqli_query($connection,$query);
{
	$row=mysqli_fetch_array($result);
	echo "".$row['date']."";
}
?>

</option>
    <option><?php
$query="SELECT * FROM book.time where id=2";
$result=mysqli_query($connection,$query);
{
	$row=mysqli_fetch_array($result);
	echo "".$row['date']."";
}
?></option>
    <option><?php
$query="SELECT * FROM book.time where id=3";
$result=mysqli_query($connection,$query);
{
	$row=mysqli_fetch_array($result);
	echo "".$row['date']."";
}
?></option>
  </select>
                            <select name="time">
    <option><?php
$query="SELECT * FROM book.time where id=1";
$result=mysqli_query($connection,$query);
{
	$row=mysqli_fetch_array($result);
	echo "".$row['time']."";
}
?>

</option>
    <option><?php
$query="SELECT * FROM book.time where id=2";
$result=mysqli_query($connection,$query);
{
	$row=mysqli_fetch_array($result);
	echo "".$row['time']."";
}
?></option>
    <option><?php
$query="SELECT * FROM book.time where id=3";
$result=mysqli_query($connection,$query);
{
	$row=mysqli_fetch_array($result);
	echo "".$row['time']."";
}
?></option>
  </select>
							<br><br>
							<button type="submit" class="btn btn-info">
								<i class="icon-ok icon-white"></i> Potwierdz
							</button>
							<button type="reset" class="btn">
								<i class="icon-refresh icon-black"></i> Wyczyść
							</button>
							<a href="./login.php" class="btn btn-danger"><i class="icon-remove icon-white"></i> Skasuj bilet </a>
						</center>
					</form>
				</div>
			</div>
		</div>

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
		<script>
			$('.myDatepicker').each(function() {
			    var minDate = new Date();
			    minDate.setHours(0);
			    minDate.setMinutes(0);
			    minDate.setSeconds(0,0);
			    
			    var $picker = $(this);
			    $picker.datepicker();
			    
			    var pickerObject = $picker.data('datepicker');
			    
			    $picker.on('changeDate', function(ev){
			        if (ev.date.valueOf() < minDate.valueOf()){
			            
			            // Handle previous date
			            alert('You can not select past date.');
			            pickerObject.setValue(minDate);
			            
			            // And this for later versions (in case)
			            ev.preventDefault();
			            return false;
			        }
			    });
			});					
		</script>
	</BODY>
</HTML>