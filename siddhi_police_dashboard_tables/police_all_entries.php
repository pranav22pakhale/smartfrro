<?php


require_once 'head.php';

include('db_connection.php');

$sql = "SELECT *,MAX(date_time)
        FROM policedb.police,frro.live_location
		WHERE policedb.police.email_id=frro.live_location.email_id";
		
$result = mysqli_query($con, $sql);

?>
<div class="container">
    <div class="row">
<table id="example" class="display nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>id</th>
				<th>name</th>
				
				<th>email_id</th>
                
                
				<th>location_of_foreigner</th>
				
				<th>police_enquiry</th>
				<th>Address</th>
				<th>Date</th>
				
            </tr>
        </thead>
        <tbody>
<?php

if (mysqli_num_rows($result) > 0) {

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$name = $row["name"]." ".$row["surname"];
        echo "<tr>";
        echo "<td>" .$row["id"] . "</td>";
		 echo "<td>" .$name . "</td>";
		echo "<td> <a href='../Profile/chart.php?id=".$row["email_id"]."'>" .$row["email_id"]."</a></td>";
        
				       
       
		echo "<td>".$row["location_of_foreigner"]."</td>";
		
		
		echo "<td>".$row["police_enquiry"]."</td>";
		echo "<td>".$row["address"]."</td>";
		echo "<td>".$row["date_time"]."</td>";
        echo "</tr>";
		/*session_start();

	require_once 'db_connection.php';
$result = mysql_query("SELECT email_id FROM police");
$storeArray = Array();
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $storeArray[] =  $row['email_id'];  
}
require_once 'db_connection.php';
while( $storeArray)
{
	
}
	*/}
    echo "</table>";
	}
 else {
    echo "0 results";
}


?>
        </tbody>
    </table>

<script type="text/javascript">
    $(document).ready(function() {
     $('#example').DataTable( );
} );
</script>