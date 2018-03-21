<?php


define('mysql_host','localhost');
define('mysql_user','root');
define('mysql_pwd','');

$con1 = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($con1,'frro') or die(mysqli_error($con1));




$sql1="SELECT r.surname,r.given_name,r.email_id,r.purpose,v.date_of_issue,v.expiry_date,
a.address_in_India,a.pin_code_in_India,
r.verification,r.police_enquiry
from registration r , address_details a,visa_details v
where r.email_id=a.email_id
and r.email_id=v.email_id";


$result = mysqli_query($con1, $sql1);

$row = mysqli_fetch_assoc($result);
$surname=$row['surname'];
$name=$row['given_name'];	
$email_id= $row['email_id'];
$purpose= $row['purpose'];
$date_of_issue=$row['date_of_issue'];
$expiry_date= $row['expiry_date'];
$address_in_India=$row['address_in_India'];
$pin_code_in_India=$row['pin_code_in_India'];
$verification=$row['verification'];
$police_enquiry=$row['police_enquiry'];

echo $surname.$name.$email_id.$purpose.$date_of_issue.$expiry_date.$address_in_India.$pin_code_in_India.$verification.$police_enquiry;

$con2 = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($con2,'buffer') or die(mysqli_error($con2));

$sql2="INSERT INTO queue(name,surname,email_id,purpose, issue_date,expiry_date,location_of_foreigner, police_station_name,verification,police_enquiry,dirty_bit) VALUES ('$name','$surname','$email_id','$purpose','$date_of_issue','$expiry_date','$address_in_India','$pin_code_in_India','$verification','$police_enquiry',0)";

mysqli_query($con2, $sql2);
echo "very nice";
?>