<?php
include 'db_connect.php';
include 'functions.php';

if(isset($_POST['email'], $_POST['p'])) { 
   $email = $_POST['email'];
   $password = $_POST['p']; // The hashed password.
   if(login($email, $password, $mysqli) == true) {
      // Login success
      	sec_session_start(); // Our custom secure way of starting a php session. 
		$_SESSION['email']=$_POST['email'];
     	header('Location: ./reg_assess_list.php');
     	echo 'Success: You have been logged in!';
   } else {
      // Login failed
      header('Location: ./login.php?error=1');
   }
} else { 
   // The correct POST variables were not sent to this page.
   echo 'Invalid Request';
}
?>