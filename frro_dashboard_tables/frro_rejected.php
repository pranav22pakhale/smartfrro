                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
<?php


require_once 'head.php';

include('database_connection.php');

$sql = "SELECT id,given_name, passport_details.passport_no 
        FROM registration , passport_details
        AND passport_details.email_id=registration.email_id
        WHERE verification='rejected'";
$result = mysqli_query($con, $sql);

?>
<div class="container">
    <div class="row">
<table id="example" class="display nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>id</th>
                <th>given_name</th>
                <TH>Passport No.</TH>
            </tr>
        </thead>
        <tbody>
<?php

if (mysqli_num_rows($result) > 0) {

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" .$row["id"] . "</td>";
        echo "<td> <a href='details.php?id=".$row['id']."'>" . $row["given_name"]. "</a></td>";
        echo "<td>".$row["passport_no"]."</td>";
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