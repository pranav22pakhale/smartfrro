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
$sql="SELECT email_id, visa_number, expiry_date,mobile_no
		FROM visa_details
		WHERE (datediff(curdate(),expiry_date)=15 AND datediff(curdate(),expiry_date)=13)";

$result = mysqli_query($con, $sql);
//$email_to = "hello@wew.com";
?>
<div class="container">
    <div class="row">
		<table id="example" class="display nowrap" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Email Id</th>
		                <th>Visa Number</th>
		                <TH>Expiry Date</TH>
		                <TH>Mobile No.</TH>
		                
		            </tr>
		        </thead>
		        <tbody>
		<?php

		if (mysqli_num_rows($result) > 0) {

       if($row = mysqli_fetch_assoc($result)){
       	$mobile_to= $row['mobile_no'];
        $email_to = $row['email_id'];
        echo "<tr>";
		        echo "<td>" .$row["email_id"] . "</td>";
		        echo "<td>". $row["visa_number"]."</td>";
		        echo "<td>".$row["expiry_date"]."</td>";
		        echo "<td>".$row["mobile_no"]."</td>";
		        
		        echo "</tr>";
		    
       }

		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	/*$mobile_to= $mobile_to.",".$row['mobile_no'];
		    	$email_to = $email_to.",".$row['email_id'];*/
		        
		        echo "<tr>";
		        echo "<td>" .$row["email_id"] . "</td>";
		        echo "<td>". $row["visa_number"]."</td>";
		        echo "<td>".$row["expiry_date"]."</td>";
		        echo "<td>".$row["mobile_no"]."</td>";
		        
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

/*$_SESSION['mes2'] = "Your visa will be expired within 15 days. ";
*/
/*$_SESSION['email_to'] = $email_to;
$_SESSION['mobile_to'] = $mobile_to;
*/




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