<?php

    session_start();

    $uname = $_SESSION["username"];

	require_once 'database_connection.php';
	if(isset($_POST['purpose_in_brief']))
	{
		$purpose_in_brief=$_POST['purpose_in_brief'];
	}
	if(isset($_POST['invitor_name']))
	{
		$invitor_name=$_POST['invitor_name'];
	}
	if(isset($_POST['invitor_contact_no']))
	{
		$invitor_contact_no=$_POST['invitor_contact_no'];
	}
	if(isset($_POST['invitor_email_id']))
	{
		$invitor_email_id=$_POST['invitor_email_id'];
	}
	if(isset($_POST['duration']))
	{
		$duration=$_POST['duration'];
	}
	
	
	

	$sql = "insert into others_dept (purpose_in_brief,invitor_name,invitor_contact_no,invitor_email_id,invitor_location,duration,email_id) values ('".$purpose_in_brief."','".$invitor_name."','".$invitor_email_id."','".$invitor_location."','".$admit_date."','".$duration."','".$uname."')";

	$result = mysqli_query($con,$sql);
    

	

	header("Location:main_thankyou.php");
?>