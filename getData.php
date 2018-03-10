<?php
$mysqli = new mysqli("localhost","root","","adcp");
if(isset($_GET['name'])){
	echo $_GET['name'];
}


	$query = "SELECT * FROM location WHERE id = 1";
	$result = $mysqli->query($query);
	//var_dump($result);
	echo json_encode($result);


echo "Hello";


?>