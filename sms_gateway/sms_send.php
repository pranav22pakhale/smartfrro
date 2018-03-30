<?php
session_start();
//require 'PHPMailer\PHPMailer\PHPMailerAutoload.php'; 
//require_once 'swiftmailer-master\lib\swift_required.php';
/*$email_to = $_SESSION['email_to'];
$mes2 = $_SESSION['mes2'];
*/
//SMS GATEWAY
########################################################
# Login information for the SMS Gateway
########################################################

$ozeki_user = "admin";
$ozeki_password = "pranav123";
#add th eip address of the laptop where ozieki web server was intalled
$ozeki_url = "http://127.0.0.1:9501/api?";

########################################################
# Functions used to send the SMS message
########################################################
function httpRequest($url){
    $pattern = "/http...([0-9a-zA-Z-.]*).([0-9]*).(.*)/";
    preg_match($pattern,$url,$args);
    $in = "";
    $fp = fsockopen("$args[1]", $args[2], $errno, $errstr, 30);
    if (!$fp) {
       return("$errstr ($errno)");
    } else {
        $out = "GET /$args[3] HTTP/1.1\r\n";
        $out .= "Host: $args[1]:$args[2]\r\n";
        $out .= "User-agent: Ozeki PHP client\r\n";
        $out .= "Accept: */*\r\n";
        $out .= "Connection: Close\r\n\r\n";

        fwrite($fp, $out);
        while (!feof($fp)) {
           $in.=fgets($fp, 128);
        }
    }
    fclose($fp);
    return($in);
}



function ozekiSend($phone, $msg, $debug=false){
      global $ozeki_user,$ozeki_password,$ozeki_url;

      $url = 'username='.$ozeki_user;
      $url.= '&password='.$ozeki_password;
      $url.= '&action=sendmessage';
      $url.= '&messagetype=SMS:TEXT';
      $url.= '&recipient='.urlencode($phone);
      $url.= '&messagedata='.urlencode($msg);

      $urltouse =  $ozeki_url.$url;
      if ($debug) { echo "Request: <br>$urltouse<br><br>"; }

      //Open the URL to send the message
      $response = httpRequest($urltouse);
      if ($debug) {
           echo "Response: <br><pre>".
           str_replace(array("<",">"),array("&lt;","&gt;"),$response).
           "</pre><br>"; }

      return($response);
}


//EMAIL ALERT

$subject='Telangana FRRO alert';
//$to=$email_to;
/*$username='Atharva';
$password='Raut';
$hash=md5($.$password); */  //hash of usrname and passwd
include('database_connection.php');
ini_set('max_execution_time', 0);
$date2=date_create(date("Y-m-d"));
$sql="SELECT  email_id, expiry_date, mobile_no, given_name
    FROM visa_details
    WHERE datediff(curdate(),expiry_date)<16";
/*$sql="SELECT  email_id, expiry_date, mobile_no
    FROM visa_details
    WHERE email_id='pranav22pakhale@gmail.com'";*/
   

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {

                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
 
$name =$row ['given_name'];


$message = '
<html>
<head>
  <title>Expiration Alert</title>
</head>
<body>
  <table>
    <tr>
      <th>
          Hello '.$name.',<br><br>
          Your Visa will be expiring after '.date_diff($date2,$row[expiry_date]).' days.

          <br><br>
          Thankyou,<br> 
          FRRO-Telangana



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
$headers[] = 'Bcc: smartfrro@gwmail.com';*/
echo $row['email_id'];

mail($row['email_id'],$subject,$message,implode("\r\n", $headers));
$date_now=date_create(date("Y-m-d"));
$phonenum =''.$row['mobile_no'].'';
$message ="Hello ".$row['given_name'].
"Your Visa will be expiring after".date_diff($date2,$row[expiry_date])." days".
;
$debug = true;

ozekiSend($phonenum,$message,$debug);


}}

header("Location: ../Dashboard_frro.php");

?>