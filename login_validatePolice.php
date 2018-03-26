<?php
	
	
	
	session_start();

	require_once 'db_connection.php';

	$uname=$_POST['uname'];
	$password=$_POST['pass'];

	$sql = "SELECT * FROM police_login";
	$result = mysqli_query($con, $sql);

	while($row = mysqli_fetch_assoc($result)) {

		if($row["uid"] == $uname && $row["password"] == $password){
			$flag = 1;
			break;
		}
	}
	if($flag == 1)
	{
		$_SESSION["username"] = $uname;
		
		$_SESSION["password"] = $password;
		header("Location:http://localhost/smartfrro/Dashboard_police.php");
	}
	else{
		$_SESSION['errorMessage'] = 1;
		header("Location:loginFRRO.php");
		exit();
	}	
?>