<?php
	
	session_start();

	require_once 'database_connection.php';

	if(isset($_POST['emailid'])){
		$uname=$_POST["emailid"];
		$password=$_POST['password'];

		$sql = "SELECT email_id,password ,verification FROM sign_up";
		$result = mysqli_query($con, $sql);

	    $_SESSION['emailid']=$uname;
		

		while($row = mysqli_fetch_assoc($result)) {
			if($row["email_id"] == $uname && password_verify($password,$row["password"])){
				$flag = 1;
				break;
			}
		}

		if($flag == 1)
		{	
			$sql = "select verification,mobile_no from sign_up where email_id = '$uname' ";
			$result = mysqli_query($con,$sql);
			if($row["verification"] == 1)
			{
			$_SESSION["username"] = $uname;
			$_SESSION["password"] = $password;
			$_SESSION['user'] = $result->fetch_assoc();
			//$_SESSION["mobile_no"] = $row[1];
			//$_SESSION["pass"] = $row[0];
			//var_dump($_SESSION);
			$no = mt_rand(1000, 9999);

			$_SESSION['otp'] = $no;
			$phone = $_SESSION['user']['mobile_no'];
			$sent_message="your otp is '$no'";
			require_once 'sms_gateway/sent_otp.php';
			

		}
		else{
			$_SESSION['errorMessage'] = 1;
			header("Location:login_user.php");
			exit();
		}	
		
	}
		else{
			header("Location:check_mail.php");
		}
}	
if(isset($_POST['otp'])){
	echo $_POST['otp'];
		if($_POST['otp'] == $_SESSION['otp'])
		{

		header("Location:check_for_registration.php");
		}
		else{
			echo "otp is not corrent";
		}
	}

		require_once 'head.php';
?>


<form method="post">
<input type="text" name="otp" class="form-group">
<button type="submit" class="btn btn-success">Submit</button>
</form>
