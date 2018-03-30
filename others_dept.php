<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form (Medical Department)</title>
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



</header>
<?php
 require_once 'header.php'
?>
<div class="w-100 p-3" style="background-color: #eee;">
              
              <?php

                     session_start();
                    require_once 'database_connection.php';

                    $uname = $_SESSION["username"];

                    $sql = "SELECT * FROM sign_up WHERE email_id = '"  .$uname."'";

                    $result = mysqli_query($con, $sql);

                    $row = mysqli_fetch_assoc($result);

                    echo '<span style="padding-right:150px">Name: '.$_SESSION["username"].'</span>';
                    echo '<span style="padding-right:150px">Passport No: '.$row["passport_no"].'</span>';
                    echo '<span style="padding-right:150px">Mobile: '.$row["mobile_no"].'</span>';


                     
                    
              ?>
</div>

<section style="margin-top: 50px;">
    <div  class="container"> 
        <form action="insertion_medical.php" id="msform" method="POST" >

            

            <fieldset>
                <h2 class="fs-title">Other purpose details</h2>
         		<h3 class="fs-subtitle">Purpose</h3>
                <input type="text" name="purpose_in_brief" placeholder="Purpose in brief"  class="form-control"  />
                <input type="text" name="invitor_name" placeholder="Invitor Name" />
                <input type="text" name="invitor_contact_no" placeholder="Invitor Contact No." />
                <input type="text" name="invitor_email_id" placeholder="Invitor Email id" />
                <input type="text" name="invitor_location" placeholder="Invitor Loacation" />
                <input type="text" name="duration" placeholder="Duration" />


                <input type="submit" name="next" class="next action-button" value="Next"/>
            </fieldset>

     </form>
    </div>
</section>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script  src="index.js"></script>
</body>
</html>