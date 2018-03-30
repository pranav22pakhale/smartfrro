<?php

    session_start();

    $uname = $_SESSION["username"];

	require_once 'database_connection.php';
	if(isset($_POST['purpose_in_brief']))
	{
		$purpose_in_brief=$_POST['purpose_in_brief'];
	}
	if(isset($_POST['inviter_name']))
	{
		$inviter_name=$_POST['inviter_name'];
	}
	if(isset($_POST['inviter_contact_no']))
	{
		$inviter_contact_no=$_POST['inviter_contact_no'];
	}
	if(isset($_POST['inviter_email_id']))
	{
		$inviter_email_id=$_POST['inviter_email_id'];
	}
	if(isset($_POST['duration']))
	{
		$duration=$_POST['duration'];
	}

	
	
	
	

	$sql = "insert into others_dept (purpose_in_brief,inviter_name,inviter_contact_no,inviter_email_id,duration,email_id) values ('".$purpose_in_brief."','".$inviter_name."','".$inviter_contact_no."','".$inviter_email_id."','".$duration."','".$uname."')";

	$result = mysqli_query($con,$sql);
    

	

	header("Location:main_thankyou.php");
?>