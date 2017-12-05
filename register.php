

<?php
include('db_login.php');
session_start();
$connection = mysqli_connect($db_host, $db_username, $db_password);
if (!$connection)
{
	die ("Could not connect to the database: <br />". mysqli_error($connection));
}
mysqli_select_db($connection,'book');

// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['save']) || $_POST['save'] != 'contact') {
    header('Location: book.php'); exit;
}

	
// get the posted data
$Title = strip_tags( utf8_decode( $_POST['nazwa_seansu'] ) );
$time = strip_tags( utf8_decode( $_POST['czas_seansu'] ) );
$doj = strip_tags( utf8_decode( $_POST['journey_date'] ) );
$name = strip_tags( utf8_decode( $_POST['user_name'] ) );
$address = strip_tags( utf8_decode( $_POST['address'] ) );
$mobile = strip_tags( utf8_decode( $_POST['mobile'] ) );
$userid = strip_tags( utf8_decode( $_POST['userid'] ) );
$email = strip_tags( utf8_decode( $_POST['email'] ) );
$password = strip_tags( utf8_decode( $_POST['password'] ) );
	
// sprawdzanie czy zostalo wpisane imie
if (empty($name))
    $error = 'You must enter your name.';

// sprawdzanie czy zostal wpisany adres
if (empty($address))
    $error = 'You must enter your address.';

// sprawdzanie czy zostal wpisany numer telefonu
if (empty($mobile))
    $error = 'You must enter your mobile number.';

// sprawdzanie czy zostal wpisany login
if (empty($userid))
    $error = 'You must enter your user id.';

// sprawdzanie czy zostal wpisany email
elseif (empty($email)) 
    $error = 'You must enter your email address.';
// sprawdzanie czy zostal wpisany  prawidłowy email
elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email))
    $error = 'You must enter a valid email address.';
	
// sprawdzanie czy zostalo wpisane hasło
if (empty($password))
    $error = 'You must enter password.';



//Sprawdzanie czy użytkownik już istnieje
$select = mysqli_query($connection, "select * from register where userid = '" . $userid . "'");
$num_rows = mysqli_num_rows($select);

if ( $num_rows )
	$error = 'You are already registered.';
	
if (isset($error)) {
    header('Location: book.php?e='.urlencode($error)); exit;
}



// Success Wpisane wartośći do bazy
$query = "INSERT INTO register (userid, name, email, password, address, contact) VALUES ('" . $userid . "','" . $name . "','" . $email . "','" . $password . "','" . $address . "','" . $mobile . "')";

$results = mysqli_query($connection, $query);

if (!$results)
{
	die ("Could not insert to the register: <br />". mysqli_error($connection));
}

$seatNumber = NULL;

for($i=1; $i<31; $i++)
{
	$chparam = "ch" . strval($i);
	$calcPNR = $doj . "-" . strval($i);
    $calcPTR = $time . ":" . strval($i);
    
	if( !empty($_POST[$chparam]) )
	{
		$query = "INSERT INTO seat(userid, number, PNR, date,PTR, time, movie_name) VALUES ('". $userid ."', '" . intval($i) . "', '". $calcPNR ."', '". $doj ."','". $calcPTR ."', '". $time."', '". $Title ."')";
//		$results = mysqli_real_escape_string($query);
		$results = mysqli_query($connection, $query);
		if (!$results)
		{
			die ("Could not update seat: <br />". mysqli_error($connection));
		}
		$seatNumber = $seatNumber .", ". "$i";
	}
}

if(!empty($message))
{
	$message = "A new user '". $name ."' has booked seat number: '". $seatNumber ."'." . "His message is as below." . $message;	
}
else
{
	$message = "A new user '". $name ."' has booked seat number: '". $seatNumber;	
}

		
// write the email content
$email_content = "Name: $name\n";
$email_content .= "Email Address: $email\n";
$email_content .= "Message:\n\n$message";

$messageUser = "Your ticket is booked. The seat number is: " . $seatNumber;
	
// send the email to admin
//Please replace below email to email of your website admin, so that admin will receive email on every seat book.
mail ("openingknots@gmail.com", "New ticket booked", $email_content);

//send email to user
mail ($email, "Ticket booked", $messageUser);

mysqli_close($connection);
// send the user back to the form

header('Location: book.php?s='.urlencode('Your seat is booked.')); exit;

?>
