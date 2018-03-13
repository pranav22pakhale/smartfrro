<?php
	
	
	
	session_start();

	require_once 'database_connection.php';

	$uname=$_POST['emailid'];
	$password=$_POST['password'];

	$sql = "SELECT email_id,password FROM sign_up";
	$result = mysqli_query($con, $sql);

    
	

	while($row = mysqli_fetch_assoc($result)) {
		if($row["email_id"] == $uname && $row["password"] == $password){
			$flag = 1;
			break;
		}
	}
	if($flag == 1)
	{
		$_SESSION["username"] = $uname;
		$_SESSION["password"] = $password;
		header("Location:http://localhost/smartfrro/form.php");
	}
	else{
		$_SESSION['errorMessage'] = 1;
		header("Location:new 1.php");
		exit();
	}	
?>