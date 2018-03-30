<?php

require_once 'head.php';

session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>e FRRO Online Service</title>
	<!-- Bootstrap Styles-->
     <!-- Morris Chart Styles-->
    <link href="morris-0.4.3.min.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> -->
   <link href="assets/googlefont/chart.css" rel='stylesheet' type='text/css' />
   <style type="text/css">
      .image-circle{
    border-radius: 50%;
    width: 175px;
    height: 175px;
    border: 4px solid #FFF;
    margin: 10px;
	
}
   .outter{
    padding: 0px;
    width: 150px;
    height: 200px;
	padding-left:25px;
}

   </style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" ><strong>e FRRO Online Service</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li><a href="chart4.php">BACK</a></li>
				
            </ul>
        
		</nav>
		<?php session_start();
	define('mysql_host','localhost');
define('mysql_user','root');
define('mysql_pwd','');

$conn = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($conn,'frro') or die(mysqli_error($conn));
$email_id=$_SESSION["email_id"];


$sql = "SELECT profile_pic FROM registration WHERE email_id='".$email_id."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
  
		
	
	?>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <div class="outter" align="center"><img src='<?php echo $row['profile_pic']; ?>' class="image-circle"/></div>
				
<?php }}  ?>		
				<ul class="nav" id="main-menu">
                    
                    <li>
                        <a href="chart.php"> Personal Details</a>
                    </li>
                    <li>
                        <a href="chart2.php" >Passport Details</a>
                    </li>
					<li>
                        <a href="chart3.php" > Address Details </a>
                    </li>
                    
                      <li>
                        <a href="chart4.php"  > Document Details </a>
                    </li>
                    <li>
                        <a href="#" class="active-menu" > Status </a>
                    </li>
                              
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                             Charts <small>Show up your stats</small>
                        </h1>
						 
									
		</div>
            <div id="page-inner" > 
              <div class="col-md-6 col-sm-12 col-xs-12">                     
                        <!--div class="panel-heading">
                            Bar Chart
                        </div-->
						<form action="verification_action_verified.php" method="POST">
					<button type="submit" class="btn btn-success btn-lg" > Verified </button>
			</form>
			 <br>
	         <br>
			 <form action="verification_action_rejected.php" method="post">
	  <button type="submit" class="btn  btn-danger btn-lg" > Rejected </button>
	  </form>
	  
	  <br><br>
	  <form action="verification_action_police.php" method="post">
      <button class="btn btn-info btn-lg" type="submit" >Request for Police Verification</button>
      </form>    
		  
		  </div> 
                
                
           </div>
		    <!-- /. ROW  -->
				 <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
				
             <!-- /. PAGE INNER  -->
           </div>
              </div>   
         <!-- /. PAGE WRAPPER  -->
        
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- Morris Chart Js -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
	   
</body>
</html>
