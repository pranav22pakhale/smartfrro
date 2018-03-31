<?php


define('mysql_host','localhost');
define('mysql_user','root');
define('mysql_pwd','');

$con1 = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($con1,'policedb') or die(mysqli_error($con1));



$sql1="SELECT *
FROM police WHERE police_enquiry='done' OR police_enquiry='suspicious'" ;


$result = mysqli_query($con1, $sql1);

//update dirty bit to 2 in queue

$i=0;
while($row = mysqli_fetch_array($result))
{
$data_row[$i]['surname']=$row['surname'];
$data_row[$i]['name']=$row['name'];	
$data_row[$i]['email_id']= $row['email_id'];
$data_row[$i]['purpose']= $row['purpose'];
$data_row[$i]['date_of_issue']=$row['issue_date'];
$data_row[$i]['expiry_date']= $row['expiry_date'];
$data_row[$i]['address_in_India']=$row['location_of_foreigner'];
$data_row[$i]['pin_code_in_India']=$row['police_station_name'];
$data_row[$i]['verification']=$row['verification'];
$data_row[$i]['police_enquiry']=$row['police_enquiry'];
$i++;
}


$con2 = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($con2,'buffer') or die(mysqli_error($con2));

$i--;
while($i!=-1)
{
$sql2="UPDATE queue SET police_enquiry='".$data_row[$i]['police_enquiry']."' WHERE queue.email_id='".$data_row[$i]['email_id']."'";

mysqli_query($con2, $sql2);
$i--;
}
header("Location:/smartfrro/Dashboard_police.php");
?>