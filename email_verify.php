<?php

//require 'PHPMailer\PHPMailer\PHPMailerAutoload.php'; 
//require_once 'swiftmailer-master\lib\swift_required.php';

$subject='Email verification from FRRO';
$to='smartfrro@gmail.com';
$username='Atharva';
$password='Raut';
$hash=md5($username.$password);		//hash of usrname and passwd

$mes2='localhost/smartfrro/hashverify.php?hash='.$hash;
$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
	<table>
    <tr>
      <th>
      		<a href='.$mes2.'>Click here for Verification</a>
      </th>
    </tr>
  </table>
</body>
</html>
';
// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'From: Smart FRRO <smartfrro@gmail.com>';
$headers[] = 'Cc: smartfrro@gmail.com';
$headers[] = 'Bcc: smartfrro@gmail.com';

mail($to,$subject,$message,implode("\r\n", $headers));

?>