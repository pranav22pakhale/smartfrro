<?php
	require_once 'database_connection.php';

	if(isset($_POST['surname']))
	{
		$surname=$_POST['surname'];
	}
echo $surname;
	if(isset($_POST['given_name']))
	{
		$given_name=$_POST['given_name'];
	}

	if(isset($_POST['sex']))
	{
		$sex=$_POST['sex'];
	}
if(isset($_POST['father_name']))
	{
		$father_name=$_POST['father_name'];
	}
if(isset($_POST['mother_name']))
	{
		$mother_name=$_POST['mother_name'];
	}
if(isset($_POST['spouse_name']))
	{
		$spouse_name=$_POST['spouse_name'];
	}
if(isset($_POST['dob']))
	{
		$dob=$_POST['dob'];
	}
	
if(isset($_POST['place_of_birth']))
	{
		$place_of_birth=$_POST['place_of_birth'];
	}
	if(isset($_POST['birth_city']))
	{
		$birth_city=$_POST['birth_city'];
	}
if(isset($_POST['birth_country']))
	{
		$birth_country=$_POST['birth_country'];
	}

	if(isset($_POST['height_cm']))
	{
		$height_cm=$_POST['height_cm'];
	}

	if(isset($_POST['religion']))
	{
		$religion=$_POST['religion'];
	}

	if(isset($_POST['identification_mark']))
	{
		$identification_mark=$_POST['identification_mark'];
	}

	if(isset($_POST['present_nationality']))
	{
		$present_nationality=$_POST['present_nationality'];
	}

	if(isset($_POST['previous_nationality']))
	{
		$previous_nationality=$_POST['previous_nationality'];
	}

	if(isset($_POST['manner_of_acquiring']))
	{
		$manner_of_acquiring=$_POST['manner_of_acquiring'];
	}

	if(isset($_POST['dual_nationality']))
	{
		$dual_nationality=$_POST['dual_nationality'];
	}

	if(isset($_POST['indian_origin']))
	{
		$indian_origin=$_POST['indian_origin'];
	}

	if(isset($_POST['defence_force']))
	{
		$defence_force=$_POST['defence_force'];
	}
	/*if(isset($_POST[""])) {
	$target_dir = "pdfuploads/";
	$t=time();
	$target_file = $target_dir .$t. basename($_FILES["fileToUpload"]["name"]);
	//echo $target_file;
	$uploadOk = 1;
	$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image

	   

	    // Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($FileType != "pdf" ){
	    echo "Sorry, only pdf files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        //echo "<br>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded successfully.";
	    } else {
	        //echo "Sorry, there was an error uploading your file.";
	    }
	}
	}*/


	$sql="insert into registration(`id`, `surname`, `given_name`, `sex`, `father_name`, `mother_name`, `spouse_name`, `dob`, `place_of_birth`, `birth_city`, `birth_country`, `height_cm`, `religion`, `identification_mark`, `present_nationality`, `previous_nationality`, `manner_of_acquiring present nationality`, `dual_nationality`, `indian_origin`, `have_you_serve_in_defenece_force`, `profile_pic`, `document`,'email_id')values('','$surname','$given_name','$sex','$father_name','$mother_name','$spouse_name','$dob','$place_of_birth','$birth_city','$birth_country',$height_cm,'$religion','$identification_mark','$present_nationality','$previous_nationality','$manner_of_acquiring',1,1,1,1,1,'abc')";
		mysqli_query($con,$sql);
		echo 'ghost';
		
?>