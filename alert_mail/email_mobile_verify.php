<?php
session_start();
//require 'PHPMailer\PHPMailer\PHPMailerAutoload.php'; 
//require_once 'swiftmailer-master\lib\swift_required.php';
$email_to = $_SESSION['email_to'];
$mes2 = $_SESSION['mes2'];
$subject='FRRO alert';
$to=$email_to;
/*$username='Atharva';
$password='Raut';
$hash=md5($.$password);	*/	//hash of usrname and passwd

$message = '
<html>
<head>
  <title>Expiration Alert</title>
</head>
<body>
	<table>
    <tr>
      <th>
      		'.$mes2.'
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
/*$headers[] = 'Cc: smartfrro@gmail.com';
$headers[] = 'Bcc: smartfrro@gmail.com';*/

mail($to,$subject,$message,implode("\r\n", $headers));

header("Location:sample.php");

?>