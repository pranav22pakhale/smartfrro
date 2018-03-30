<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<form method="POST" action="Profile/insertion_reg.php">
	<fieldset>
                <h2 class="fs-title">Personal Details</h2>
                
  <div class="form-row">



 






    <div class="form-group col-md-6">
      <label for="inputEmail4">Surname</label>
      <input type="text" class="form-control" name="surname" value="<?php echo $_POST["surname"];?>">
	  
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Given name</label>
      <input type="text" class="form-control" name="given_name" value="<?php echo $_POST["given_name"];?>">
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Father's Name</label>
      <input type="text" class="form-control" name="father_name" value="<?php echo $_POST["father_name"];?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Mother's Name</label>
      <input type="text" class="form-control" name="mother_name" value="<?php echo $_POST["mother_name"];?>">
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Spouse</label>
      <input type="text" class="form-control" name="spouse_name" value="<?php echo $_POST["spouse_name"];?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Religion </label>
      <input type="text" class="form-control" name="religion" value="<?php echo $_POST["religion"];?>">
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Purpose</label>
      <input type="text" class="form-control" name="purpose" value="<?php echo $_POST["purpose"];?>">
    </div>
</div>
</fieldset>
<fieldset>
                <h2 class="fs-title">Personal Details 2</h2>
                
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Date of Birth</label>
      
	  <input type="date" class="form-control" name="dob" placeholder="Date of Birth"   value="<?php echo $_POST["dob"];?>"/>
    </div>
	 <div class="form-group col-md-6">
	 </div>
	 </div>
	 <div class="form-row">
       <label >Profile pic</label>	
    <div class="form-group col-md-12">
	   <small class="left" class="form-control" name="pic">
	  
	   <?php $imageData = file_get_contents($_FILES['fileToUpload']['tmp_name']); // path to file like /var/tmp/...
// display in view
echo sprintf('<embed src="data:image/png;base64,%s" height="200px"    ', base64_encode($imageData));

?>
      </small>
	  
    </div>
  </div>
    <div class="form-row">
	 <label > All documents in one pdf</label>
    <div class="form-group col-md-12">
     
      <?php
  
  //var_dump($_FILES);
 
	$pdfData = file_get_contents($_FILES['fileToUpload1']['tmp_name']); // path to file like /var/tmp/...
// display in view
echo sprintf('<embed src="data:application/pdf;base64,%s" width="800px" height="200px" />   ', base64_encode($pdfData));
?>

    </div>
	</div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label >pre_nationality</label>
      <input type="text" name="pre_nationality" class="form-control"   value="<?php echo $_POST["pre_nationality"];?>"/>
    
  </div>
    <div class="form-group col-md-6">
      <label > prev_nationality</label>
      <input type="text" name="prev_nationality" class="form-control"   value="<?php echo $_POST["prev_nationality"];?>"/>
    </div>
    </div>
	<div class="form-row">
    <div class="form-group col-md-6">
      <label >Sex</label>
      <input type="text" name="sex" class="form-control"   value="<?php echo $_POST["sex"];?>"/>
    </div>
	
    <div class="form-group col-md-6">
     <label >Indian Origin</label>
      <input type="text" name="origin" class="form-control"  value="<?php echo $_POST["origin"];?>">
    </div>
  </div>
   
    <div class="form-group col-md-6">
      <label>email id</label>
      <input type="text" name="email_id"  class="form-control"  value="<?php echo $_POST["email_id"];?>">
    </div>
</fieldset>
<fieldset>
<h2 class="fs-title">Address Details</h2>
 <div class="form-row">
 <div class="form-group col-md-6">
      <label >address_outside</label>
      
	  <input type="text" class="form-control" name="address_outside"  value="<?php echo $_POST["address_outside"];?>"/>
    </div>
    <div class="form-group col-md-6">
       <label >city_outside</label>
      <input type="text" class="form-control" name="city_outside" value="<?php echo $_POST["city_outside"];?>"/>
	  
    </div>
  </div>
 <div class="form-row">
 <div class="form-group col-md-6">
      <label >country</label>
      
	  <input type="text" class="form-control" name="country"  value="<?php echo $_POST["country"];?>"/>
    </div>
    <div class="form-group col-md-6">
       <label >address_inside</label>
      <input type="text" class="form-control" name="address_inside" value="<?php echo $_POST["address_inside"];?>"/>
	  
    </div>
  </div>
  <div class="form-row">
 <div class="form-group col-md-6">
      <label >state</label>
      
	  <input type="text" class="form-control" name="state"  value="<?php echo $_POST["state"];?>"/>
    </div>
    <div class="form-group col-md-6">
       <label >city</label>
      <input type="text" class="form-control" name="city" value="<?php echo $_POST["city"];?>"/>
	  
    </div>
  </div>
    <div class="form-row">
 <div class="form-group col-md-6">
      <label >pincode</label>
      
	  <input type="text" class="form-control" name="pincode"  value="<?php echo $_POST["pincode"];?>"/>
    </div>
    <div class="form-group col-md-6">
       <label >phone</label>
      <input type="text" class="form-control" name="phone" value="<?php echo $_POST["phone"];?>"/>
	  
    </div>
  </div>
<fieldset>
                <h2 class="fs-title">Passport Details</h2>
                
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Passport No.</label>
      
	  <input type="date" class="form-control" name="passport_no" placeholder="Date of Birth"   value="<?php echo $_POST["passport_no"];?>"/>
    </div>
    <div class="form-group col-md-6">
       <label >Country of Issue</label>
      <input type="text" class="form-control" name="country_of_issue" value="<?php echo $_POST["country_of_issue"];?>"/>
	  
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label >place_of_issue</label>
      <input type="text" class="form-control" name="place_of_issue" id="fileToUpload" value="<?php echo $_POST["place_of_issue"];?>">
    </div>
    <div class="form-group col-md-6">
      <label >date_of_issue</label>
      <input type="text" name="date_of_issue" class="form-control"   value="<?php echo $_POST["date_of_issue"];?>"/>
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label > expiry date</label>
      <input type="text" name="pexpiry_date" class="form-control"   value="<?php echo $_POST["pexpiry_date"];?>"/>
    </div>
</fieldset>
<fieldset>
<h2 class="fs-title">Visa Details</h2>
<div class="form-row">
	<div class="form-group col-md-6">
       <label >visa number</label>
      <input type="text" class="form-control" name="visa_number" value="<?php echo $_POST["visa_number"];?>"/>
	  
    </div>
	<div class="form-group col-md-6">
       <label >country of issue</label>
      <input type="text" class="form-control" name="vcountry_of_issue" value="<?php echo $_POST["vcountry_of_issue"];?>"/>
	  
    </div>
</div>
<div class="form-row">
	<div class="form-group col-md-6">
       <label >place of isssue</label>
      <input type="text" class="form-control" name="vplace_of_isssue" value="<?php echo $_POST["vplace_of_isssue"];?>"/>
	  
    </div>
	<div class="form-group col-md-6">
       <label >date of issue</label>
      <input type="text" class="form-control" name="vdate_of_issue" value="<?php echo $_POST["vdate_of_issue"];?>"/>
	  
    </div>
</div>
<div class="form-row">
	<div class="form-group col-md-6">
       <label >expiry date</label>
      <input type="text" class="form-control" name="vexpiry_date" value="<?php echo $_POST["vexpiry_date"];?>"/>
	  
    </div>
	<div class="form-group col-md-6">
       <label >visa type</label>
      <input type="text" class="form-control" name="visa_type" value="<?php echo $_POST["visa_type"];?>"/>
	  
    </div>
</div>
<div class="form-row">
	<div class="form-group col-md-6">
       <label >visa subtype</label>
      <input type="text" class="form-control" name="vsub" value="<?php echo $_POST["vsub"];?>"/>
	  
  

</div>
</fieldset>
 <center> <button type="submit" class="btn btn-primary" onclick="window.top.close();">Edit</button>  
 

<?php
$filename = '';
if(isset($_FILES['fileToUpload']['tmp_name']) && file_exists($_FILES['fileToUpload']['tmp_name'])){
	$filename = "Profile/uploads/".time().$_FILES['fileToUpload']['name'];
move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $filename);
$filename = "uploads/".time().$_FILES['fileToUpload']['name'];
}
$filename1 = '';
if(isset($_FILES['fileToUpload']['tmp_name']) && file_exists($_FILES['fileToUpload1']['tmp_name'])){
	$filename1 = "Profile/uploads1/".time().$_FILES['fileToUpload1']['name'];
move_uploaded_file($_FILES['fileToUpload1']['tmp_name'], $filename1);

	$filename1 = "uploads1/".time().$_FILES['fileToUpload1']['name'];
}


?> 

<input type="hidden" name="f1" value="<?php echo $filename;?>"/>
<input type="hidden" name="f2" value="<?php echo $filename1;?>"/> 
 
 
 <button type="submit" class="btn btn-primary">Submit</button>  </center>
 
</div>
 </div>
</form>
</div>

</body>
</html>






























