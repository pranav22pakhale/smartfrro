<html>
<head>
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    </head>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                              
<?php

require_once 'head.php';

include('database_connection.php');

$sql = "SELECT id,given_name 
        FROM registration 

        WHERE verification = 'verified'";
$result = mysqli_query($con, $sql);

?>
<div class="container">
    <div class="row">
<table id="example" class="display nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>EMAIL ID</th>
                <!--TH>PASSPORT NO</TH-->
            </tr>
        </thead>
        <tbody>
<?php

if (mysqli_num_rows($result) > 0) {

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" .$row["id"] . "</td>";
        echo "<td> <a href='details.php?id=".$row['id']."'>" . $row["email_id"]. "</a></td>";
        //echo "<td>".$row["passport_no"]."</td>";
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