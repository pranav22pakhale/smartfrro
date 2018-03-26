                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
<?php


require_once 'head.php';

include('database_connection.php');

$sql = "SELECT registration.email_id, registration.given_name,registration.surname, passport_details.passport_number, address_details.phone_number_in_india 
        FROM registration, passport_details,address_details 
        WHERE registration.email_id=passport_details.email_id AND registration.verification='verified' AND registration.email_id=address_details.email_id";
$result = mysqli_query($con, $sql);

?>
<div class="container">
    <div class="row">
<table id="example" class="display nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>NAME</th>
                <th>PASSPORT NO</th>
                <th>EMAIL ID</th>
                <th>Contact No.</th>                
            </tr>
        </thead>
        <tbody>
            <?php

            if (mysqli_num_rows($result) > 0) {

                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $name = $row["given_name"]." ".$row["surname"];
                    echo "<tr>";
                    echo "<td> <a href='../Profile/chart.php?id=".$row["email_id"]."'>" .$name. "</a></td>";
                    echo "<td> <a href='../Profile/chart.php?id=".$row["email_id"]."'>".$row["passport_number"]."</a></td>";
                    echo "<td>  <a href='../Profile/chart.php?id=".$row["email_id"]."'>". $row["email_id"]. "</a></td>";
                    echo "<td>  <a href='../Profile/chart.php?id=".$row["email_id"]."'>". $row["phone_number_in_india"]. "</a></td>";
                    
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


<script type="text/javascript">
    $(document).ready(function() {
     $('#example').DataTable( );
} );
</script>

</body>
</html>