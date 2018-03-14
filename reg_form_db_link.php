<?php
	
	define('mysql_host','localhost');
define('mysql_user','root');
define('mysql_pwd','');
//$db= new mysqli('localhost','root','','frro') or die("problem");
$con = mysqli_connect(mysql_host,mysql_user,mysql_pwd) or die('Can not connect to database..try again');
mysqli_select_db($con,'frro') or die(mysqli_error($con));

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
	echo $dob;
if(isset($_POST['place_of_birth']))
	{
		$place_of_birth=$_POST['place_of_birth'];
	}
	echo "place_of_birth";
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
	


	$sql="insert into registration(`id`, `surname`, `given_name`, `sex`, `father_name`, `mother_name`, `spouse_name`, `dob`, `place_of_birth`, `birth_city`, `birth_country`, `height_cm`, `religion`, `identification_mark`, `present_nationality`, `previous_nationality`, `manner_of_acquiring present nationality`, `dual_nationality`, `indian_origin`, `have_you_serve_in_defenece_force`, `profile_pic`, `document`)values('','$surname','$given_name','$sex','$father_name','$mother_name','$spouse_name','$dob','$place_of_birth','$birth_city','$birth_country',$height_cm,'$religion','$identification_mark','$present_nationality','$previous_nationality','$manner_of_acquiring',1,1,1,1,1)";
		mysqli_query($con,$sql);
		//mysqli_query($con,'INSERT INTO testtable (1,1)');
	//$db->query("INSERT INTO testtable values('".$surname."',' ')");
	//$db->query("INSEResT INTO registration VALUES(,'".$surname."','".$given_name."','".$sex."','".$father_name."','".$mother_name."','".$spouse_name."','".$dob."','".$place_of_birth."','".$birth_city."','".$birth_country."',".$height_cm.",'".$religion."','".$identification_mark."','".$present_nationality."','".$previous_nationality."','".$manner_of_acquiring."',".$dual_nationality.",".$indian_origin.",".$defence_force.",'xyz','xyz')");
?>