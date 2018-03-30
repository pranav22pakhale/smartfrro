<?php

	session_start();

	require_once 'database_connection.php';
	if(isset($_POST['surname']))
	{
		$surname=$_POST['surname'];
	}
	if(isset($_POST['given_name']))
	{
		$given_name=$_POST['given_name'];
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
	if(isset($_POST['religion']))
	{
		$religion=$_POST['religion'];
	}
	if(isset($_POST['purpose']))
	{
		$purpose=$_POST['purpose'];
	}
	if(isset($_POST['dob']))
	{
		$dob=$_POST['dob'];
	}
	if(isset($_POST['pre_nationality']))
	{
		$pre_nationality=$_POST['pre_nationality'];
	}

	if($_POST['prev_nationality'])
	{
		$prev_nationality= $_POST['prev_nationality'];
	}
	if($_POST['sex'])
	{
		$sex= $_POST['sex'];
	}
	if(isset($_POST['origin']))
	{
		$origin=$_POST['origin'];
	}
	/*if(isset($_POST['purpose']))
	{
		$passportnumber=$_POST['purpose'];
	}*/

	if(isset($_POST['email_id']))
	{
		$email_id=$_POST['email_id'];
	}
	if(isset($_POST['address_outside']))
	{
		$address_outside=$_POST['address_outside'];
	}
	if(isset($_POST['city_outside']))
	{
		$city_outside=$_POST['city_outside'];
	}
	if(isset($_POST['country']))
	{
		$country=$_POST['country'];
	}
	if(isset($_POST['address_inside']))
	{
		$address_inside=$_POST['address_inside'];
	}
	if(isset($_POST['state']))
	{
		$state=$_POST['state'];
	}
	if(isset($_POST['city']))
	{
		$city=$_POST['city'];
	}
	if(isset($_POST['pincode']))
	{
		$pincode=$_POST['pincode'];
	}
	if(isset($_POST['phone']))
	{
		$phone=$_POST['phone'];
	}
	if(isset($_POST['passport_no']))
	{
		$passport_no=$_POST['passport_no'];
	}
	if(isset($_POST['country_of_issue']))
	{
		$country_of_issue=$_POST['country_of_issue'];
	}
	if(isset($_POST['place_of_issue']))
	{
		$place_of_issue=$_POST['place_of_issue'];
	}
	if(isset($_POST['date_of_issue']))
	{
	
		$date_of_issue=$_POST['date_of_issue'];
	}
	if(isset($_POST['pexpiry_date']))
	{
		$pexpiry_date=$_POST['pexpiry_date'];
	}
	if(isset($_POST['visa_number']))
	{
		$visa_number=$_POST['visa_number'];
	}
	if(isset($_POST['vcountry_of_issue']))
	{
		$vcountry_of_issue=$_POST['vcountry_of_issue'];
	}
	if(isset($_POST['vplace_of_isssue']))
	{
		$vplace_of_issue=$_POST['vplace_of_isssue'];
	}
	if(isset($_POST['vdate_of_issue']))
	{
		$vdate_of_issue=$_POST['vdate_of_issue'];
	}
	if(isset($_POST['vexpiry_date']))
	{
		$vexpiry_date=$_POST['vexpiry_date'];
	}
	if(isset($_POST['visa_type']))
	{
		$visa_type=$_POST['visa_type'];
	}
	if(isset($_POST['vsub']))
	{
		$vsub=$_POST['vsub'];
	}

$target_file = $_POST['f1'];
$target_file1 = $_POST['f2'];

    $sql = "insert into registration (surname,given_name,sex,father_name,mother_name,spouse_name,dob,religion,purpose,present_nationality,previous_nationality,indian_origin,profile_pic,document,email_id,verification) values ('$surname','$given_name','$sex','$father_name','$mother_name','$spouse_name','$dob','$religion','$purpose','$pre_nationality','$prev_nationality','$origin','$target_file','$target_file1','$email_id','unverified')";


    $result = mysqli_query($con,$sql);


    $sql = "insert into address_details (address_out_side_india,city_out_side_india,country,address_in_india,state_in_india,city,pin_code_in_india,phone_number_in_india,email_id) values ('$address_outside','$city_outside','$country','$address_inside','$state','$city','$pincode','$phone','$email_id')";

    $result = mysqli_query($con,$sql);

    $sql = "insert into passport_details (passport_number,country_of_issue,place_of_issue,date_of_issue,expiry_date,email_id) values ('$passport_no','$country_of_issue','$place_of_issue','$date_of_issue','$pexpiry_date','$email_id')";

    $result =mysqli_query($con,$sql);

    $sql = "insert into visa_details (visa_number,country_of_issue,place_of_issue,date_of_issue,expiry_date,visa_type,visa_subtype,email_id) values ('$visa_number','$vcountry_of_issue','$vplace_of_issue','$vdate_of_issue','$vexpiry_date','$visa_type','$vsub','$email_id')";

    $result = mysqli_query($con,$sql);

  	//header("Location:thankyou.php");

	$pur=$_POST["purpose"];
	if($pur=="education")
	{header("Location:../education.php");}
	if($pur=="journalism")
		{header("Location:../journalism.php ");}
	if($pur=="medical")
		{header("Location: ../medical_dept.php");}
	if($pur=="other")
		{header("Location:../others_dept.php");}
?>