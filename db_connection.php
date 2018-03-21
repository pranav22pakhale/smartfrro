<?php

$con = mysqli_connect('localhost','root','') or die('Can not connect to database..try again');
mysqli_select_db($con,'policedb') or die(mysqli_error($con));



?>