<?php

require_once 'head.php';

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
                <li><a href="chart2.php">BACK</a></li>
				
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
				
	<?php }} ?>			
				<ul class="nav" id="main-menu">
                    
                    <li>
                        <a href="chart.php"> Personal Details</a>
                    </li>
                    <li>
                        <a href="chart2.php" >Passport Details</a>
                    </li>
					<li>
                        <a href="#" class="active-menu"> Address Details </a>
                    </li>
                    
                      <li>
                        <a href="chart4.php" > Document Details </a>
                    </li>
                    <li>
                        <a href="chart5.php" > Status </a>
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
            <div id="page-inner" style="margin-left: 260px;"> 
             
                <div  > 
                    
                      
                  <div class="col-md-6 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default" >
                        <!--div class="panel-heading">
                            Bar Chart
                        </div-->
						
                        <div class="panel-body">
                            <table class="table table-hover ">
      
   <?php
  $sql = "SELECT* FROM address_details WHERE email_id='".$email_id."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
  

		
	
	?>
   
    <tbody>
      <tr>
        <td>Address outside India</td>
        <td><?php echo $row['address_out_side_India'];  ?></td>
        
      </tr>
      <tr>
        <td>City Outside India</td>
        <td><?php echo $row['city_out_side_India'];  ?></td>
        
      </tr>
      <tr>
        <td>Country</td>
        <td><?php echo $row['country'];  ?></td>
       
      </tr>
	  <tr>
        <td>Address in India</td>
        <td><?php echo $row['address_in_India'];  ?></td>
       
      </tr>
	  <tr>
        <td>State in India</td>
        <td><?php echo $row['state_in_India'];  ?></td>
       
      </tr>
	  <tr>
        <td>City</td>
        <td><?php echo $row['city'];  ?></td>
       
      </tr>
	  <tr>
        <td>Pin Code in India</td>
        <td><?php echo $row['pin_code_in_India'];  ?></td>
       
      </tr>
	  <tr>
        <td>Phone Number in India</td>
        <td><?php echo $row['phone_number_in_India'];  ?></td>
       
      </tr>
	  
    </tbody>
  
  
<?php } } ?>
	</table>
                        </div>
					
                    </div>            
                </div>
                               
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
