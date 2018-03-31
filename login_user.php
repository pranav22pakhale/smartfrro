<?php 
if(!isset($_SESSION)){
  session_start();
}
?>

<?php

	require_once 'database_connection.php';

	if(isset($_POST['emailid'])){
		$uname=$_POST["emailid"];
		$password=$_POST['password'];

		$sql = "SELECT email_id,password ,verification FROM sign_up";
		$result = mysqli_query($con, $sql);

	    $_SESSION['emailid']=$uname;
		

		while($row = mysqli_fetch_assoc($result)) {
			if($row["email_id"] == $uname && password_verify($password,$row["password"])){
				$flag = 1;
				break;
			}
		}

		if($flag == 1)
		{	
			$sql = "select verification,mobile_no from sign_up where email_id = '$uname' ";
			$result = mysqli_query($con,$sql);
			if($row["verification"] == 1)
			{
			$_SESSION["username"] = $uname;
			$_SESSION["password"] = $password;
			$_SESSION['user'] = $result->fetch_assoc();
			//$_SESSION["mobile_no"] = $row[1];
			//$_SESSION["pass"] = $row[0];
			//var_dump($_SESSION);
			$no = mt_rand(1000, 9999);

			$_SESSION['otp'] = $no;
			$phone = $_SESSION['user']['mobile_no'];
			$sent_message="your otp is '$no'";
			require_once 'sms_gateway/sent_otp.php';
			

		}
		else{
			$_SESSION['errorMessage'] = 1;
			header("Location:login_user.php");
			exit();
		}	
		
	}
		else{
			header("Location:check_mail.php");
		}
}	
if(isset($_POST['otp'])){
	echo $_POST['otp'];
		if($_POST['otp'] == $_SESSION['otp'])
		{

		header("Location:check_for_registration.php");
		}
		else{
			echo "otp is not corrent";
		}
	}

		require_once 'head.php';
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
	 <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script-->

	<style>
			body
			{
				background-image: url('images/hydrabad.jpg');
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-position: center;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}

			.outer
			{
				height: 28%;
				width: 28%;
				position: fixed;
				top: 15%;
				left: 35%;
			}
		</style>
<style type="text/css">
    body{        
        padding-top: 140px;
        padding-bottom: 15px;
        background-image: url('/smartfrro/images/h.png'); 	
	background-repeat: no-repeat;
	background-attachment: fixed;
    background-position: center;	
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;
    }

    .container{
        width: 80%;
        margin: 1 auto; }

    .fixed-header, .fixed-footer{
        width: 100%;
        position: fixed;        
        background:#63605a;
        padding: 15px 0;
        color: #fff;

    }
    .fixed-header{
	 height: 100px;
   padding: 3px 0;
  	z-index:1000; 
        top: 0;
      margin-top: -10px;
      opacity: .75;
    }
    .fixed-footer{
        bottom: 0;
    }    
    
    nav a{
        color: #fff;
        text-decoration: none;
        padding: 6px 25px;
        display: inline-block;
    }
	 .container p{
        line-height: 200px; 
    }
	.mandfield{
	    color: #f00;
	}

    
.color
{
	color:#FF0000;
}

body{

    background-image: url('/smartfrro/images/h.jpg'); 	
	background-repeat: no-repeat;
	background-attachment: fixed;
    background-position: center;	
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;
   opacity: .75;

  }
  </style>
</head>
<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();">
<div class="fixed-header">
        <div class="container">
           <nav>
                    <img src="images/got-logo.png" height="79" width="79" alt="logo" style="display: inline-block;" />
                	<a href="#" style="display: inline-block;"><h1><b>e-Smart</b>Frro</h1></a>
                	
            </nav>
        </div>
        </div>
<!--header>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img src="images/got-logo.png" class="navbar-brand img-responsive rounded" style="height: 100px;width:100px;margin-left: 90px"></a>
   <h1 style="color: white;"><b>e-Smart</b>Frro</h1> 
      <a href="logout.php"><button class="btn btn-outline-success my-2 my-sm-0 btn-lg" type="submit" style="margin-left: 880px" >LOGOUT</button></a>
  
</nav>
</header--> 
  
  
<div class="container">
	<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 loginbox" style="margin-left: 29% !important; width: 43% !important;"> 
		<div class="panel panel-info" > 
			<div class="panel-heading"> 
				<div class="panel-title"> LOGIN </div> 
				
			</div> 
			<div class="panel-body panel-pad"> 
				<div id="login-alert" class="alert alert-danger col-sm-12 login-alert"></div> 
					<form action="" id="loginform" class="form-horizontal" name="form1" onsubmit="return validate()" role="form" method="POST">
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
							<i class="fa fa-refresh fa-spin" onclick="window.location.reload();" style="cursor:pointer"></i>

        				</div> 
						 
						<div class="form-group margT10"> 
						<!-- Button --> 
							<div class="col-sm-12 controls"> 
								<!--a id="btn-login" href="#" class="btn btn-block btn-success">Login </a--> 
								<center><button type="submit">login</button></center>
							</div> 
						</div> 

						<div class="input-group"> 
							<div class="checkbox"> 
								<label> 
									<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me 
								</label> 
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
				<center><form method="post" name="otpform">
					<?php echo (isset($uname))?'<label style="color:red">Enter your otp</label>':'';?>
<input type="text"  placeholder="enter otp here" name="otp" class="form-group">
<button type="submit" class="btn btn-success">Submit</button>
</form></center>

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


 
 function noBack(){window.history.forward()}
            noBack();
            window.onload=noBack;
            window.onpageshow=function(evt){if(evt.persisted)noBack()}
            window.onunload=function(){void(0)}
            
            function burstCache() {
       if (!navigator.onLine) {
           document.body.innerHTML = 'Loading...';
       }
   }
</script>

<!-- 'window.location.reload();' -->