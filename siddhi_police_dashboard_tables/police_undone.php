<?php


require_once 'head.php';

include('db_connection.php');

$sql = "SELECT *
        FROM police  
        WHERE police_enquiry='requested'";
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
                <th>purpose</th>
                <TH>issue_date</TH>
				<th>expiry_date</th>
				<th>location_of_foreigner</th>
				<th>police_station_name</th>
				
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
		echo "<td> <a href='../police_status.php?id=".$row["email_id"]."'>" .$row["email_id"]."</a></td>";
        echo "<td>".$row["purpose"]."</td>";
		echo "<td>".$row["issue_date"]."</td>";
		echo "<td>".$row["expiry_date"]."</td>";
		echo "<td>".$row["location_of_foreigner"]."</td>";
		echo "<td>" .$row["police_station_name"] . "</td>";
		
        echo "</tr>";
    }
    echo "</table>";
} else {
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