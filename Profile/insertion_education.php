<?php

	require_once 'database_connection.php';
	if(isset($_POST['institute_name']))
	{
		$institute_name=$_POST['institute_name'];
	}
	if(isset($_POST['institute_location']))
	{
		$institute_location=$_POST['institute_location'];
	}
	if(isset($_POST['course_name']))
	{
		$couse_name=$_POST['course_name'];
	}
	if(isset($_POST['course_duration']))
	{
		$course_duration=$_POST['course_duration'];
	}
	
	echo $institute_name.$institute_location.$course_name.$course_duration;

	$sql = "insert into education_dept (institute_name,institute_location,email_id,
		course_name,course_duration) values ('".$institute_name."','".$institute_location."','e',".$couse_name."','".$course_duration."')";

	$result = mysqli_query($con,$sql);
    echo $result;

	

	//header("Location:thankyou.php");
?>