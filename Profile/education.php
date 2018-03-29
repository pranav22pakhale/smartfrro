<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="pro_style.css">
    <link rel="stylesheet" href="edu_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>
<!--div class="container">
  <h1>My First Bootstrap Page</h1>
  <p>This is some text.</p>
  
<div-->
<header>

    <nav class="navbar  navbar-dark bg-dark">
      <img src="images/got-logo.png" class="img-responsive rounded" style="height: 90px; margin-left:  85px;">
  <!--a class="navbar-brand" href="#" style="align:center;"><h1>Fixed top</h1></a-->
</nav>

</header>

<!--div class="w-100 p-3" style="background-color: #eee;">
              
              <!--?php

                    session_start();

                    echo "Name: ".$_SESSION["username"];

                     
                    
              ?>
</div-->

<section style="margin-top: 50px;">
    <div  class="container"> 
        <form action="insertion_education.php" id="msform" method="POST" >

            

            <fieldset>
                <h2 class="fs-title">Education Details</h2>
         		<h3 class="fs-subtitle">Purpose</h3>
                <input type="text" name="institute_name" placeholder="Institute Name"  class="form-control" value="test" />
                <input type="text" name="institute_location" placeholder="Institute Location" value="test"/>
                <input type="text" name="course_name" placeholder="Course Name" value="test"/>
                <input type="text" name="course_duration" placeholder="Course Duration" value="test"/>
                <input type="submit" name="next" class="next action-button" value="Next" value="test"/>
            </fieldset>

     </form>
    </div>
</section>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script  src="index.js"></script>
</body>
</html>