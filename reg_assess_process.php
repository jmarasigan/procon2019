<?php include 'session_login.php';?>
<?php
header( 'Refresh: 5; url= ./reg_assess_list.php' ) ;
$transactioncd = $_POST['transactioncd'];
$assessment = $_POST['assessment'];
$comment = $_POST['comment'];
$email = $_POST['email'];
$badgename = $_POST['badgename'];
$approver= $_SESSION['email'];
$batch = $_POST['batch'];
echo "BATCH: ".$batch;
	if(assess($assessment, $comment, $transactioncd,$approver,$batch, $mysqli)){
		echo "PARTICIPANT WAS ASSESSED SUCCUSSFULY";
		echo "<br/>";	
		sendEmailNotification($email,$assessment,$transactioncd,$badgename,$comment);
		echo "Mail Sent.";
		echo "<br/>";
		echo "Redirecting in Assessment List in 5 sec.";

	} else {
		echo "ERROR: SOMETHING WRONG WITH THE ASSESSMENT";
		echo "<br/>";
		echo "Redirecting in Assessment List in 5 sec.";
		
	}
?>