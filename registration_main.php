<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Participant Registration</title>
<!--<link href="style/style_registration.css" rel="stylesheet" type="text/css" media="all" />-->
<script type="text/javascript" src="js/jquery-1.9.1.js"> </script>
<script type="text/javascript" src="js/script_registration.js"></script>
</head>

	<script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/script.responsive.js"></script>
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/jquery.ui.core.js"></script>
	<script src="js/jquery.ui.widget.js"></script>
	<script src="js/jquery.ui.accordion.js"></script>
	<script src="js/jquery.ui.effect.js"></script>
	<script src="js/jquery.ui.tooltip.js"></script>
	<script src="js/jquery.ui.effect-explode.js"></script>
	<script src="js/jquery.ui.position.js"></script>
	
	<script>

$(document).ready(function(){
	//$( "#radio" ).buttonset();
	
	$flag = $("form#register_form input[name='flag']").val();
	
	if ($flag == null) {
		$("#regMain").hide();
		$("#howTo").show();	
	} else {
		$("#regMain").show();
		$("#howTo").hide();
		}
	
	$("#btnAgree").prop('disabled',true);
	$("#submit").removeAttr('disabled');
	$("#trnImage").hide();

	
	$("#agree").click(function(){
		$('#btnAgree').attr('disabled',!this.checked);
	});
	
	$("#btnAgree").click(function(){
		$("#regMain").show();
		$("#howTo").hide();
	  });

	$("body").on({
	    ajaxStart: function() { 
	        $(this).addClass("loading"); 
	    },
	    ajaxStop: function() { 
	        $(this).removeClass("loading"); 
	    }    
	});

	$("#submit").click(function(){
//		$("#submit").prop('disabled',true);
	  });



	$( document ).tooltip({
		items: "img, [data-geo], [title]",
		content: function() {
			var element = $( this );
			if ( element.is( "[data-geo]" ) ) {
				var text = element.text();
				return "<img class='trnImage' alt='" + text +
					"' src='images/transactioncd.jpg?" +"'>";
			}
			if ( element.is( "[title]" ) ) {
				return element.attr( "title" );
			}
			if ( element.is( "img" ) ) {
				return element.attr( "alt" );
			}
		}
	});

	  
});

</script>
<style>
li {
	margin-left:20px;
}

.trnImage {
	position: relative;
   left: 50%;
}

#trnImage {
	
}

</style>

<body>

	<div id="wrap"> <!--wrap start-->
    	<div id="wrap2">  <!--wrap2 start-->

       	

    	<form action="process_registration.php" method="post" id="register_form" enctype="multipart/form-data">
		<div id="trnImage">
        <img src="./images/transactioncd.jpg">
        </div>
        <!--<p class="validate_msg">Please input mandatory fields!</p>-->
		<?php
			if(isset($_GET['result'])) {
				if($_GET['result']==1) { 
				   	echo '<input type=hidden name=flag value=1/>';
					echo '<p class="w3-panel w3-red">Transaction Code already Exist!</p>';
				} else if ($_GET['result']==0) {
					echo '<input type=hidden name=flag value=0/>';
					echo '<p class="w3-panel w3-green">Registration Successful!</p>';
				}
			}
		?>
		<div id="howTo">
			
			<h1>8th PROCON 2019</h1>
			<br/>
			<h2>How to register</h2>
			<br/>
			<p><b>Step 1:</b> Deposit at any BDO Branch Account Name: Patrick Joseph K. Dondonilla and Richard S. Punongbayan <b>Account No. 010240082176</b> Note: Strictly 1 Delegate 1 Deposit Slip</p>
			
			<br/>
			<p><b>Step 2: </b> Register online on the link below (<a href="www.procon2019.com">www.procon2019.com</a>)</p>
			<p>Click on registration tab.</p>
			<br/>
			<p><b>Step 3: </b> Fill up the registration form. </p>
			<p><i><b>Note:</b> Please provide all the information required.</i></p>
			<p><li>Valid email</li></p>
			<p><li>Payment Transaction Code (remove space)<a href="" data-geo>Sample</a></li></p>
			<br/>
			<p><b>Step 4: </b>Wait for email confirmation within 3 working days.</p>
			<br/>
			<p><b>Step 5: </b>Print the email confirmation and bring it with you on the event.</p>
			<br/>
			
			
				
			<input type="checkbox" id="agree"><i>I understood the steps above.</i></input><br/>
			<input type="button" id="btnAgree" value="Submit"/>
		</div>
		<div id="regMain">
		<h2 class="free_account">Participant Registration</h2>
		<p> <label for="firstname">First Name</label> <input name="firstname" type="text" /> <span class="val_firstname"></span> </p>
		<p> <label for="middlename">Middle Name</label> <input name="middlename" type="text" /> <span class="val_middlename"></span> </p>
		<p> <label for="lastname">Last Name</label> <input name="lastname" type="text" /> <span class="val_lastname"></span> </p>
		<p> <label for="badgename">Badge Name</label> <input name="badgename" type="text" /> <span class="val_badgename"></span> </p>
		<p> <label for="birthday">Birth Date</label>
                            	<select name="month">
                    				<option value="">Month</option>
                                    <?php
										$months = array('1' => 'Jan', '2' => 'Feb', '3' => 'Mar', '4' => 'Apr', '5' => 'May', '6' => 'June', '7' => 'July ', '8' => 'Aug', '9' => 'Sept', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec');
										foreach($months as $m => $month) {
									?>
                                    <option value="<?php echo $m; ?>"><?php echo $month; ?></option>
                                    <?php } ?>
                                </select>
                                <select name="day">
                    				<option value="">Day</option>
                                    <?php for($day = 1; $day < 32; $day++) { ?>
                                    <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
                                    <?php } ?>
                                </select>
                                <select name="year">
                    				<option value="">Year</option>
                                    <?php
										$year = date("Y");
										for($j = $year; $j > 1949; $j--) {
									?>
                                    <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
                                    <?php } ?>
                                </select>
                <span class="val_birthday"></span> </p>
		<p> <label for="positionheld">Position Currently Held</label> <input name="positionheld" type="text" /> <span class="val_positionheld"></span> </p>
		<p> <label for="gender">Gender</label>  
			<input name="gender" type="radio" value="m" /> Male 
			<input name="gender" type="radio" value="f" /> Female 
			<span class="val_gender"></span> </p>		
		<p> <label for="homeaddres">Complete Home Address</label> <input name="homeaddres" type="text" /> <span class="val_homeaddres"></span> </p>
		<p> <label for="corpaddress">Complete Office Address</label> <input name="corpaddress" type="text" /> <span class="val_corpaddress"></span> </p>
		<p> <label for="country">Country</label> <input name="country" type="text" /> <span class="val_country"></span> </p>
		<p> <label for="email">E-Mail</label> <input name="email" type="text" /> <span class="val_email"></span> </p>
		<p> <label for="mobileno">Mobile No.</label> <input name="mobileno" type="text" /> <span class="val_mobileno"></span> </p>
		<p> <label for="phoneno">Phone No.</label> <input name="phoneno" type="text" /> <span class="val_phoneno"></span> </p>
		
		<h2 class="free_account">Club Information</h2>
		<p> <label for="type">Type</label>
			<input name="type" type="radio" value="ROTARIAN" /> ROTARIAN 
			<input name="type" type="radio" value="ROTARACT" /> ROTARACT 
			<input name="type" type="radio" value="INTERACT" /> INTERACT 
			<input name="type" type="radio" value="ROTEX" /> ROTEX 
			<input name="type" type="radio" value="GUEST" /> GUEST
			<span class="val_type"></span> </p>
		<p> <label for="district">District</label> 
			<select name="district">
             <option value="3770">3770</option>
             <option value="3780">3780</option>
             <option value="3790">3790</option>
             <option value="3800">3800</option>
             <option value="3810">3810</option>
             <option value="3820">3820</option>	
             <option value="3830">3830</option>
             <option value="3850">3850</option>
             <option value="3860">3860</option>	
             <option value="3870">3870</option>								
             <option value="OTHERS">OTHERS</option>
             </select> 
			<span class="val_district"></span> </p>
		<p> <label for="clubname">Club Name</label> <input name="clubname" type="text" /> <span class="val_clubname"></span> </p>
		<p> <label for="sponsorclub">Sponsoring Club</label> <input name="sponsorclub" type="text" /> <span class="val_sponsorclub"></span> </p>
		
		<h2 class="free_account">Medical History</h2>
		<p> <label for="allergies">Allergies</label> <input name="allergies" type="text" /> <span class="val_allergies"></span> </p>
		<p> <label for="diet">Diet</label> <input name="diet" type="text" /> <span class="val_diet"></span> </p>
		<p> <label for="medicalcond">Medical Condition</label> <input name="medicalcond" type="text" /> <span class="val_medicalcond"></span> </p>
		<p> <label for="specialreq">Special Requirements</label> <input name="specialreq" type="text" /> <span class="val_specialreq"></span> </p>
		<p> <label for="others">Others</label> <input name="others" type="text" /> <span class="val_others"></span> </p>
		<p> <label for="foodtype">Food (HALAL?)</label> <input name="foodtype" type="radio" value="YES" /> YES <input name="foodtype" type="radio" value="NO" /> NO <span class="val_foodtype"></span> </p>
		
		<h2 class="free_account">Emergency Contact Information</h2>
		<p> <label for="cont_name">Name</label> <input name="cont_name" type="text" /> <span class="val_cont_name"></span> </p>
		<p> <label for="cont_rela">Relation</label> <input name="cont_rela" type="text" /> <span class="val_cont_rela"></span> </p>
		<p> <label for="cont_email">E-Mail</label> <input name="cont_email" type="text" /> <span class="val_cont_email"></span> </p>
		<p> <label for="cont_no">Contact No.</label> <input name="cont_no" type="text" /> <span class="val_cont_no"></span> </p>
		<p> <label for="tshirt">T-Shirt</label>
			<input name="tshirt" type="radio" value="XS" /> XS
			<input name="tshirt" type="radio" value="S" /> S 
			<input name="tshirt" type="radio" value="M" /> M 
			<input name="tshirt" type="radio" value="L" /> L 
			<input name="tshirt" type="radio" value="XL" /> XL
			<input name="tshirt" type="radio" value="XXL" /> XXL
			<input name="tshirt" type="radio" value="XXXL" /> XXXL
			<span class="val_tshirt"></span> </p>
			
		<h2 class="free_account">Payment Information</h2>
		<p> <label for="trnslip">Payment Slip</label> <input type='file' name='file' /> <span class="val_branch"></span> </p>
		<p> <label for="branch">BDO Branch</label> <input name="branch" type="text" /> <span class="val_branch"></span> </p>
		<p> <label for="trncd">Transaction Code</label> <input name="trncd" type="text" /> <span class="val_trncd"></span> </p>
		<p> <label for="trnamt">Transaction Amount</label> <input name="trnamt" type="text" /> <span class="val_trnamt"></span> </p>
		<p> <label for="trndate">Transaction Date</label>
                            	<select name="tmonth">
                    				<option value="">Month</option>
                                    <?php
										$months = array('1' => 'Jan', '2' => 'Feb', '3' => 'Mar', '4' => 'Apr', '5' => 'May', '6' => 'June', '7' => 'July ', '8' => 'Aug', '9' => 'Sept', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec');
										foreach($months as $m => $month) {
									?>
                                    <option value="<?php echo $m; ?>"><?php echo $month; ?></option>
                                    <?php } ?>
                                </select>
                                <select name="tday">
                    				<option value="">Day</option>
                                    <?php for($day = 1; $day < 32; $day++) { ?>
                                    <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
                                    <?php } ?>
                                </select>
                                <select name="tyear">
                    				<option value="">Year</option>
                                    <?php
										$year = date("Y");
										for($j = $year; $j > 1949; $j--) {
									?>
                                    <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
                                    <?php } ?>
                                </select>
                <span class="val_trndate"></span> </p>
				
			
            <input class="w3-button w3-block w3-green w3-xlarge" type="submit" id="submit" name="register" value="Register">
        </div>
        </form>


        </div>  <!--wrap2 end-->
    </div>  <!--wrap start-->
<div class="modal"><!-- Place at bottom of page --></div>

</body>
</html>
