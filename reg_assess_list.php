<?php include 'session_login.php';?>
<?php include 'nav_links.php';?>
<br/>
<br/>


<?php
$query = "Select * FROM registration where regstatus = ''";
$result = $mysqli->query($query);

/* associative array */
if($result->num_rows > 0) {
echo "<table border=1>";
echo "<tr>";
echo "<td></td>";
echo "<td colspan=2 length=50px>NAME</td>";
echo "<td>DISTRICT</td>";
echo "<td>MOBILE</td>";
echo "</tr>";
while($row = $result->fetch_array(MYSQLI_ASSOC)) {
	echo "<tr>";
	echo "<td><a href='reg_assess_detail.php?transactioncd=$row[trncd]'>VIEW</a></td>";
	echo  "<td colspan=2>".$row["firstname"]." ".$row["lastname"]."</td>".
	"<td>".$row["district"]."</td>".
	"<td>".$row["mobileno"]."</td>";
	echo "</tr>";
}
echo "</table>";
} else {
	echo "No pending registration for assessment.";
	}

/* free result set */
$result->free();

/* close connection */
$mysqli->close()

?>
<link href="style/style_registration.css" rel="stylesheet" type="text/css" media="all" />