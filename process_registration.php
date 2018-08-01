<?php
include 'db_connect.php';
include 'functions.php';

if(array_key_exists('register', $_POST)) {
		
	$firstname		= trim($_POST['firstname']);
	$middlename		= trim($_POST['middlename']);
	$lastname		= trim($_POST['lastname']);
	$badgename		= trim($_POST['badgename']);
	$birthday		= $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
	$positionheld	= trim($_POST['positionheld']);
	$gender			= trim($_POST['gender']);
	$homeaddres		= trim($_POST['homeaddres']);
	$corpaddress	= trim($_POST['corpaddress']);
	$country		= trim($_POST['country']);
	$email			= trim($_POST['email']);
	$mobileno		= trim($_POST['mobileno']);
	$phoneno		= trim($_POST['phoneno']);
	$type			= trim($_POST['type']);
	$district		= trim($_POST['district']);
	$clubname		= trim($_POST['clubname']);
	$sponsorclub	= trim($_POST['sponsorclub']);
	$allergies		= trim($_POST['allergies']);
	$diet			= trim($_POST['diet']);
	$medicalcond	= trim($_POST['medicalcond']);
	$specialreq		= trim($_POST['specialreq']);
	$others			= trim($_POST['others']);
	$foodtype		= trim($_POST['foodtype']);
	$cont_name		= trim($_POST['cont_name']);
	$cont_rela		= trim($_POST['cont_rela']);
	$cont_email		= trim($_POST['cont_email']);
	$cont_no		= trim($_POST['cont_no']);
	$tshirt			= trim($_POST['tshirt']);
	$branch			= trim($_POST['branch']);
	$trncd			= trim($_POST['trncd']);
	$trnamt			= trim($_POST['trnamt']);
	$trndate		= $_POST['tyear'].'-'.$_POST['tmonth'].'-'.$_POST['tday'];
	
	//field registration
	$ret=register($firstname,$middlename,$lastname,$badgename,$birthday,$positionheld,$gender,$homeaddres,$corpaddress,$country,$email,$mobileno,$phoneno,$type,$district,
	$clubname,$sponsorclub,$allergies,$diet,$medicalcond,$specialreq,$others,$foodtype,$cont_name,$cont_rela,$cont_email,$cont_no,$tshirt,$branch,$trncd,$trnamt,$trndate,$mysqli);
	
	//file upload
	if(isset($_POST['register'])){
 
		$name = $_FILES['file']['name'];
		$target_dir = "upload/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);

		// Select file type
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Valid file extensions
		$extensions_arr = array("jpg","jpeg","png");

		// Check extension
		if( in_array($imageFileType,$extensions_arr) ){
		
			// Convert to base64 
			$image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );

			$image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
			// Insert record
			$query = "insert into images(trncd,image) values('".$trncd."','".$image."')";
			mysqli_query($mysqli,$query);
			
			// Upload file
			move_uploaded_file($_FILES["file"]["tmp_name"],$target_file);

			if (!isset($image_base64)) {
				$query1 = "update images set image='".$target_file."' where trncd='".$trncd."'";
				mysqli_query($mysqli,$query1);
			}
			
		
	   }
	}

	if($ret == true) {
		header('Location: ./main.php?result=0#registration');
	} else {
		header('Location: ./main.php?result=1#registration');
	}
} else {
	header('Location: ./registration.php');
}

?>