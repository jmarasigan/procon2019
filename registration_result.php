<?php include 'session_login.php';?>
<?php include 'nav_links.php';?>
<br/>
<br/>
<?php 

$query = "Select * FROM registration where regstatus != '' order by regstatus";
$result = $mysqli->query($query);
/* associative array */


	echo "<table border=1>";
	echo "<tr>";
		echo "<td colspan=3>NAME</td>";
		echo "<td>BADGE NAME</td>"; 
		echo "<td>B-DAY</td>"; 
		echo "<td>POSITION</td>"; 
		echo "<td>GENDER</td>"; 
		echo "<td>HOME</td>"; 
		echo "<td>OFFICE</td>"; 
		echo "<td>COUNTRY</td>"; 
		echo "<td>E-MAIL</td>"; 
		echo "<td>MOBILE</td>"; 
		echo "<td>PHONE</td>"; 
		echo "<td>TYPE</td>"; 
		echo "<td>DISTRICT</td>"; 
		echo "<td>CLUB NAME</td>"; 
		echo "<td>SPONSOR CLUB</td>"; 
		echo "<td>ALLERGIES</td>"; 
		echo "<td>DIET</td>"; 
		echo "<td>MEDICAL CONDITION</td>"; 
		echo "<td>SPECIAL REQUIREMENT</td>"; 
		echo "<td>OTHERS</td>"; 
		echo "<td>FOOD (HALAL?)</td>"; 
		echo "<td>CONTACT NAME</td>"; 
		echo "<td>CONTACT RELATION</td>"; 
		echo "<td>CONTACT E-MAIL</td>"; 
		echo "<td>CONTACT NO.</td>"; 
		echo "<td>T-SHIRT</td>"; 
		echo "<td>BRANCH</td>";
		echo "<td>TRANS CODE</td>"; 
		echo "<td>TRANS AMOUNT</td>"; 
		echo "<td>TRANS DAY</td>"; 
		echo "<td>STATUS</td>"; 
		echo "<td>COMMENT</td>";
		echo "<td>APPROVER</td>"; 
		echo "<td>CONTROL NO</td>";
	echo "</tr>";
while($row = $result->fetch_array(MYSQLI_ASSOC)) {
	echo "<tr>";
		echo  "<td colspan=3>".$row["firstname"]." ".$row["middlename"]." ".$row["lastname"]."</td>".
		"<td>".$row["badgename"]."</td>".
		"<td>".$row["birthday"]."</td>".
		"<td>".$row["positionheld"]."</td>".
		"<td>".$row["gender"]."</td>".
		"<td>".$row["homeaddres"]."</td>".
		"<td>".$row["corpaddress"]."</td>".
		"<td>".$row["country"]."</td>".
		"<td>".$row["email"]."</td>".
		"<td>".$row["mobileno"]."</td>".
		"<td>".$row["phoneno"]."</td>".
		"<td>".$row["type"]."</td>".
		"<td>".$row["district"]."</td>".
		"<td>".$row["clubname"]."</td>".
		"<td>".$row["sponsorclub"]."</td>".
		"<td>".$row["allergies"]."</td>".
		"<td>".$row["diet"]."</td>".
		"<td>".$row["medicalcond"]."</td>".
		"<td>".$row["specialreq"]."</td>".
		"<td>".$row["others"]."</td>".
		"<td>".$row["foodtype"]."</td>".
		"<td>".$row["cont_name"]."</td>".
		"<td>".$row["cont_rela"]."</td>".
		"<td>".$row["cont_email"]."</td>".
		"<td>".$row["cont_no"]."</td>".
		"<td>".$row["tshirt"]."</td>".
		"<td>".$row["branch"]."</td>".
		"<td>".$row["trncd"]."</td>".
		"<td>".$row["trnamt"]."</td>".
		"<td>".$row["trndate"]."</td>".
		"<td>".$row["regstatus"]."</td>".
		"<td>".$row["comment"]."</td>".
		"<td>".$row["approver"]."</td>".
		"<td>".$row["controlno"]."</td>";
	echo "</tr>";
}
echo "</table>";

/* free result set */
$result->free();

/* close connection */
$mysqli->close()

?>
<a href="javascript:window.print()">Click to Print This Page</a>