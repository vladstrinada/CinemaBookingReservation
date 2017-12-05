<?php
	include('db_login.php');
	session_start();
	$connection = mysqli_connect($db_host, $db_username, $db_password);
	if (!$connection)
	{
		die ("Could not connect to the database: <br />". mysqli_error($connection));
	}
	mysqli_select_db($connection,'book');
$userid = strip_tags( utf8_decode( $_POST['userid'] ) );
$select ="select * from register where userid = '" . $userid . "' and password = '" . $password . "'";

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html><head>
<script></script><title>Bilet</title>

<style type="text/css">

.a{
background-color:goldenrod;
height: 450px;
width: 800px;
margin: 1px 0px 0px 150px;
border:5px solid ;
border-style: dotted;
float: center;
}
.b{
background-color:brown;
height: 70px;
width: 200px;
margin: 1px 10px 0px 150px;
border:2px solid ;
border-style: solid;
float: right;
}

</style>
</head>
<h4 align="center">Print (CTRL+P) & cut this Ticket Voucher</h4>
<div class="a">
<div class="b">
<center>
<SPAN style="BORDER-LEFT: black 0.05in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.09in solid; DISPLAY: inline-block; HEIGHT:0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.01in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.04in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: balck 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.03in solid; DISPLAY: inline-block;HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.02in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.03in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.05in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.09in solid; DISPLAY: inline-block; HEIGHT:0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.01in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.07in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: balck 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.03in solid; DISPLAY: inline-block;HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.08in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.03in solid; DISPLAY: inline-block; HEIGHT:0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.07in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: balck 0.06in solid; DISPLAY: inline-block; HEIGHT:0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.03in solid; DISPLAY: inline-block;HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.08in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>

</center>
<div id="externalbox" style="width:4in">
<div id="inputdata"><?php echo"" .date("y-m-d");?></div>
</div>

</div>

<body bgcolor="white">
<h2 Align="left" font face="Courier New", Courier, monospace" Color="Green">&nbsp;&nbsp;Rezerwacja biletu</br></br>&nbsp;&nbsp;&nbsp;</font></h2>
<h1 align="center"><font face="Franklin Gothic Medium" Color="black" size="3">
<table border=1 align=center>
<tr>

<td>Imie rezerwacji</td>
<td>Numer miejsca</td>
<td>Nazwa</td>
<td>Data</td>
<td>Czas</td>

</tr>
<?php
$query = "select * from seat where userid = '" . $userid . "'";
						$result = mysqli_query($connection, $query);
                                                                             

								
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
?>
</table></h1></font>
<h1 align="left"><font face="arial" Color="black" size="2px">&nbsp;&nbsp;To jest kopija biletu.Prosze zachować ze soba. Jest wymagana przed wyborem miejsc do kina:&nbsp;&nbsp;</br></font><font size="1">&nbsp;&nbsp;*&nbsp; Pracujemy od poniedzialku do niedzieli.<br>&nbsp;&nbsp;Dokument jest ważny przed  </font></h1>

</div>


</body>
</html>