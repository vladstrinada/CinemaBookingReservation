<?php include('conn.php');
function createRandomPassword() {
	$chars = "abcdefghijkmnopqrstuvwxyz023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
}


$submit=$_POST['submits'];
$ticketnum=createRandomPassword();
$cname= $_POST['cname'];
$quantity=$_POST['quantity'];
$Title= $_POST['Title'];
$price= $_POST['price'];
$Time= $_POST['Time'];
$result = mysql_query("SELECT ticketnum FROM movies where No=4");
while($row = mysql_fetch_array($result))
	{
	$ticket=$row['ticketnum'];
     if($row['ticketnum']<0){
        die("<h1 style='background-color:white'>Sorry no tickets available!</h1>");
    }else{
	
	$number=$ticket-$quantity;
    $price = $quantity*$price;}
}
{
if ($submit){
if(strlen($cname)>=4){
if(strlen($cname)<=16){

mysql_query("INSERT INTO tickets (Ticket_Number,username,cname,quantity,Title,price,Time,ticket_status) VALUES('$ticketnum','$login_session','$cname','$quantity','$Title','$price','$Time','Active')");
mysql_query("UPDATE  movies SET  ticketnum =  '$number' WHERE  No =4");
die("<button type='button' onclick=''><A href='receipt.php'> <img src='pics/print.jpg' alt='Klematis' /><br />Print Voucher</A></button>");
}
else{
echo'<script type="text/javascript">alert("Enter atleast 8-16 Character!")</script>';
}
}
else{
echo'<script type="text/javascript">alert("Please input your Firstname & Lastname!")</script>';
}
}
if($ticket <= 0)
{
die("<h1 style='background-color:white'>Sorry no tickets available!</h1>");
}
}
?>