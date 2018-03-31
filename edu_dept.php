<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <title>Login Template</title> 
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="custom.css" rel='stylesheet' type='text/css'>
  <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <script type="text/javascript" src="assets/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="jquery.min.js"></script>

<script type="text/javascript">

</script>
<style type="text/css">

.color
{
  color:#FFF0000;
}
.opaque1{
  
   opacity: 0.79;
}
.opaque2{
  
   opacity: 0.59;
}

body{

    background-image: url('edu.jpg');
    background-repeat: no-repeat;
  background-attachment:fixed;
  background-position:center;
  -webkit-background-size:cover;
  -moz-background-size:cover;
    -o--background-size:cover;
   background-size:100% 100%;
  
  }
  .center {
    text-align: center;
    
  }
  </style>
</head>
<body>
<nav class="navbar" style="background-color: #000000">
  <!--<a class="navbar-brand" href="#">
    <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Bootstrap
  </a>-->
  
  <p class="ex1 opaque2"><font size="12"  style="color:white"><center>FRRO Education Department</center></font></p>
  
  </nav>
<div class="container opaque center">
  <div id="loginbox" class="mainbox col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 loginbox opaque1"> 
    <div class="panel panel-info" > 
      <div class="panel-heading"> 
        <div class="panel-title"> LOGIN </div> 
        
      </div> 
      <div class="panel-body panel-pad"> 
        <div id="login-alert" class="alert alert-danger col-sm-12 login-alert"></div> 
          <form action="/smartfrro/frro_dashboard_tables/edu_dept_fetch.php" id="loginform" class="form-horizontal" name="form1" onsubmit="return validate()" role="form" method="POST">
           <?php
                  if (isset($_SESSION['errorMessage']))
                  {
                    echo "<span style='color:red;'>Email or password is incorrect</span>";
                    //session_destroy();
                  }
                ?>
            <div class="input-group margT25"> 
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-user"></i>
              </span> 
              <input id="login-emailid" type="text" class="form-control" name="uid" placeholder="Institute ID" required> 
            </div> 
            <div class="input-group margT25"> 
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> 
              <input id="login-password" type="password" class="form-control" name="password" placeholder="password" required> 
            </div> 
            
            <div class="form-group margT10"> 
            <!-- Button --> 
              <div class="col-sm-12 controls"> 
                <!--a id="btn-login" href="#" class="btn btn-block btn-success">Login </a--> 
                <button type="submit">login</button>
              </div> 
            </div> 
            
                    
               
                </div> 
            
          </form> 
        </div> 
      </div> 
    </div> 
  </div>
  
</body>
</html>

<!-- 'window.location.reload();' -->