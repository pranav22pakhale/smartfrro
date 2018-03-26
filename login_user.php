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
    <!--script type="text/javascript" src="assets/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="jquery.min.js"></script-->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script type="text/javascript">

</script>
<style type="text/css">

.color
{
	color:#FF0000;
}

body{

    background-image: url('images/source2.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }
  </style>
</head>
<body>

<header>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img src="images/got-logo.png" class="navbar-brand img-responsive rounded" style="height: 125px;width:125px;margin-left: 90px"></a>
   <h1 style="color: white;"><b>e-Smart</b>Frro</h1> 
      <a href="logout.php"><button class="btn btn-outline-success my-2 my-sm-0 btn-lg" type="submit" style="margin-left: 880px" >LOGOUT</button></a>
  
</nav>
</header> 
  
  
<div class="container">
	<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 loginbox"> 
		<div class="panel panel-info" > 
			<div class="panel-heading"> 
				<div class="panel-title"> LOGIN </div> 
				
			</div> 
			<div class="panel-body panel-pad"> 
				<div id="login-alert" class="alert alert-danger col-sm-12 login-alert"></div> 
					<form action="login_validate_user.php" id="loginform" class="form-horizontal" name="form1" onsubmit="return validate()" role="form" method="POST">
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
							<input id="login-emailid" type="text" class="form-control" name="emailid" placeholder="email" required> 
						</div> 
						<div class="input-group margT25"> 
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> 
							<input id="login-password" type="password" class="form-control" name="password" placeholder="password" required> 
						</div> 
						
						
                <div class="input-group margT25"> 
							<span class="input-group-addon"></span>
							<input id="captcha" type="text" class="form-control" name="captcha" placeholder="Enter capcha value" required>
							<span id="captcha_error" class="color"></span> 
						</div> 
						
						<div class="form-group text-center" id="imgdiv">
							<?php
									
									$rand = substr(md5(rand()), 0, 6);								
									//$rand=substr(rand(),0,4); //only show 4 numbers
									$_SESSION['security_code'] = $rand;

 							?>
				            <img id="captcha_code" src="create_image.php" />
							<button name="recaptcha" type="button" class="btnRefresh" onclick='window.location.reload();' >Refresh</button>

        				</div> 
						<div class="input-group"> 
							<div class="checkbox"> 
								<label> 
									<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me 
								</label> 
							</div> 
						</div> 
						<div class="form-group margT10"> 
						<!-- Button --> 
							<div class="col-sm-12 controls"> 
								<!--a id="btn-login" href="#" class="btn btn-block btn-success">Login </a--> 
								<button type="submit">login</button>
							</div> 
						</div> 
						<div class="form-group"> 
							<div class="col-md-12 control"> 
								<div class="no-acc"> 
									Don't have an account! 
									<a href="Signup.php"> Sign Up Here </a> 									 
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

<script type="text/javascript">

function validate() {

	    var simple = '<?php echo $rand; ?>';
		if(simple != document.form1.captcha.value)
		{
			document.getElementById("captcha_error").innerHTML="Captcha Not Matched!";
			document.form1.captcha.focus();
			return false;
		}
		return true;


			
}
</script>

<!-- 'window.location.reload();' -->