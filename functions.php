<?php
function sec_session_start() {
        $session_name = 'sec_session_id'; // Set a custom session name
        $secure = false; // Set to true if using https.
        $httponly = true; // This stops javascript being able to access the session id. 
 
        ini_set('session.use_only_cookies', 1); // Forces sessions to only use cookies. 
        $cookieParams = session_get_cookie_params(); // Gets current cookies params.
        session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly); 
        session_name($session_name); // Sets the session name to the one set above.
        session_start(); // Start the php session
        session_regenerate_id(); // regenerated the session, delete the old one.  
}

function login($email, $password, $mysqli) {
   // Using prepared Statements means that SQL injection is not possible. 
   if ($stmt = $mysqli->prepare("SELECT id, username, password, salt FROM members WHERE email = ? LIMIT 1")) { 
      $stmt->bind_param('s', $email); // Bind "$email" to parameter.
      $stmt->execute(); // Execute the prepared query.
      $stmt->store_result();
      $stmt->bind_result($user_id, $username, $db_password, $salt); // get variables from result.
      $stmt->fetch();
      $password = hash(sha512, $password.$salt); // hash the password with the unique salt.
 		
      if($stmt->num_rows == 1) { // If the user exists
         // We check if the account is locked from too many login attempts
         if(checkbrute($user_id, $mysqli) == true) { 
            // Account is locked
            // Send an email to user saying their account is locked
            return false;
         } else {
         if($db_password == $password) { // Check if the password in the database matches the password the user submitted. 
            // Password is correct!
 
 
               $user_browser = $_SERVER['HTTP_USER_AGENT']; // Get the user-agent string of the user.
 
               $user_id = preg_replace("/[^0-9]+/", "", $user_id); // XSS protection as we might print this value
               $_SESSION['user_id'] = $user_id; 
               $username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username); // XSS protection as we might print this value
               $_SESSION['username'] = $username;
               $_SESSION['login_string'] = hash('sha512', $password.$user_browser);
               // Login successful.
               return true;    
         } else {
            // Password is not correct
            // We record this attempt in the database
            $now = time();
            $mysqli->query("INSERT INTO login_attempts (user_id, time) VALUES ('$user_id', '$now')");
            return false;
         }
      }
      } else {
         // No user exists. 
         return false;
      }
   }
}

function checkbrute($user_id, $mysqli) {
   // Get timestamp of current time
   $now = time();
   // All login attempts are counted from the past 2 hours. 
   $valid_attempts = $now - (2 * 60 * 60); 
 
   if ($stmt = $mysqli->prepare("SELECT time FROM login_attempts WHERE user_id = ? AND time > '$valid_attempts'")) { 
      $stmt->bind_param('i', $user_id); 
      // Execute the prepared query.
      $stmt->execute();
      $stmt->store_result();
      // If there has been more than 5 failed logins
      if($stmt->num_rows > 5) {
         return true;
      } else {
         return false;
      }
   }
}

function login_check($mysqli) {
   // Check if afll session variables are set
   if(isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string'])) {
     $user_id = $_SESSION['user_id'];
     $login_string = $_SESSION['login_string'];
     $username = $_SESSION['username'];
 
     $user_browser = $_SERVER['HTTP_USER_AGENT']; // Get the user-agent string of the user.
 
     if ($stmt = $mysqli->prepare("SELECT password FROM members WHERE id = ? LIMIT 1")) { 
        $stmt->bind_param('i', $user_id); // Bind "$user_id" to parameter.
        $stmt->execute(); // Execute the prepared query.
        $stmt->store_result();
 
        if($stmt->num_rows == 1) { // If the user exists
           $stmt->bind_result($password); // get variables from result.
           $stmt->fetch();
           $login_check = hash('sha512', $password.$user_browser);
           if($login_check == $login_string) {
              // Logged In!!!!
              return true;
           } else {
              // Not logged in
              return false;
           }
        } else {
            // Not logged in
            return false;
        }
     } else {
        // Not logged in
        return false;
     }
   } else {
     // Not logged in
     return false;
   }
}

function register($firstname,$middlename,$lastname,$badgename,$birthday,$positionheld,$gender,$homeaddres,$corpaddress,$country,$email,$mobileno,$phoneno,$type,$district,
$clubname,$sponsorclub,$allergies,$diet,$medicalcond,$specialreq,$others,$foodtype,$cont_name,$cont_rela,$cont_email,$cont_no,$tshirt,$branch,$trncd,$trnamt,$trndate, $mysqli) {
   // Using prepared Statements means that SQL injection is not possible. 
   	
	if (!isTransactionExist($trncd,$mysqli)) {
		if ($insert_stmt = $mysqli->prepare("INSERT INTO registration (firstname,middlename,lastname,badgename,birthday,positionheld,gender,homeaddres,corpaddress,country,email,mobileno,phoneno,type,district,clubname,sponsorclub,allergies,diet,medicalcond,specialreq,others,foodtype,cont_name,cont_rela,cont_email,cont_no,tshirt,branch,trncd,trnamt,trndate) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")) {    
		   //$insert_stmt->bind_param($fname,$lname,$address,$city,$state,$email,$birth,$gender,$depositamt,$transactioncd,$transcationdate); 
		   $insert_stmt->bind_param("ssssssssssssssssssssssssssssssss",$firstname,$middlename,$lastname,$badgename,$birthday,$positionheld,$gender,$homeaddres,$corpaddress,$country,$email,$mobileno,$phoneno,$type,$district,
$clubname,$sponsorclub,$allergies,$diet,$medicalcond,$specialreq,$others,$foodtype,$cont_name,$cont_rela,$cont_email,$cont_no,$tshirt,$branch,$trncd,$trnamt,$trndate); 
		   // Execute the prepared query.
		   $insert_stmt->execute();
		   return true;
		}
	} else {
		return false;
	}
	
}

function upload($folder,$upload_image,$mysqli) {
    //$insert_path="INSERT INTO image_table VALUES('$folder','$upload_image')";
    if($insert_stmt = $mysqli->prepare("INSERT INTO image_table VALUES(?,?)")) {
        $insert_stmt->bind_param("ss",$folder,$upload_image);
        $insert_stmt->execute();
		   return true;
    } else {
        return false;
    }
}

function isTransactionExist($trncd,$mysqli) {
if ($stmt = $mysqli->prepare("SELECT trncd FROM registration WHERE trncd = ? LIMIT 1")) { 
        $stmt->bind_param('s', $trncd); // Bind "$transactioncd" to parameter.
        $stmt->execute(); // Execute the prepared query.
        $stmt->store_result();
 			
        if($stmt->num_rows == 1) { // If the transaction already exist
              return true;
           } else {
              // Not logged in  
           	return false;
           }
        } else {
            return false;
        }
	
}


function isUserExist($username,$email,$mysqli) {
if ($stmt = $mysqli->prepare("SELECT username FROM members WHERE username = ? and email = ? LIMIT 1")) { 
        $stmt->bind_param('ss', $username,$email); // Bind "$user_id" to parameter.
        $stmt->execute(); // Execute the prepared query.
        $stmt->store_result();
 
        if($stmt->num_rows == 1) { // If the transaction already exist
              return true;
           } else {
              // Not logged in
              return false;
           }
        } else {
            // Not logged in
            return false;
        }
	
}

function assess($assessment, $comment,$transactioncd,$email,$batch, $mysqli) {
   // Using prepared Statements means that SQL injection is not possible. 
   //echo 'Transaction#: '+$transactioncd;
   //echo '\n isTransactionExist: '+isTransactionExist($transactioncd,$mysqli);
	if (isTransactionExist($transactioncd,$mysqli)) {
		$controlno = substr($transactioncd,1,3);
		$controlno .= "PRO";
		$controlno .= substr($transactioncd,-3,3);
        $controlno .= "CON2019";
		if ($update_stmt = $mysqli->prepare("UPDATE registration SET regstatus=?,comment=?,approver=?,controlno=?,batch=?  WHERE trncd=?")) {    
		   //$insert_stmt->bind_param($fname,$lname,$address,$city,$state,$email,$birth,$gender,$depositamt,$transactioncd,$transcationdate); 
		   $update_stmt->bind_param("ssssss",$assessment, $comment,$email,$controlno,$batch,$transactioncd); 
		   // Execute the prepared query.
		   $update_stmt->execute();
		   return true;
		} else {
            echo 'SOMETHING WRONG WITH ASSESSMENT SQL.';
        }
	} else {
		return false;
	}
	
}

function sendEmailNotification($to,$status,$transactioncd,$badgename,$comment) {
//	$to = "jaysongmarasigan@gmail.com";
	
    $controlno = substr($transactioncd,0,3);
    $controlno .= "CON2019";
	$controlno .= substr($transactioncd,-3,3);
	$controlno .= "PRO";
	
	$subject = "PROCON2019 Registration Result ";
	$message = "";
	if($status == "APPROVED") {
		$subject .= "(".$controlno.")";
		$message = '
		<html>
		<head>
		   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		   
		</head>
		<img src="http://PROCON2019.com/images/letterhead.jpg">
		<h1>Mabuhay!</h1><br/>
		<h2>Dear '.$badgename.',</h2><br/>
		<p>You have been successfully registered as participant in the upcoming Pilipinas Rotaract Convention 2019 this February 22-24, 2019 in <b>Legaspi Albay.</b></p><br/>
        <h3>For more updates, please like the official facebook page of PROCON2019</h3>
        <h3>See you at the City of Fun and Adventure!</h3>
        <br>
        <h2>DIOS MABALOS!</h2>
		
		<p align=center>PILIPINAS ROTARACT CONVENTION</p>
		<p align=center>ROTARY INTERNATIONAL</p>
		<p align=center>Districts 3770, 3780, 3790, 3800, 3810, 3820, 3830, 3850, 3860, 3870</p>
		</html>';
	} else {
		$message = '
		<html>
		<head>
		   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		   
		</head>
		<img src="http://PROCON2019.com/images/letterhead.jpg">
		<h1>Registration is invalid or unsuccessful.</h1><br/>
		<p>The <b>PROCON2019</b> committee cannot process your registration because '.$comment.'</p><br/>
		<p>Please check the necessary informations to be filled and re-register.</p><br/>
		<p>For Details and assistance, Please contact <b>PROCON2019</b> Registration Helpdesk on this number...
		09778590788</p>
		<p align=center>PILIPINAS ROTARACT CONVENTION</p>
		<p align=center>ROTARY INTERNATIONAL</p>
		<p align=center>Districts 3770, 3780, 3790, 3800, 3810, 3820, 3830, 3850, 3860, 3870</p>
		
		</html>';
	}
	
	$from = "admin@procon2019.com";
	
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "Pilipinas Rotaract Convention 2019";
	
	mail($to,$subject,$message,"$headers");
}
?>