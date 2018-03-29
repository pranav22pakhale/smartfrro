<?php 
  session_destroy();
  header("Location:login_user.php");
  exit();
?>
<script language="javaScript" type="text/javascript">
 function noBack(){window.history.forward()}
            noBack();
            window.onload=noBack;
            window.onpageshow=function(evt){if(evt.persisted)noBack()}
            window.onunload=function(){void(0)}
            
            function burstCache() {
       if (!navigator.onLine) {
           document.body.innerHTML = 'Loading...';
       }
   }
</script>