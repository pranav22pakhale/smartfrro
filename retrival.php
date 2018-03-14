<?php

	require_once 'database_connection.php';
		
	$sql = "SELECT * FROM foreigner";
	$result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
				echo "id: " . $row["Name"]. " - Name: " . $row["Password"]. "<br>"; 
		    }
	} else {
		    echo "0 results";
		}


?>
