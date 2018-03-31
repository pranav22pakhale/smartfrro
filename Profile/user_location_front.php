<!DOCTYPE html>
<html lang="en">
<head>
  <title>Location</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<style type="text/css">
  nav{
    height: 100px !important;
    background-color: #343a40;
    border-radius: 0px !important;
  }
  
</style>
<header>
  <nav class="navbar navbar-dark bg-dark">
    <img src="/smartfrro/images/got-logo.png" height="79px" width="79px" style="margin-left: 90px;">
    <h1 style="color:white;margin-left:-70px;"> <b>e-Smart</b>Frro</h1>
     <a href="/smartfrro/logout.php"><button class="btn btn-outline-danger my-2 my-sm-0 btn-lg" type="submit" style="margin-left: 880px" >LOGOUT</button></a>
  <!--span class="navbar-brand mb-0 h1">Navbar</span-->
</nav>
</header>
<div class="w-100 p-3" style="background-color: #eee; padding: 10px; margin-top: -20px;">
              
              <?php

                    session_start();

                    echo "Name: ".$_SESSION["username"];

                    $uname = $_SESSION["username"];

                    require_once 'database_connection.php';

                    $sql = "SELECT * FROM sign_up WHERE email_id = '"  .$uname."'";

                    $result = mysqli_query($con, $sql);

                    $row = mysqli_fetch_assoc($result);

                    

                    
              ?>
</div>


<div class="container">
  <h1 style="text-align: center;">SUBMIT YOUR LOCATION</h1>
  <!--button type="button" class="btn btn-primary">Primary</button-->
  
  

  <!--?php

                    session_start();

                    //echo "Name: ".$_SESSION["username"];

                     
                    
              ?-->

<center><button class="btn btn-primary " onclick="getLocation()">Provide Location</button></center>

<script>
//var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
     document.getElementById("la").value=latitude;
      document.getElementById("lo").value=longitude;  
}


  
 

</script>
 <form action="t.php" method="POST">
    <div class="form-group">
      <!--input type="text" class="form-control" name="user_name" placeholder=""-->
      <input type="hidden" class="form-control"  name="latitude" id="la" >
    </div>
    <input type="hidden" class="form-control"  name="longitude" id="lo">
    <!--/div-->
    <center><button type="submit" class="btn btn-primary">Confirm Submission</button></center>
  </form> 
</div>

</body>
</html>