<!DOCTYPE html>
<html lang="en">
<head>
  <title>Location</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<header>

    <nav class="navbar  navbar-dark bg-blue" style="padding: .5rem 1rem; background-color: #343a40!important;border-radius: 0">

      <img src="../images/got-logo.png" class="img-responsive rounded" style="height: 90px; margin-left:  85px;">
      
       
  
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

<button class="btn btn-primary " onclick="getLocation()">SUBMIT</button>

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
    <div class="form-group col-md-5 center-block">
      <!--input type="text" class="form-control" name="user_name" placeholder=""-->
      <input type="hidden" class="form-control"  name="latitude" id="la" >
    </div>
    <input type="hidden" class="form-control"  name="longitude" id="lo">
    <!--/div-->
    <button type="submit" class="btn btn-primary">Confirm Submission</button>
  </form> 
</div>

</body>
</html>