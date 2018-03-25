<?php
//FINAL TEMPLATE OF THE 4 modules 

define('mysql_host','localhost');
define('mysql_user','root');
define('mysql_pwd','');

$con1 = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($con1,'buffer') or die(mysqli_error($con1));




$sql1="SELECT *
FROM education_queue WHERE dirty_bit='0'";


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

$result1 = mysqli_query($con1, $sql1);
while($row=mysqli_fetch_array($result1))
{
	$sql2="UPDATE queue SET dirty_bit=1 WHERE email_id='".$row['email_id']."'";
	mysqli_query($con1, $sql2);
}

$con2 = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($con2,'education_dept') or die(mysqli_error($con2));


/*$i=1;
$sql2="INSERT INTO police(name)VALUES('".$data_row[$i]['name']."')";
mysqli_query($con2, $sql2);
*/
$i--;
while($i!=-1)
{
$sql2="INSERT INTO education_details(email_id, institute_name, institute_location, course_name, course_duration,course_status) VALUES ('".$data_row[$i]['email_id']."','".$data_row[$i]['institute_name']."','".$data_row[$i]['institute_location']."','".$data_row[$i]['course_name']."','".$data_row[$i]['course_duration']."','".$data_row[$i]['course_status']."')";
mysqli_query($con2, $sql2);
$i--;
}
echo "very nice";
?>