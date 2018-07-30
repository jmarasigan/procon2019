<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Participant Registration</title>
<!--<link href="style/style_registration.css" rel="stylesheet" type="text/css" media="all" />-->
<script type="text/javascript" src="js/jquery-1.9.1.js"> </script>
<!--<script type="text/javascript" src="js/script_registration.js"></script>-->
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
		
			var validation_holder = 0;
				
			var firstname		= $("form#register_form input[name='firstname']").val();
			var middlename		= $("form#register_form input[name='middlename']").val();
			var lastname		= $("form#register_form input[name='lastname']").val();
			var badgename		= $("form#register_form input[name='badgename']").val();
			var month 			= $("form#register_form select[name='month']").val(); // month
			var day 			= $("form#register_form select[name='day']").val(); // day
			var year 			= $("form#register_form select[name='year']").val(); // year
			var positionheld	= $("form#register_form input[name='positionheld']").val();
			var gender			= $("form#register_form input[name='gender']");
			var homeaddres		= $("form#register_form input[name='homeaddres']").val();
			var corpaddress		= $("form#register_form input[name='corpaddress']").val();
			var country			= $("form#register_form input[name='country']").val();
			var email			= $("form#register_form input[name='email']").val();
			var email_regex 	= /^[\w%_\-.\d]+@[\w.\-]+.[A-Za-z]{2,6}$/; // reg ex email check
			var mobileno		= $("form#register_form input[name='mobileno']").val();
			var mobileno_regex	= /^[0-9]{4,12}$/; // reg ex phone check
			var phoneno			= $("form#register_form input[name='phoneno']").val();
			var phoneno_regex	= /^[0-9]{4,20}$/; // reg ex phone check
			var type			= $("form#register_form input[name='type']");
			var district		= $("form#register_form input[name='district']").val();
			var clubname		= $("form#register_form input[name='clubname']").val();
			var sponsorclub		= $("form#register_form input[name='sponsorclub']").val();
	//		var allergies		= $("form#register_form input[name='allergies']").val();
	//		var diet			= $("form#register_form input[name='diet']").val();
	//		var medicalcond		= $("form#register_form input[name='medicalcond']").val();
	//		var specialreq		= $("form#register_form input[name='specialreq']").val();
	//		var others			= $("form#register_form input[name='others']").val();
	//		var foodtype		= $("form#register_form input[name='foodtype']");
			var cont_name		= $("form#register_form input[name='cont_name']").val();
			var cont_rela		= $("form#register_form input[name='cont_rela']").val();
			var cont_email		= $("form#register_form input[name='cont_email']").val();
			var cont_email_regex 	= /^[\w%_\-.\d]+@[\w.\-]+.[A-Za-z]{2,6}$/; // reg ex email check
			var cont_no			= $("form#register_form input[name='cont_no']").val();
			var cont_no_regex	= /^[0-9]{4,20}$/; // reg ex phone check
			var tshirt			= $("form#register_form input[name='tshirt']");
			var branch			= $("form#register_form input[name='branch']").val();
			var trncd			= $("form#register_form input[name='trncd']").val();
			var trnamt			= $("form#register_form input[name='trnamt']").val();
			var trnamt_regex	= /^[0-9]{1,14}$/; // reg ex phone check
			var tmonth 			= $("form#register_form select[name='tmonth']").val(); // month
			var tday 			= $("form#register_form select[name='tday']").val(); // day
			var tyear 			= $("form#register_form select[name='tyear']").val(); // year
			var depositslip		= $("form#register_form input[name='file']").val(); // file upload
			
			/* validation start */	
			if(firstname == "") {
				$("span.val_firstname").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_firstname").html("");
				}
			if(middlename == "") {
				$("span.val_middlename").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_middlename").html("");
				}
			if(lastname == "") {
				$("span.val_lastname").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_lastname").html("");
				}
			
			if(badgename == "") {
				$("span.val_badgename").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_badgename").html("");
				}
			
			if((month == "") || (day == "") || (year == "")) {
				$("span.val_birthday").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
					$("span.val_birthday").html("");
				}
			
			if(positionheld == "") {
				$("span.val_positionheld").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_positionheld").html("");
				}
			if(gender.is(':checked') == false) {
				$("span.val_gender").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
					$("span.val_gender").html("");
				}
			if(homeaddres == "") {
				$("span.val_homeaddres").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_homeaddres").html("");
				}
	//		if(corpaddress == "") {
	//			$("span.val_corpaddress").html("This field is required.").addClass('validate');
	//			validation_holder = 1;
	//		} else {
	//			$("span.val_corpaddress").html("");
	//			}
			if(country == "") {
				$("span.val_country").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_country").html("");
				}
			if(email == "") {
				$("span.val_email").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				if(!email_regex.test(email)){ // if invalid email
					$("span.val_email").html("Invalid Email!").addClass('validate');
					validation_holder = 1;
				} else {
					$("span.val_email").html("");
				}
			}
			if(mobileno == "") {
				$("span.val_mobileno").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				if(!mobileno_regex.test(mobileno)){ // if invalid phone
					$("span.val_mobileno").html("Invalid Phone Number!").addClass('validate');
					validation_holder = 1;
				
				} else {
					$("span.val_mobileno").html("");
				}
				
				}
			//if(phoneno == "") {
			//	$("span.val_phoneno").html("This field is required.").addClass('validate');
			//	validation_holder = 1;
			//} else {
			//	if(!phoneno_regex.test(phoneno)){ // if invalid phone
			//		$("span.val_phoneno").html("Invalid Phone Number!").addClass('validate');
			//		validation_holder = 1;
			//	
			//	} else {
			//		$("span.val_phoneno").html("");
			//	}
			//	
			//	}
			if(type.is(':checked') == false) {
				$("span.val_type").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
					$("span.val_type").html("");
				}
			if(district == "") {
				$("span.val_district").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_district").html("");
				}
			if(clubname == "") {
				$("span.val_clubname").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_clubname").html("");
				}
			if(sponsorclub == "") {
				$("span.val_sponsorclub").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_sponsorclub").html("");
				}
	//		if(allergies == "") {
	//			$("span.val_allergies").html("This field is required.").addClass('validate');
	//			validation_holder = 1;
	//		} else {
	//			$("span.val_allergies").html("");
	//			}
	//		if(diet == "") {
	//			$("span.val_diet").html("This field is required.").addClass('validate');
	//			validation_holder = 1;
	//		} else {
	//			$("span.val_diet").html("");
	//			}
	//		if(medicalcond == "") {
	//			$("span.val_medicalcond").html("This field is required.").addClass('validate');
	//			validation_holder = 1;
	//		} else {
	//			$("span.val_medicalcond").html("");
	//			}
	//		if(specialreq == "") {
	//			$("span.val_specialreq").html("This field is required.").addClass('validate');
	//			validation_holder = 1;
	//		} else {
	//			$("span.val_specialreq").html("");
	//			}
	//		if(others == "") {
	//			$("span.val_others").html("This field is required.").addClass('validate');
	//			validation_holder = 1;
	//		} else {
	//			$("span.val_others").html("");
	//			}
	//		
	//		if(foodtype.is(':checked')==false) {
	//			$("span.val_foodtype").html("This field is required.").addClass('validate');
	//			validation_holder = 1;
	//		} else {
	//			$("span.val_foodtype").html("");
	//			}
			if(cont_name == "") {
				$("span.val_cont_name").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_cont_name").html("");
				}
			if(cont_rela == "") {
				$("span.val_cont_rela").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_cont_rela").html("");
				}
	//		if(cont_email == "") {
	//			$("span.val_cont_email").html("This field is required.").addClass('validate');
	//			validation_holder = 1;
	//		} else {
	//			if(!cont_email_regex.test(email)){ // if invalid email
	//				$("span.val_cont_email").html("Invalid Email!").addClass('validate');
	//				validation_holder = 1;
	//			} else {
	//				$("span.val_cont_email").html("");
	//			}
	//		}
			if(cont_no == "") {
				$("span.val_cont_no").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				if(!cont_no_regex.test(cont_no)){ // if invalid phone
					$("span.val_cont_no").html("Invalid Phone Number!").addClass('validate');
					validation_holder = 1;
				
				} else {
					$("span.val_cont_no").html("");
				}
				}
			if(tshirt.is(':checked')==false) {
				$("span.val_tshirt").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_tshirt").html("");
				}
			if(depositslip == "") {
				$("span.val_depositslip").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_depositslip").html("");
				}
			if(branch == "") {
				$("span.val_branch").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_branch").html("");
				}
			if(trncd == "") {
				$("span.val_trncd").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_trncd").html("");
				}
			if(trnamt == "") {
				$("span.val_trnamt").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
				if(!trnamt_regex.test(trnamt)){ // if invalid phone
					$("span.val_trnamt").html("Invalid Amount!").addClass('validate');
					validation_holder = 1;
				
				} else {
					$("span.val_trnamt").html("");
				}
				}
			if((tmonth == "") || (tday == "") || (tyear == "")) {
				$("span.val_trndate").html("This field is required.").addClass('validate');
				validation_holder = 1;
			} else {
					$("span.val_trndate").html("");
				}
			
			
			if(validation_holder == 1) { // if have a field is blank, return false
				
				$("p.validate_msg").slideDown("fast");
				return false;
			}  validation_holder = 0; // else return true
			/* validation end */
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

p.validate_msg {
    border: 1px solid #FF0000;
    font-weight: bold;
    padding: 10px;
	display:none;
	margin-bottom:25px
}
span.validate  {
	color:#F00;
	padding-left:8px;
	font-style:italic;
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
		
		<div id="howTo">
			
			<h1>8th PROCON 2019</h1>
			<br/>
			<h2>How to register</h2>
			<br/>
			<p><b>Step 1:</b> Deposit at any BDO Branch <br>Account Name: Patrick Joseph K. Dondonilla and Richard S. Punongbayan <br><b>Account No. 010240082176</b> <br>Note: Strictly 1 Delegate 1 Deposit Slip</p>
			
			<br/>
			<p><b>Step 2: </b> Register online on the link below (<a href="www.procon2019.com">www.procon2019.com</a>)</p>
			<p>Click on registration tab.</p>
			<br/>
			<p><b>Step 3: </b> Fill out the registration form. </p>
			<p><i><b>Note:</b> Please provide all the information required.</i></p>
			<p><li>Valid Email</li></p>
			<p><li>Payment Transaction Code <a href="./images/transactioncd.jpg" target=newtab data-geo="">Sample</a></li></p>
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
			<input name="type" type="radio" value="ALUMNI" /> ROTARACT ALUMNI 
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
		<p> <label for="trnslip">Payment Slip</label> <input type='file' name='file' /> <span class="val_depositslip"></span> </p>
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
