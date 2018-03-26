<?php
  
  session_start();
  
  require_once 'database_connection.php';

   if(isset($_POST['latitude']))
   {
   		$latitude=$_POST['latitude'];
   		//echo $latitude;
   }
   
   if(isset($_POST['longitude']))
   {
   		$longitude=$_POST['longitude'];
   }

   $username = $_SESSION["username"];
   //echo "jgbjh";
   //echo $longitude;
function getaddress($lat,$lng)
  {
     $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($lat).','.trim($lng).'&sensor=false';
     $json = @file_get_contents($url);
     $data=json_decode($json);
     $status = $data->status;
     if($status=="OK")
     {
       return $data->results[0]->formatted_address;
     }
     else
     {
       return false;
     }
  }
$address= getaddress($latitude,$longitude);

  if($address)
  {
    echo $address;
  }
  else
  {
    echo "Not found";
  }

	$sql = "insert into live_location(email_id,address) values ('$username','$address')"  ;
	$result = mysqli_query($con,$sql);

  header("Location:thankyou_location.php");
   ?>