<?php

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
		$course_duration=$_POST['specialist_name'];
	}
	if(isset($_POST['admit_date']))
	{
		$course_duration=$_POST['admit_date'];
	}
	
	
	

	$sql = "insert into medical_dept (hospital_name,hospital_location,medical_specialist,specialist_name,admit_date) values ('".$hospital_name."','".$hospital_location."','".$medical_specialist."','".$specialist_name."','".$admit_date.")";

	$result = mysqli_query($con,$sql);
    

	

	header("Location:main_thankyou.php");
?>