<?php
	
	
	require_once 'database_connection.php';
	$email=$_SESSION["uname"];
	$sql = "UPDATE `sign_up` SET `verification`='no' WHERE email_id = $email";

	mysqli_query($con,$sql);

?>