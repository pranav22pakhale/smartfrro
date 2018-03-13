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
$(document).ready(function(){
	$("#reload").click(function() {

$("#img").remove();
var id = Math.random();
$('<img id="img" src="captcha.php?id='+id+'"/>').appendTo("#imgdiv");
id ='';
});	


	$("#btn-login").click(function(){
		
		
		if($('#login-emailid').val()=='')
	       {
			   alert(" Email Id  must not be blank.");
	    	   $('#login-emailid').focus();
	    	   return false;    	  
	    	}
		
		else if($('#login-password').val()=='')
		{
			alert("Password can not be blank.")
			$('#login-password').focus();
			return false;
		}
		
		/*else if($('#capatcha').val()=='')
			{
			alert("Capatcha must not be blank.")
			$('#capatcha').focus();
			return false;
			}*/
		
		else
{ //validating CAPTCHA with user input text
var dataString = 'captcha=' + captcha;
$.ajax({
type: "POST",
url: "captcha2.php",
data: dataString,
success: function(html) {
alert(html);
}
});
}
});
		
});				


function refresh_captcha(){
	$('#login-emailid').val("");
	$('#login-password').val("");
	$('#captcha').val("");
	$('#efrro_captcha_id').attr('src',"ecapatcha.jsp?rand="+Math.random());	
}


</script>
<style>
body{

    background-image: url('images/source2.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }
  </style>
</head>
<body>
<nav class="navbar" style="background-color: #81C784">
  <!--<a class="navbar-brand" href="#">
    <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Bootstrap
  </a>-->
  
  <p class="ex1" align="center"><font size="12">Online e-service Portal FRRO</font></p>
  
  </nav>
<div class="container">
	<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 loginbox"> 
		<div class="panel panel-info" > 
			<div class="panel-heading"> 
				<div class="panel-title"> LOGIN </div> 
				
			</div> 
			<div class="panel-body panel-pad"> 
				<div id="login-alert" class="alert alert-danger col-sm-12 login-alert"></div> 
					<form action="login_validate_user.php" id="loginform" class="form-horizontal" role="form" method="POST">
					 <?php
		              if (isset($_SESSION['errorMessage']))
		              {
		                echo "<span style='color:red;'>Check your input</span>";
		                session_destroy();
		              }
		            ?>
					 	<div class="input-group margT25"> 
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-user"></i>
							</span> 
							<input id="login-emailid" type="text" class="form-control" name="emailid" value="" placeholder="email"> 
						</div> 
						<div class="input-group margT25"> 
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> 
							<input id="login-password" type="password" class="form-control" name="password" placeholder="password"> 
						</div> 
						
						
                <div class="input-group margT25"> 
							<span class="input-group-addon"></span>
							<input id="capatcha" type="text" class="form-control" name="captcha" placeholder="Enter capcha value"> 
						</div> 
						
						<div class="form-group text-center" id="imgdiv">
            <img src="captcha.php" alt="captcha" id="img"/>
             <i class="fa fa-refresh" id="reload"  style='cursor:pointer' style="vertical-align: middle;"></i>
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
								<button type=submit>login</button>
							</div> 
						</div> 
						<div class="form-group"> 
							<div class="col-md-12 control"> 
								<div class="no-acc"> 
									Don't have an account! 
									<a href="#"> Sign Up Here </a> 									 
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