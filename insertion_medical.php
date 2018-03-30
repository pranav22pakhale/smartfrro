<?php
<<<<<<< HEAD
=======
	session_start();
    $uname = $_SESSION["username"];
>>>>>>> aeb45f341fe02fc5b883ee63e030a30bb9cae2b2

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
<<<<<<< HEAD
		$course_duration=$_POST['specialist_name'];
	}
	if(isset($_POST['admit_date']))
	{
		$course_duration=$_POST['admit_date'];
=======
		$specialist_name=$_POST['specialist_name'];
	}
	if(isset($_POST['admit_date']))
	{
		$admit_date=$_POST['admit_date'];
>>>>>>> aeb45f341fe02fc5b883ee63e030a30bb9cae2b2
	}
	
	
	

<<<<<<< HEAD
	$sql = "insert into medical_dept (hospital_name,hospital_location,medical_specialist,specialist_name,admit_date) values ('".$hospital_name."','".$hospital_location."','".$medical_specialist."','".$specialist_name."','".$admit_date.")";
=======
	$sql = "insert into medical_dept (hospital_name,hospital_location,medical_specialist,specialist_name,admit_date,email_id) values ('".$hospital_name."','".$hospital_location."','".$medical_specialist."','".$specialist_name."','".$admit_date."','".$uname."')";
>>>>>>> aeb45f341fe02fc5b883ee63e030a30bb9cae2b2

	$result = mysqli_query($con,$sql);
    

	

	header("Location:main_thankyou.php");
?>