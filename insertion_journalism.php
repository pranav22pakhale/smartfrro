<?php
	session_start();
    $uname = $_SESSION["username"];
	require_once 'database_connection.php';
	if(isset($_POST['duration']))
	{
		$duration=$_POST['duration'];
	}
	if(isset($_POST['company_name']))
	{
		$company_name=$_POST['company_name'];
	}
	if(isset($_POST['purpose_in_brief']))
	{
		$purpose_in_brief=$_POST['purpose_in_brief'];
	}
	
	
	

	$sql = "insert into journalism_dept (duration,company_name,email_id,purpose_in_brief) values ('".$duration."','".$company_name."','".$uname."','".$purpose_in_brief."')";

	$result = mysqli_query($con,$sql);
    

	

	header("Location:main_thankyou.php");
?>