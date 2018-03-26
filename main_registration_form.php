<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="pro_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
    
<script type="text/javascript">
    function clk1(inputfield){
        if(inputfield.value.length==0)
        {
            alert("enter surname");
            return false;
        }
        return true;
    }


</script>

<body>
<!--div class="container">
  <h1>My First Bootstrap Page</h1>
  <p>This is some text.</p>
  
<div-->
<header>

    <!--nav class="navbar  navbar-dark bg-dark">
      <img src="images/got-logo.png" class="img-responsive rounded" style="height: 90px; margin-left:  85px;"-->
  <!--a class="navbar-brand" href="#" style="align:center;"><h1>Fixed top</h1></a-->

  <?php require_once 'header.php'?>
</nav>

</header>

<div class="w-100 p-3" style="background-color: #eee;">
              
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

<section style="margin-top: 50px;">
    <div  class="container"> 
        <form action="Profile/insertion_reg.php" id="msform" method="POST" enctype="multipart/form-data">

            <ul id="progressbar">
                <li class="active">Personal Detail Page 1</li>
                <li>Personal Detail Page 2</li>
                <li>Address Details</li>
                <li>Passport Details</li>
                <li>Visa Details</li>
            </ul>

            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                <h3 class="fs-subtitle">This is step 1</h3>
                 <input type="text" name="surname" placeholder="Surname"  value="<?php echo $row["surname"];?>" class="form-control" disabled />
                <input type="text" name="given_name" placeholder="Given Name" value="<?php echo $row["given_name"];?>" disabled/>
                <input type="text" name="father_name" placeholder="Father's Name"  />
                <input type="text" name="mother_name" placeholder="Mother's Name"  />
                <input type="text" name="spouse_name" placeholder="Spouse's Name"  />
                <input type="text" name="religion" placeholder="Religion" />
                <input type="text" name="purpose" placeholder="Purpose" />
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>

            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                <h3 class="fs-subtitle">This is step 2</h3>
                <small class="left">Date of birth</small>
                <input type="date" name="dob" placeholder="Date of Birth" value="<?php echo $row["dob"];?>" disabled/>
                <small class="left">Profile Pic</small>
                <input type="file" name="fileToUpload" id="fileToUpload" data-bottonText="choose profile picture">
                <small class="left">All documents in one pdf</small>
                <input type="file" name="fileToUpload1" id="fileToUpload">
                <input type="text" name="pre_nationality" placeholder="Present Nationality" />
                <input type="text" name="prev_nationality" placeholder="Previous Nationality" />
                <div class="form-group">
                <small class="left">Sex</small>
                <select class="form-control" id="exampleSelect1" name="sex">
                <option>male</option>
                <option>female</option></select></div>
                <div class="form-group">
                <small class="left">Indian origin</small>
                <select class="form-control" id="exampleSelect1" name="origin">
                <option>yes</option>
                <option>no</option></select></div>
                <input type="text" name="email_id" placeholder="Email Id" value="<?php echo $row["email_id"];?>" disabled/>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>

            <fieldset>
                <h2 class="fs-title">Address Details</h2>
                <h3 class="fs-subtitle">This is step 3</h3>
                <input type="text" name="address_outside" placeholder="Address outside India" />
                <input type="text" name="city_outside" placeholder="City outside India" />
                <input type="text" name="country" placeholder="Country" />
                <input type="text" name="address_inside" placeholder="Address in India"/>
                <input type="text" name="state" placeholder="State in India" />
                <input type="text" name="city" placeholder="City in India"/>
                <input type="text" name="pincode" placeholder="Pincode" />
                <input type="text" name="phone" placeholder="Phone Number" value="<?php echo $row["mobile_no"];?>"/>
                 <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
          

            <fieldset>
                <h2 class="fs-title">Passport Details</h2>
                <h3 class="fs-subtitle">This is step 4</h3>
                <input type="text" name="passport_no" placeholder="Passport No" value="<?php echo $row["passport_no"];?>" disabled/>
                <input type="text" name="country_of_issue" placeholder="Country of Issue" />
                <input type="text" name="place_of_issue" placeholder="Place of Issue" />
                <small class="left">Date of Issue</small>
                <input type="date" name="date_of_issue" placeholder="Date of Issue" />
                <small class="left">Expiry Date</small>
                <input type="date" name="pexpiry_date" placeholder="Expiry Date" />
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>

            <fieldset>
                <h2 class="fs-title">Visa Details</h2>
                <h3 class="fs-subtitle">This is step 5</h3>
                <input type="text" name="visa_number" placeholder="Visa Number" />
                <input type="text" name="vcountry_of_issue" placeholder="Country of Issue" />
                <input type="text" name="vplace_of_isssue" placeholder="Place of Issue" />
                <small class="left">Date of Issue</small>
                <input type="date" name="vdate_of_issue" placeholder="Date of Issue"/>
                <small class="left">Expiry Date</small>
                <input type="date" name="vexpiry_date" placeholder="Expiry Date" />
                <input type="text" name="visa_type" placeholder="Visa Type"/>
                <input type="text" name="vsub" placeholder="Visa Subtype" />
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <button type="submit" class=" action-button" name="submit">SUBMIT</button>
            </fieldset>

        </form>
    </div>
</section>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script  src="index.js"></script>
</body>
</html>