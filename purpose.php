	<?php
	if(!isset($_SESSION)){
		session_start();
	}
	if(!isset($_SESSION['user_logged'])){
		header("Location: login_user.php");
	}

	if(!isset($_GET['dept'])){
		header("Location: Dashboard_frro.php");
	}

	$dept = $_GET['dept'];
	if($dept === "all"){

	}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Smart Frro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark col-md-12">
  <img src="images/got-logo.png" class="navbar-brand img-responsive rounded" style="height: 100px;margin-left: 90px"></a>
   <h1 style="color: white;"><b>e-Smart</b>Frro</h1> 
      <a href="logout.php"><button class="btn btn-outline-success btn-lg pull-right" type="submit" >LOGOUT</button></a>
  
</nav>
</header>
</body>
</html>

