<?php

	
define('mysql_host','localhost');
define('mysql_user','root');
define('mysql_pwd','');

$conn = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($conn,'frro') or die(mysqli_error($conn));


// Create connection
// Check connection

$sql ="update registration set verification ='rejected' where email_id='ross.taylor@gmail.com'"; 


$result = $conn->query($sql);

header("Location:file-name.php");

?>


