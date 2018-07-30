<?php include 'session_login.php';?>
<?php include 'nav_links.php';?>
<br/>
<br/>

<?php
$transactioncd = $_GET['transactioncd'];
	if ($stmt = $mysqli->prepare("SELECT image FROM images where trncd=? LIMIT 1")) {
		$stmt->bind_param('s', $transactioncd); // Bind "$user_id" to parameter.
		$stmt->execute(); // Execute the prepared query.
		$stmt->store_result();
		$stmt->bind_result($image);
	}

	if($stmt->num_rows == 1) {
		$stmt->fetch();
		echo $image_src;

		$image_src = $image;
	}
	
	//$sql = "select image from images where id='$transactioncd'";
	//$result = mysqli_query($mysqli,$sql);
	//$row = mysqli_fetch_array($result);

	//$image_src = $row['image'];

?>
<?php

$transactioncd = $_GET['transactioncd'];

if ($stmt = $mysqli->prepare("SELECT `firstname`,`middlename`,`lastname`,`badgename`,`birthday`,`positionheld`,`gender`,`homeaddres`,`corpaddress`,`country`,`email`,`mobileno`,`phoneno`,`type`,`district`,`clubname`,`sponsorclub`,`allergies`,`diet`,`medicalcond`,`specialreq`,`others`,`foodtype`,`cont_name`,`cont_rela`,`cont_email`,`cont_no`,`tshirt`,`trncd`,`trnamt`,`trndate` FROM registration WHERE trncd = ? LIMIT 1")) { 
        $stmt->bind_param('s', $transactioncd); // Bind "$user_id" to parameter.
        $stmt->execute(); // Execute the prepared query.
        $stmt->store_result();
 		$stmt->bind_result($firstname,$middlename,$lastname,$badgename,$birthday,$positionheld,$gender,$homeaddres,$corpaddress,$country,$email,$mobileno,$phoneno,$type,$district,
$clubname,$sponsorclub,$allergies,$diet,$medicalcond,$specialreq,$others,$foodtype,$cont_name,$cont_rela,$cont_email,$cont_no,$tshirt,$trncd,$trnamt,$trndate);
        if($stmt->num_rows == 1) { // If the transaction already exist
              
        	$stmt->fetch();	
        	echo "<table border=1>";
        	echo "<tr>";
        		echo "<td colspan=6> PARTICIPANT'S INFORMATION </td>";
        	echo "</tr>";
        	echo "<tr>";
        		echo "<td colspan=1> NAME </td>";
				echo "<td colspan=4> $firstname $middlename $lastname </td>";
				echo "<th rowspan=17> <img src='$image_src' > </th>";
        	echo "</tr>";
        	echo "<tr>";
        		echo "<td colspan=1> BADGE NAME </td>";
				echo "<td colspan=4> $badgename </td>";
        	echo "</tr>";
        	echo "<tr>";
        		echo "<td colspan=1> BIRTH DAY </td>";
        		echo "<td colspan=4> $birthday </td>";
        	echo "</tr>";   
          	echo "<tr>";
        		echo "<td colspan=1> POSITION CURRENTLY HELD </td>";
        		echo "<td colspan=4> $positionheld </td>";
        	echo "</tr>";
        	echo "<tr>";
        	echo "<td colspan=1> GENDER </td>";
        		echo "<td colspan=4> $gender </td>";
        	echo "</tr>";
        	echo "<tr>";
        		echo "<td colspan=1> HOME ADDRESS </td>";
        		echo "<td colspan=4> $homeaddres </td>";
        	echo "</tr>";   
			echo "<tr>";
        		echo "<td colspan=1> E-MAIL </td>";
        		echo "<td colspan=4> $email </td>";
        	echo "</tr>";
        	echo "<tr>";
        		echo "<td colspan=1> MOBILE NO </td>";
        		echo "<td colspan=4> $mobileno </td>";
        	echo "</tr>";
        	echo "<tr>";
        		echo "<td colspan=1> PHONE NO </td>";
        		echo "<td colspan=4> $phoneno </td>";
        	echo "</tr>";
        	echo "<tr>";
        		echo "<td colspan=1> TYPE </td>";
        		echo "<td colspan=4> $type </td>";
        	echo "</tr>";
        	echo "<tr>";
        		echo "<td colspan=1> DISTRICT </td>";
        		echo "<td colspan=4> $district </td>";
        	echo "</tr>";
        	echo "<tr>";
        		echo "<td colspan=1> CLUB NAME </td>";
        		echo "<td colspan=4> $clubname </td>";
        	echo "</tr>";
        	echo "<tr>";
        		echo "<td colspan=1> SPONSOR CLUB </td>";
        		echo "<td colspan=4> $sponsorclub, </td>";
        	echo "</tr>";
			echo "<tr>";
        		echo "<td colspan=5> PAYMENT INFORMATION </td>";
        	echo "</tr>";
        	echo "<tr>";
        		echo "<td colspan=1> TRANSACTION CODE </td>";
        		echo "<td colspan=4> $trncd </td>";
        	echo "</tr>";
        	echo "<tr>";
        		echo "<td colspan=1> AMOUNT </td>";
        		echo "<td colspan=4> $trnamt </td>";
        	echo "</tr>";
        	echo "<tr>";
        		echo "<td colspan=1> DATE </td>";
        		echo "<td colspan=4> $trndate </td>";
        	echo "</tr>";
        	echo "</table>";
        	

           } else {
              echo "ERROR: Cannot find selected transaction in the database!";
           }
        } else {
            // Not logged in
            echo "ERROR: Cannot find selected transaction in the database!";
        }

?>

<link href="style/style_registration.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.9.1.js"> </script>
<script type="text/javascript" src="js/script_registration.js"></script>
<style type="text/css">
.button {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
	background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
	background-color:#ededed;
	-webkit-border-top-left-radius:6px;
	-moz-border-radius-topleft:6px;
	border-top-left-radius:6px;
	-webkit-border-top-right-radius:6px;
	-moz-border-radius-topright:6px;
	border-top-right-radius:6px;
	-webkit-border-bottom-right-radius:6px;
	-moz-border-radius-bottomright:6px;
	border-bottom-right-radius:6px;
	-webkit-border-bottom-left-radius:6px;
	-moz-border-radius-bottomleft:6px;
	border-bottom-left-radius:6px;
	text-indent:0;
	border:1px solid #dcdcdc;
	display:inline-block;
	color:#777777;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:50px;
	line-height:50px;
	width:100px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #ffffff;
}
.button:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
	background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
	background-color:#dfdfdf;
}.button:active {
	position:relative;
	top:1px;
}</style>

<form action="reg_assess_process.php" method="post" id="assess_form">
   <p>Approved <input type="radio" value="APPROVED" name="assessment" />
   Declined <input type="radio" value="DECLINED" name="assessment"/>
   <span class="val_assessment"></span></p>
   <p>Comment <input type="text" size="100" name="comment" id="comment"/>
   <span class="val_comment"></span></p>
   <p>Batch Category
	<select name="batch" id="batch">
				<option value=""></option>
				<option value="BATCH1">BATCH1</option>
				<option value="BATCH2">BATCH2</option>
				<option value="BATCH3">BATCH3</option>
				<option value="INTL">INTL-DELIGATE</option>
				<option value="REGULAR">REGULAR</option>
				<option value="ROTARIAN">ROTARIAN</option>
		</select>
	</p>
	<span class="val_batch"></span></p>

   <input type="hidden" name="transactioncd" value="<?php echo $transactioncd?>"/>
   <input type="hidden" name="email" value="<?php echo $email?>"/>
   <input type="hidden" name="batch"/>
   <input type="hidden" name="badgename" value="<?php echo $badgename?>"/>
   <input class="button" name="submit" type="submit" value="save"  />
</form>