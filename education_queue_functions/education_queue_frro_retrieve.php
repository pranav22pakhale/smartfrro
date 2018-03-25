<?php
//FINAL TEMPLATE OF THE 4 modules 

define('mysql_host','localhost');
define('mysql_user','root');
define('mysql_pwd','');

$con1 = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($con1,'buffer') or die(mysqli_error($con1));




$sql1="SELECT *
from education_queue where course_status='done'";


$result = mysqli_query($con1, $sql1);

//update dirty bit to 1 in queue
$i=0;
while($row = mysqli_fetch_array($result))
{
$data_row[$i]['id']=$row['id'];
$data_row[$i]['email_id']=$row['email_id'];	
$data_row[$i]['institute_name']= $row['institute_name'];
$data_row[$i]['institute_location']= $row['institute_location'];
$data_row[$i]['course_name']=$row['course_name'];
$data_row[$i]['course_duration']= $row['course_duration'];
$data_row[$i]['course_status']=$row['course_status'];

$i++;
}
$sql1="DELETE FROM education_queue where course_status='done'";
mysqli_query($con1, $sql1);

$con2 = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($con2,'frro') or die(mysqli_error($con2));


/*$i=1;
$sql2="INSERT INTO police(name)VALUES('".$data_row[$i]['name']."')";
mysqli_query($con2, $sql2);
*/
$i--;
while($i!=-1)
{
$sql2="UPDATE education_dept SET course_status='".$data_row[$i]['course_status']."' WHERE education_dept.email_id='".$data_row[$i]['email_id']."'";

mysqli_query($con2, $sql2);
$i--;
}
echo "very nice";
?>


