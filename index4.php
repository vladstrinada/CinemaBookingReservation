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



							<!--<div data-date-format="yyyy-mm-dd" data-date="document.write(date())" class="input-append date myDatepicker">
							    <input type="text" value="" name="doj" size="16" class="span2" required>
							    <span class="add-on"><i class="icon-calendar"></i></span>
							</div>


							<!--<input type="date" class="span2" name="doj" placeholder="YYYY-MM-DD" required/>-->
                            <p>Nazwa filmu:</p>
    <input name="Title" type="text" readonly value="
 <?php
$query="SELECT * FROM book.movies where No=5";
$result=mysqli_query($connection,$query);
{
	$row=mysqli_fetch_array($result);
	echo "".$row['title']."";
}
?>">
                           <select name="doj">
    <option>2017-11-26

</option>
    <option>2017-11-27</option>
    <option>2017-11-28</option>
  </select>
                            <select name="time">
  
    <option>11:00:00</option>
    <option>16:00:00</option>
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