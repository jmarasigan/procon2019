<?php include 'session_login.php';?>
<?php include 'nav_links.php';?>
<br/>
<br/>
<?php
$username = $_POST['username'];
// The hashed password from the form
$password = $_POST['p']; 
$email = $_POST['email']; 

if(!isUserExist($username, $email, $mysqli)) {
	// Create a random salt
	$random_salt = hash(sha512, uniqid(mt_rand(1, mt_getrandmax()), true));
	// Create salted password (Careful not to over season)
	$password = hash(sha512, $password.$random_salt);
	 
	// Add your insert to database script here. 
	// Make sure you use prepared statements!
	if ($insert_stmt = $mysqli->prepare("INSERT INTO members (username, email, password, salt) VALUES (?, ?, ?, ?)")) {    
	   $insert_stmt->bind_param('ssss', $username, $email, $password, $random_salt); 
	   // Execute the prepared query.
	   $insert_stmt->execute();
	    echo "New Admin was registered.";
	}
} else {
		echo "User already exist!";
	}
?>
<link href="style/style_registration.css" rel="stylesheet" type="text/css" media="all" />