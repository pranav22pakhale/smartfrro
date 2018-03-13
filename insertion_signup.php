<?php
	require_once 'database_connection.php';
	if(isset($_POST['emailId']))
	{
		$emailId=$_POST['emailId'];
	}
	if(isset($_POST['mobileNumber']))
	{
		$mobileNumber=$_POST['mobileNumber'];
	}
	if(isset($_POST['surname']))
	{
		$surname=$_POST['surname'];
	}
	if(isset($_POST['given_name']))
	{
		$given_name=$_POST['given_name'];
	}
	if(isset($_POST['date_of_birth']))
	{
		$date_of_birth=$_POST['date_of_birth'];
	}
	if(isset($_POST['gender']))
	{
		$gender=$_POST['gender'];
	}
	if(isset($_POST['passportnumber']))
	{
		$passportnumber=$_POST['passportnumber'];
	}
	if(isset($_POST['nationality']))
	{
		$nationality=$_POST['nationality'];
	}
	if(isset($_POST['password']))
	{
		$password=$_POST['password'];
		$password_hash=password_hash($_POST['password'], PASSWORD_BCRYPT);
	}
	

	$sql="insert into sign_up (email_id,mobile_no,surname,given_name,dob,gender,passport_no,nationality,password) values('$emailId','$mobileNumber','$surname','$given_name','$date_of_birth','$gender','$passportnumber','$nationality','$password_hash')";

	mysqli_query($con,$sql);

?>