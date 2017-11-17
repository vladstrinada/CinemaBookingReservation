<?php
include("SESSION.PHP");?>
<?php
include("field.php");?>

<!DOCTYPE html">
<html><head>
<meta content="text/html; utf-8" http-equiv="content-type"><title>About</title>
    <link  href="css/profile.css" rel="stylesheet">
    
    
    <div class="container">
	<div class="row">
		<h2>User Profile</h2>
        
        
       <div class="col-md-7 ">
<body id="page-top">
    <div class="filmbody">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                
                <input id="profile-image-upload" class="hidden" type="file">
<div style="color:#999;" >click here to change profile image</div>
                <!--Upload Image Js And Css-->
           
              
   
                
                
                     
                     
                     </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;"><?php
include('conn.php');
$query=mysql_query("SELECT * FROM accounts where username='$login_session'");
{
	$row=mysql_fetch_array($query);
	echo "".$row['name']."<br>";
}
?></h4></span>            
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
<div class="col-sm-5 col-xs-6 tital " >First Name:</div><div class="col-sm-7 col-xs-6 "><?php
include('conn.php');
$query=mysql_query("SELECT * FROM accounts where username='$login_session'");
{
	$row=mysql_fetch_array($query);
	echo "".$row['name']."<br>";
}
?></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>
<div class="col-sm-5 col-xs-6 tital " >Nationality:</div><div class="col-sm-7"><?php echo $login_session;?></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Email:</div><div class="col-sm-7"><?php
include('conn.php');
$query=mysql_query("SELECT * FROM accounts where username='$login_session'");
{
	$row=mysql_fetch_array($query);
	echo "".$row['email']."<br>";
}
?></div>


            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
</div>
</div>  
    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script> 
       
       
       
       
       
       
       
       
       
   </div>

</body>
</html>