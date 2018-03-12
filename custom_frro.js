$(document).ready(function(){
  
  $("#submit").click(function(){
    
    
    if($('#inputID').val()=='')
         {
         alert("Id must not be blank.");
           $('#inputID').focus();
           return false;        
        }
    
    else if($('#inputPassword').val()=='')
    {
      alert("Password must not be blank.")
      $('#inputPassword').focus();
      return false;
    }
    });       
  
});
    