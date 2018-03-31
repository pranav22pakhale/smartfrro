<?php


require_once 'head.php';

include('database_connection.php');
if(!isset($_SESSION)){
    session_start();
}

//var_dump($_POST['select_all']);
if(isset($_POST['checkbox'])){
    foreach ($_POST['select_all'] as $selected) {
        $sql = "UPDATE education_dept SET status = 1 WHERE email_id = '".$selected."'";
        mysqli_query($con,$sql);    
    }
}
    if(isset($_POST['uid'])){
        $uname=$_POST['uid'];
        $password=$_POST['password'];
        $_SESSION['uname'] = $uname;
        $sql = "SELECT * FROM frro_login";
        $result = mysqli_query($con, $sql);

        while($row = mysqli_fetch_assoc($result)) {

            if($row["id"] == $uname && $row["password"] == $password){
                $flag = 1;
                break;
            }
        }
}
$uname = $_SESSION['uname'];
     
    $sql = "SELECT institute_name,email_id,course_name,course_duration
            FROM education_dept 
            WHERE institute_name = '$uname' AND status=0 ";
    $result = mysqli_query($con, $sql);
?>

<div class="container">
    <div class="row">
            <form method="post" action="">
<table id="example" class="display nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>INSTITUTE NAME</th>
                <th>EMAIL ID</th>
                <th>Course NAME</th>
                <th>Course Duration</th> 
                <th>status</th>               
            </tr>
        </thead>
        <tbody>
            <?php
            //echo $sql;
            //var_dump($result);

            if (mysqli_num_rows($result) > 0) {

                // output data of each filepro_rowcount()
                foreach ($result as $row) {
                //var_dump($row);
                   // $name = $row["given_name"]." ".$row["surname"];
                    echo "<tr>";
                    echo "<td>  ".$row['institute_name']."</a></td>";
                    echo "<td> ".$row["email_id"]."</a></td>";
                    echo "<td>  ".$row["course_name"]."</a></td>";
                    echo "<td>  ".$row["course_duration"]."</a></td>";
                    echo '<td> <input type="checkbox" name="select_all[]" value="'.$row['email_id'].'" id="example-select-all"> </td>';
                    
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }


            ?>
        </tbody>
    </table>
    <input type="submit" name="checkbox" class="btn btn-success" value="Submit">
        </form>
</div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
     $('#example').DataTable( );
} );
</script>

</body>
</html>