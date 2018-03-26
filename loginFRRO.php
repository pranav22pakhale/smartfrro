<?php 
  session_start();
?>


<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
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
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
