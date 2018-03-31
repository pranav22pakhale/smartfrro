<!DOCTYPE html>
<html>
<body>

<?php
 //$curr = date("Y/m/d") ;
//$e=date_diff($curr,'2018-04-13');
//echo e;
$date_expire = '2014-08-06 00:00:00';    
$date = new DateTime($date_expire);
$now = new DateTime();

echo $date->diff($now)->format("%d");

?>

</body>
</html>