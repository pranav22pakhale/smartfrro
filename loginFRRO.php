<?php 
  session_start();
?>


<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <?php include 'css/css.html'; ?>
 
  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    
  
</head>

<body style=" 
  background-image: url('images/t.jpg');   
  background-repeat: no-repeat;
  background-attachment: fixed;
    background-position: center;  
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;">
  <header>

    <!--nav class="navbar  navbar-dark bg-dark">
      <img src="images/got-logo.png" class="img-responsive rounded" style="height: 90px; margin-left:  85px;"-->
  <!--a class="navbar-brand" href="#" style="align:center;"><h1>Fixed top</h1></a-->

  <?php require_once 'header1.php'?>
</nav>

</header>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="#signup">FRRO</a></li>
        <li class="tab active"><a href="#login">Police</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">   
          <h1>Police</h1>
          
          <form action="login_validatePolice.php" method="POST" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              User Id<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="uname"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="pass"/>
          </div>
          
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div>
          
        <div id="signup">   
          <h1>FRRO</h1>
          
          <form action="login_validateFRRO.php" method="POST" autocomplete="off">
          
        

          <div class="field-wrap">
            <label>
              User Id<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name='uname' />
          </div>
          
          <div class="field-wrap">
            <label>
              Set Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='pass'/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />Log In</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->

      
      
</div> <!-- /form -->
  

  <footer class="footer-distributed">

      <div class="footer-left">

        <h3>Company<span>logo</span></h3>

        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Blog</a>
          ·
          <a href="#">Pricing</a>
          ·
          <a href="#">About</a>
          ·
          <a href="#">Faq</a>
          ·
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Company Name &copy; 2015</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>21 Revolution Street</span> Hyderabad, Telegana</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+1 555 123456</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">support@company.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
