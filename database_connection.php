<?php
define('mysql_host','localhost');
define('mysql_user','root');
define('mysql_pwd','niks2903');

$con = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($con,'frro') or die(mysqli_error($con));



?>




