<?php
define('mysql_host','localhost');
define('mysql_user','root');
define('mysql_pwd','');

$con = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($con,'policedb') or die(mysqli_error($con));



?>