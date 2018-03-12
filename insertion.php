<?php
	require_once 'database_connection.php';
	if(isset($_POST['uname']))
	{
		$name=$_POST['uname'];
	}
	if(isset($_POST['pass']))
	{
	$password=$_POST['pass'];
	}

	$sql="insert into frro_login (id,password) values('$name','$password')";

	mysqli_query($con,$sql);

?>