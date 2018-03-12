<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Smart Frro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style_frro.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="custom_frro.js"></script>
</head>
<body>
  <nav class="navbar" style="background-color: #81C784">
  <!--<a class="navbar-brand" href="#">
    <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Bootstrap
  </a>-->
  
  <p class="ex1"><font size="12">Online e-service Portal FRRO</font></p>
  
  </nav>
  <div align="center" class="ex">
    <div class="card text-center" style="width: 25rem;">
      <div class="card-header" style="background-color: #4CAF50">
        Login
      </div>
      <div class="card-body">
        <div class="container">
          <form action="login_validate.php" method="POST">
            <?php
              if (isset($_SESSION['errorMessage']))
              {
                echo "<span style='color:red;'>Check your input</span>";
                session_destroy();
              }
            ?>
            <div>  
              <select id="inputState" class="form-control">
                <option selected>FRRO</option>
                <option>Police</option>
              </select>
            </div><br>
            <div>    
                <input type="text" width="20" class="form-control" id="inputID" name="uname"  placeholder="ID">
            </div><br>
            <div>
              <input type="password" class="form-control" id="inputPassword" name="pass" placeholder="Password">
            </div><br>
            <button type="submit" class="btn btn-success" id="submit">Submit</button>
          </form>     
        </div>
      </div>
    <div class="card-footer text-muted" style="background-color: #81C784">
  </div>
  </div>
  </div>
  <nav class="navbar fixed-bottom" style="background-color: #81C784">
  <h4 class="ex2">Fixed bottom</h4>
</nav>
<!--footer style="background-color: #fffff">
     <div class="container-fluid outer_footer">
         <div class="container">
             <div class="col-sm-12 pnone">
                 <div class="footer">                           
                         <p>version 1.1 &copy; Content Owned by Ministry of Home Affairs, Government of India. <br> e-FRRO is designed, developed and hosted
by National Informatics Centre, Ministry of Electronics &amp; Information Technology, Government of India. </p>
                 </div>
             </div>
         </div>
     </div>
 </footer-->

</body>