<?php

require_once 'head.php';

session_start();
$_SESSION['email_id']=$_GET['id'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>e POLICE Online Service</title>
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
                <a class="navbar-brand" ><strong>e POLICE Online Service</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li><a href="Dashboard_police.php">BACK</a></li>
				
            </ul>
        
		</nav>
		<?php session_start();
	





  
		
	
	?>
        <!--/. NAV TOP  -->
        <!--nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <div class="outter" align="center"></div>
				
		
				<ul class="nav" id="main-menu">
                    
                    <li>
                        <a href="#" class="active-menu" > Status </a>
                    </li>
                    
                              
                </ul>

            </div>

        </nav-->
		<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
               
				
	
				<ul class="nav" id="main-menu">
                    
                    <li>
                        <a href="chart.php"> Status</a>
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
						<form action="police_enquired.php" method="POST">
					<button type="submit" class="btn btn-success btn-lg" > ENQUIRED </button>
			</form>
			 <br>
	         <br>
			 <form action="police_notenquired.php" method="post">
	  <button type="submit" class="btn  btn-danger btn-lg" > NOT ENQUIRED</button>
	  </form>
	  
	  <br><br>
	  <form action="police_suspicious.php" method="post">
      <button class="btn btn-info btn-lg" type="submit" >SUSPICIOUS</button>
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
