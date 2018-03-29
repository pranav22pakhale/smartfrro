<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
require_once 'head.php';

include('database_connection.php');

$date2=date_create(date("Y-m-d"));
$sql="SELECT email_id, address, date_time 
		FROM live_location
		WHERE datediff(curdate(),date_time)>4";

$result = mysqli_query($con, $sql);
$email_to = "smartfrro@gmail.com";
/*$row=mysqli_fetch_row($result);
	echo $row[0];
mysqli_close($con);
*/

?>
<div class="container">
    <div class="row">
		<table id="example" class="display nowrap" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>email_id</th>
		                <th>address</th>
		                <TH>date</TH>
		            </tr>
		        </thead>
		        <tbody>
		<?php

		if (mysqli_num_rows($result) > 0) {

		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {

		    	$email_to = $email_to.",".$row['email_id'];
		        echo "<tr>";
		        echo "<td>" .$row["email_id"] . "</td>";
		        echo "<td>" .$row["address"]. "</td>";
		        echo "<td>".$row["date_time"]."</td>";
		        echo "</tr>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}


		?>
		    </tbody>
		</table>
	</div>
</div>

<?php

$_SESSION['mes2'] = "You have not updated your location from last 5 days.\nPlease update it.";

$_SESSION['email_to'] = $email_to;
?>
<div class="row">
	<div class="col-md-5">
	</div>
	<div  class="col-md-3">
<form action="email_verify.php">
	<center><input type="submit" class="btn btn-info"></input></center>
</div>
<div  class="col-md-4">
	</div>
</form>
</div>
<script type="text/javascript">
    $(document).ready(function() {
     $('#example').DataTable( );
} );
</script>

<!-- $date1=date_create("2018-04-15");
//$date2=date_create("2013-12-12");
$date2=date_create(date("Y-m-d"));
$diff=date_diff($date1,$date2);
echo $diff->days;
?> -->

</body>
</html>