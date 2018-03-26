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
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                <li><a href="login_user.php">Logout</a></li>
				
            </ul>
        
		
		</nav>
		
		<?php
	session_start();
define('mysql_host','localhost');
define('mysql_user','root');
define('mysql_pwd','');

$conn = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($conn,'frro') or die(mysqli_error($conn));


// Create connection
// Check connection

$emailid=$_SESSION['emailid'];



	//$sql = "UPDATE registration SET registration.police_enquiry= WHERE email_id='ross.taylor@gmail.com' ";
 $sql ="Select * from registration where email_id='".$emailid."'";

$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
	
	while($row = $result->fetch_assoc()) {
	
		
	
	?>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
			<div class="outter" align="center"><img src='<?php echo $row['profile_pic']; ?>' class="image-circle"/></div>
	
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="#" class="active-menu"> Registration Details</a>
                    </li>
                    <li>
                        <a href="user_profile_purpose_details.php">Purpose Details</a>
                    </li>
					<li>
                        <a href="chart3.php" > Edit Details </a>
                    </li>
                    <li>
                        <a href="user_location_front.php" > Provide Location </a>
                    </li>
                    
                                
                </ul>

            </div>

        </nav>

	
	
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                             Hello <?php echo $row['given_name'];  ?>
                        </h1>
						 
									
		</div>
            <div id="page-inner" > 
             
                <div  > 
                    
                      
                  <div class="col-md-6 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default" >
                        <!--div class="panel-heading">
                            Bar Chart
                        </div-->
						
                        <div class="panel-body">
                            <table class="table table-hover ">
    
	
	
      
    
    <tbody>
      <tr>
        <td>First Name</td>
        <td><?php echo $row['given_name'];  ?></td>
        
      </tr>
      <tr>
        <td>Last Name</td>
        <td><?php echo $row['surname'];  ?></td>
        
      </tr>
      <tr>
        <td>Sex</td>
        <td><?php echo $row['sex'];  ?></td>
       
      </tr>
	  <tr>
        <td>Father Name</td>
        <td><?php echo $row['father_name'];  ?></td>
       
      </tr>
	  <tr>
        <td>Mother Name</td>
        <td><?php echo $row['mother_name'];  ?></td>
       
      </tr>
	  <tr>
        <td>Spouse Name</td>
        <td><?php echo $row['spouse_name'];  ?></td>
       
      </tr>
	  <tr>
        <td>Date of Birth</td>
        <td><?php echo $row['dob'];  ?></td>
       
      </tr>
	  <tr>
        <td>Religion</td>
        <td><?php echo $row['religion'];  ?></td>
       
      </tr>
	  <tr>
        <td>Purpose</td>
        <td><?php echo $row['purpose'];  ?></td>
       
      </tr>
	  <tr>
        <td>Present Nationality</td>
        <td><?php echo $row['present_nationality'];  ?></td>
       
      </tr>
	  <tr>
        <td>Previous Nationality</td>
        <td><?php echo $row['previous_nationality'];  ?></td>
       
      </tr>
	  <tr>
        <td>Indian Origin</td>
        <td><?php echo $row['indian_origin'];  ?></td>
       
      </tr>
	  <tr>
        <td>Email Id</td>
        <td><?php echo $row['email_id'];  ?></td>
       
      </tr>
	  <tr>
        <td>Document</td>
        <td><a href='<?php echo $row['document']; ?>'>Click Here</a></td>
       
      </tr>
	  
	    
	  
    </tbody>
  
  
<?php }} ?>
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
