<?php
//FINAL TEMPLATE OF THE 4 modules 

define('mysql_host','localhost');
define('mysql_user','root');
define('mysql_pwd','');

$con1 = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($con1,'buffer') or die(mysqli_error($con1));




$sql1="SELECT *
FROM queue WHERE police_enquiry='requested' OR police_enquiry='not_requested'";


$result = mysqli_query($con1, $sql1);

//update dirty bit to 1 in queue
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

$result1 = mysqli_query($con1, $sql1);
while($row=mysqli_fetch_array($result1))
{
	$sql2="UPDATE queue SET dirty_bit=1 WHERE email_id='".$row['email_id']."'";
	mysqli_query($con1, $sql2);
}

$con2 = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($con2,'policedb') or die(mysqli_error($con2));


/*$i=1;
$sql2="INSERT INTO police(name)VALUES('".$data_row[$i]['name']."')";
mysqli_query($con2, $sql2);
*/
$i--;
while($i!=-1)
{
$sql2="INSERT INTO police(name,surname,email_id,purpose,issue_date,expiry_date,location_of_foreigner, police_station_name,verification,police_enquiry,dirty_bit) VALUES ('".$data_row[$i]['name']."','".$data_row[$i]['surname']."','".$data_row[$i]['email_id']."','".$data_row[$i]['purpose']."','".$data_row[$i]['date_of_issue']."','".$data_row[$i]['expiry_date']."','".$data_row[$i]['address_in_India']."','".$data_row[$i]['pin_code_in_India']."','".$data_row[$i]['verification']."','".$data_row[$i]['police_enquiry']."',1)";

mysqli_query($con2, $sql2);
$i--;
}
header("Location:/smartfrro/Dashboard_police.php");
?>