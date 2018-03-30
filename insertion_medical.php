<?php
	session_start();
    $uname = $_SESSION["username"];

	require_once 'database_connection.php';
	if(isset($_POST['hospital_name']))
	{
		$hospital_name=$_POST['hospital_name'];
	}
	if(isset($_POST['hospital_location']))
	{
		$hospital_location=$_POST['hospital_location'];
	}
	if(isset($_POST['medical_specialist']))
	{
		$medical_specialist=$_POST['medical_specialist'];
	}
	if(isset($_POST['specialist_name']))
	{
		$specialist_name=$_POST['specialist_name'];
	}
	if(isset($_POST['admit_date']))
	{
		$admit_date=$_POST['admit_date'];
	}
	
	
	

	$sql = "insert into medical_dept (hospital_name,hospital_location,medical_specialist,specialist_name,admit_date,email_id) values ('".$hospital_name."','".$hospital_location."','".$medical_specialist."','".$specialist_name."','".$admit_date."','".$uname."')";

	$result = mysqli_query($con,$sql);
    

	

	header("Location:main_thankyou.php");
?>