
<?php
	session_start();
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
		$surname=ucfirst($_POST['surname']);
	}
	if(isset($_POST['given_name']))
	{
		$given_name=ucfirst($_POST['given_name']);
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
	$_SESSION["uname"] = $emailId;
	$_SESSION["pass"] = $password;

	$sql="insert into sign_up (email_id,mobile_no,surname,given_name,dob,gender,passport_no,nationality,password) values('$emailId','$mobileNumber','$surname','$given_name','$date_of_birth','$gender','$passportnumber','$nationality','$password_hash')";

	mysqli_query($con,$sql);

	//$sql = "insert into login (email_id,password) values ('$emailId','$password')";
	//mysqli_query($con,$sql);
	$subject='Email verification from FRRO';
	$to=$emailId;
	$username=$emailId;
	$password=$password;
	$hash=md5($username.$password);		//hash of usrname and passwd

	$mes2='localhost/smartfrro/hashverify.php?hash='.$hash;

	$message = '
	<html>
	<head>
	  <title>Birthday Reminders for August</title>
	</head>
	<body>
		<table>
	    <tr>
	      <th>
	      		<a href='.$mes2.'>Click here for Verification</a>
	      </th>
	    </tr>
	  </table>
	</body>
	</html>
	';
	// To send HTML mail, the Content-type header must be set
	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=iso-8859-1';

	// Additional headers
	$headers[] = 'From: Smart FRRO <smartfrro@gmail.com>';
	$headers[] = 'Cc: smartfrro@gmail.com';
	$headers[] = 'Bcc: smartfrro@gmail.com';

	mail($to,$subject,$message,implode("\r\n", $headers));
	header("Location:email_sent.php");

?>