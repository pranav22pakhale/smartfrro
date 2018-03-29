<?php
session_start();

	
define('mysql_host','localhost');
define('mysql_user','root');
define('mysql_pwd','');

$conn = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($conn,'policedb') or die(mysqli_error($conn));


// Create connection
// Check connection


	$email_id=$_SESSION["email_id"];
echo $email_id;
 $sql ="update police set police_enquiry ='done' where email_id='".$email_id."'"; 
echo $sql;
$result = $conn->query($sql);

header("Location:dashboard_police.php");


?>