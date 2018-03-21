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
                <li><a href="#">BACK</a></li>
				
            </ul>
        
		
		</nav>
		
		<?php
	$servername = "localhost";
$username1 = "root";
$password = "";
$dbname = "frro";

// Create connection
$conn = new mysqli($servername, $username1, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT profile_pic FROM registration WHERE email_id='ross.taylor@gmail.com' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	while($row = $result->fetch_assoc()) {
	
		
	
	?>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
			<div class="outter" align="center"><img src='<?php echo $row['profile_pic']; ?>' class="image-circle"/></div>
		<?php }}  ?>		
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="#" class="active-menu"> Personal Details</a>
                    </li>
                    <li>
                        <a href="chart2.php">Passport Details</a>
                    </li>
					<li>
                        <a href="chart3.php" > Address Details </a>
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
            <div id="page-inner" > 
             
                <div  > 
                    
                      
                  <div class="col-md-6 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default" >
                        <!--div class="panel-heading">
                            Bar Chart
                        </div-->
						
                        <div class="panel-body">
                            <table class="table table-hover ">
    
	<?php
	

$sql = "SELECT* FROM registration WHERE email_id='ross.taylor@gmail.com' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	while($row = $result->fetch_assoc()) {
	
		
	
	?>
	
	
      
    
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
