/* 
	author: istockphp.com
*/
jQuery(function($) {
	var validation_holder;
	
	$("form#register_form input[name='register']").click(function() {
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
		if(phoneno == "") {
			$("span.val_phoneno").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			if(!phoneno_regex.test(phoneno)){ // if invalid phone
				$("span.val_phoneno").html("Invalid Phone Number!").addClass('validate');
				validation_holder = 1;
			
			} else {
				$("span.val_phoneno").html("");
			}
			
			}
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
	}); // click end 
	
	
	
	
	$("form#assess_form input[name='submit']").click(function() {
	var validation_holder = 0;
		
		var assesssment		= $("form#assess_form input[name='assessment']");
		var comment			= $("form#assess_form input[name='comment']").val();
		var batch			= $("form#assess_form input[name='batch']").val();
		
		
		
		/* validation start */	
		
		if(assesssment.is(':checked') == false) {
			$("span.val_assessment").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
				$("span.val_assessment").html("");
			}
		if(comment == "") {
			$("span.val_comment").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_comment").html("");
			}
		if(batch == "" && assessment== "APPROVED") {
			$("span.val_batch").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_batch").html("");
			}
		
		
		
		if(validation_holder == 1) { // if have a field is blank, return false
			
			$("p.validate_msg").slideDown("fast");
			return false;
		}  validation_holder = 0; // else return true
		/* validation end */	
	}); // click end

}); // jQuery End
