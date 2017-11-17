<?php include('conn.php');
$submit=$_POST['submits'];
$name= $_POST['name'];
$user= $_POST['user'];
$email= $_POST['email'];
$pass= md5($_POST['pass']);
$repass=md5($_POST['repass']);
$query=mysql_query("SELECT * FROM accounts WHERE username='$user' or email='$email'")or die("Wrong Query");
if ($submit){
if($user&$pass&$repass){
if(strlen($user)>=8){
if(strlen($user)<=16){
if(mysql_num_rows($query)==1){
echo'<script type="text/javascript">alert("Username or Email already exist!, try another email and username")</script>';
}
else{
if($pass==$repass){
mysql_query("INSERT INTO accounts (name,username,email,password) VALUES('$name','$user','$email','$pass')");
die("<button type='a' onclick=''><A href='Login.php'>Login to your account now</A></button>");
}
else{
echo'<script type="text/javascript">alert("Password did not match!")</script>';
}
}
}
else{
echo'<script type="text/javascript">alert("Enter atleast 8-16 Character!")</script>';
}
}
else{
echo'<script type="text/javascript">alert("Enter atleast 8-16 Character!")</script>';
}
}
else{
echo'<script type="text/javascript">alert("Please Fill up All Fields!")</script>';
}
}
?>