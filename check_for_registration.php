<?php
session_start();
define('mysql_host','localhost');
define('mysql_user','root');
define('mysql_pwd','');

$conn = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($conn,'frro') or die(mysqli_error($conn));


// Create connection
// Check connection

$emailid=$_SESSION['emailid'];

	//$sql = "UPDATE registration SET registration.police_enquiry= WHERE email_id='ross.taylor@gmail.com' ";
 $sql ="Select email_id from registration where email_id='".$emailid."'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)){
	header("Location:Profile/user_profile.php");

}
else{
	header("Location:main_registration_form.php");

}

	
	?>