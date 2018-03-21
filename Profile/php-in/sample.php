<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_POST['abc'])){
$servername = "localhost";
$username1 = "root";
$password = "";
$dbname = "sms_gateway";

// Create connection
$conn = new mysqli($servername, $username1, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Mobile_no FROM user WHERE Expiry=14";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	 $str1="";
	
	while($row = $result->fetch_assoc()) {
	$str1 .= $row['Mobile_no'];	
	}
	//echo $str1;
	// output data of each row
    $arr = str_split($str1,"10");
	$numbers ="7588195302";
	//$numbers = implode(",",$arr);
	//echo $numbers;
	// Authorisation details.
	$username = "tv5rasam@gmail.com";
	$hash = "8893e5531532a85957a667505f2991f58c05cddb80229747fe0228e2c6d8c7e8";// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	 // A single number or a comma-seperated list of numbers
	$message = "This is a test message from the PHP API script.";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	echo $result;
	curl_close($ch);
	
	
	echo "Messge Sent";
	
} else {
    echo "0 results";
}


$conn->close();


}

?> 
<form action="sample.php" method="post">
<input type="submit" name="abc" value="send">

</form>

</body>
</html>
