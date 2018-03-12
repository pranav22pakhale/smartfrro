<?php

	  session_start();
      $originalkey = substr($_SESSION['code'],0,6);  //session of captcha
      $captcha = $_REQUEST['captcha'];
      if($captcha!=$originalkey){
        echo "<b> Captcha does not match, Go back and try again.</b>";
        echo "<b>".$originalkey."</b>";
        echo "<b>".$captcha."</b>";
      }
      else{echo "Captcha matched!!";}
?>



