<?php

//require 'PHPMailer\PHPMailer\PHPMailerAutoload.php'; 
//require_once 'swiftmailer-master\lib\swift_required.php';

$subject='email verification from frro';
$to='raut.atharva1997@gmail.com';
$username='Atharva';
$password='Raut';
$hash=md5($username.$password);		//hash of usrname and passwd
$message='localhost/hashverify?hash='.$hash;

mail($to,$subject,$message,'From:test.com')

?>