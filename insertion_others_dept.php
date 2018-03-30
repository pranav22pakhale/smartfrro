<?php

    session_start();

    $uname = $_SESSION["username"];

	require_once 'database_connection.php';
	if(isset($_POST['purpose_in_brief']))
	{
		$purpose_in_brief=$_POST['purpose_in_brief'];
	}
<<<<<<< HEAD
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
=======
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
>>>>>>> aeb45f341fe02fc5b883ee63e030a30bb9cae2b2
	}
	if(isset($_POST['duration']))
	{
		$duration=$_POST['duration'];
	}
<<<<<<< HEAD
=======

	
>>>>>>> aeb45f341fe02fc5b883ee63e030a30bb9cae2b2
	
	
	

<<<<<<< HEAD
	$sql = "insert into others_dept (purpose_in_brief,invitor_name,invitor_contact_no,invitor_email_id,invitor_location,duration,email_id) values ('".$purpose_in_brief."','".$invitor_name."','".$invitor_email_id."','".$invitor_location."','".$admit_date."','".$duration."','".$uname."')";
=======
	$sql = "insert into others_dept (purpose_in_brief,inviter_name,inviter_contact_no,inviter_email_id,duration,email_id) values ('".$purpose_in_brief."','".$inviter_name."','".$inviter_contact_no."','".$inviter_email_id."','".$duration."','".$uname."')";
>>>>>>> aeb45f341fe02fc5b883ee63e030a30bb9cae2b2

	$result = mysqli_query($con,$sql);
    

	

	header("Location:main_thankyou.php");
?>