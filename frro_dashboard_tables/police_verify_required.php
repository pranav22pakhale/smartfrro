                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
<?php


require_once 'head.php';

include('database_connection.php');

$sql = "SELECT  registration.email_id,registration.given_name,passport_details.passport_number
        FROM registration,passport_details
        WHERE registration.police_enquiry='not requested'";
$result = mysqli_query($con, $sql);

?>
<div class="container">
    <div class="row">
<table id="example" class="display nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Email id</th>
                <th>Given Name</th>
                <TH>Passport No.</TH>
            </tr>
        </thead>
        <tbody>
<?php

if (mysqli_num_rows($result) > 0) {

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td> <a href='chart.php?email_id=".$row['email_id']."'>" .$row["email_id"] . "</td>";
        echo "<td> " . $row["given_name"]. "</a></td>";
        echo "<td>".$row["passport_number"]."</td>";
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