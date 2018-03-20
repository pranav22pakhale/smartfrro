<?php
session_start();
//require_once 'database_connection.php';
	require_once 'update.php';
/*define('mysql_host','localhost');
define('mysql_user','root');
define('mysql_pwd','');

$con = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($con,'frro') or die(mysqli_error($con));*/

$genhash=md5($_SESSION["uname"].$_SESSION["pass"]);
$hash=$_GET['hash'];
echo 'genhash is '.$genhash;
echo '<br>';
echo 'hash is'.$hash;
if($genhash == $hash)
{
	$sql = "UPDATE 'sign_up' SET 'verification'='yes' WHERE 'email_id' = $_SESSION["uname"]";
	$result = mysqli_query($con, $sql);
	

	/*$sql = "select * from sign_up";
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_assoc($result)) {
				echo "id: " . $row["email_id"]. " - status: " . $row["verification"]. "<br>"; 
		    }*/
	

	echo ' email verified ';
}
else{
	echo 'not verified';
}
?>