	<?php
	if(!isset($_SESSION)){
		session_start();
	}
	if(!isset($_SESSION['frro_logged'])){
		header("Location: loginFRRO.php");
	}


	if(!isset($_GET['dept'])){
		header("Location: Dashboard_frro.php");
	}
	$dept = $_GET['dept'];
	if($dept === "education"){
		$purpose = " AND r.purpose = 'education'";
	}else if($dept === "medical"){
		$purpose = " AND r.purpose = 'medical'";
	}else if($dept === "journalism"){
		$purpose = " AND r.purpose = 'journalism'";
	}else if($dept === "other"){
		$purpose = " AND r.purpose = 'other'";
	}else{
		$purpose = '';
	}
$sql = "SELECT r.email_id, r.given_name,r.surname, p.passport_number, a.phone_number_in_india  FROM registration r, passport_details p,address_details a WHERE r.email_id=p.email_id AND r.email_id=a.email_id ".$purpose ;

	include('database_connection.php');
//echo $sql;
$result = mysqli_query($con, $sql);
require_once 'head.php';
	?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SmartFrro | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">

  <script type="text/JavaScript">
         
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
           
      
      </script>
      
     
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini" onload="JavaScript:AutoRefresh(500000);">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>F</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Smart</b>Frro</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- Notifications: style can be found in dropdown.less -->
         
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
         
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
       
       

      
       <li><a href="Dashboard_frro.php"><i class="fa fa-book"></i> <span>Dashboard</span></a></li>
        <li><a href="purpose.php?dept=all"><small><i class="fa fa-male"></i><i class="fa fa-child"></i><i class="fa fa-female"></i></small> <span>Population</span></a></li>
        <li><a href="purpose.php?dept=all"><i class="fa fa-bullseye"></i> <span>Purpose</span></a></li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

</section>
<div class="content">
	<div class="col-md-12">
		<center>
				<label>Select Purpose</label>
				<select class="form-control col-md-2" id="purpose">
					<option value="all" selected>All</option>
					<option value="education" <?php  echo ($dept=== 'education')?'selected':'' ;?> >Education</option>
					<option value="medical" <?php  echo ($dept=== 'medical')?'selected': '';?>>Medical</option>
					<option value="journalism" <?php  echo ($dept=== 'journalism')?'selected':'' ;?>>Journalism</option>
					<option value="other" <?php  echo ($dept=== 'other')?'selected':'' ;?>>Other</option>
				</select>		
			</center>
	</div>
	<div class="col-md-12">
		<label>Foreigner Details</label>
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>NAME</th>
                <th>PASSPORT NO</th>
                <th>EMAIL ID</th>
                <th>Contact No.</th>                
            </tr>
        </thead>
        <tbody>
            <?php

            if (mysqli_num_rows($result) > 0) {

                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $name = $row["given_name"]." ".$row["surname"];
                    echo "<tr>";
                    echo "<td> <a href='Profile/chart.php?id=".$row["email_id"]."'>" .$name. "</a></td>";
                    echo "<td> <a href='Profile/chart.php?id=".$row["email_id"]."'>".$row["passport_number"]."</a></td>";
                    echo "<td>  <a href='Profile/chart.php?id=".$row["email_id"]."'>". $row["email_id"]. "</a></td>";
                    echo "<td>  <a href='Profile/chart.php?id=".$row["email_id"]."'>". $row["phone_number_in_india"]. "</a></td>";
                    
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }


            ?>
        </tbody>
    </table>
</div>
<label></label>				
<div id="canvas-holder" class="col-md-5">
			<canvas id="chart-area" width="300" height="300"/>
		</div>

<div  class="col-md-5">
			<center><canvas id="canvas" height="450" width="600"></canvas></center>
		</div>
</div>
</div>

<footer class="main-footer">	
    <div class="pull-right hidden-xs">	
      <b>Version</b> 2.4.0
    </div>
    <strong>Team SmartFRRO.</strong>
</footer>


</div>
<!-- jQuery 3 -->
<script src="assets/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- SlimScroll -->
<!-- ChartJS -->
<!--script src="bower_components/chart.js/Chart.js"></script-->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script type="text/javascript" src="assets/datatables.net/js/jquery.dataTables.min.js""></script>
<script type="text/javascript" src="assets/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="assets/bower_components/chart.js/chart.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
     $('#example').DataTable( );
     $('#purpose').on('change', function(){
     		document.location.href = 'http://localhost/smartfrro/purpose.php?dept='+this.value;
     });

} );
</script>

	<script>

		var pieData = [
				{
					value: 300,
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Red"
				},
				{
					value: 50,
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "Green"
				},
				{
					value: 100,
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "Yellow"
				},
				{
					value: 40,
					color: "#949FB1",
					highlight: "#A8B3C5",
					label: "Grey"
				},
				{
					value: 120,
					color: "#4D5360",
					highlight: "#616774",
					label: "Dark Grey"
				}

			];
			var ctx1 = document.getElementById("chart-area").getContext("2d");
			window.myPie = new Chart(ctx1).Pie(pieData);

	var randomScalingFactor = function(){ return Math.round(Math.random()*5)};

	var barChartData = {
		labels : ["January","February","March","April","May","June","July","August","September","Octomber","November","December"],
		datasets : [
			{
				fillColor : "rgba(220,220,220,1)",
				strokeColor : "rgba(220,220,220,1)",
				highlightFill: "rgba(220,220,220,1)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			},
			{
				fillColor : "rgba(151,187,205,1)",
				strokeColor : "rgba(151,187,205,1)",
				highlightFill : "rgba(151,187,205,1)",
				highlightStroke : "rgba(151,187,205,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			}
		]

	}
	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
	}

	</script>
</body>
</html>
