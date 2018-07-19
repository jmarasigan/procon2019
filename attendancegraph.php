<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="w3-container">


<?php 
include 'db_connect.php';
$query1 = "select count(*) ttlcount from registration where regstatus='APPROVED'";
$result = $mysqli->query($query1);
while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    echo "<h2>Registered Participants (".$row["ttlcount"].")</h2>";
}

?>


<?php 
    $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    

    include 'db_connect.php';
                        
    $query = "SELECT district, count(*)/(select count(*) from registration where regstatus='APPROVED')*100 prcnt,count(*) distcount FROM registration WHERE regstatus='APPROVED' group by district order by district";
    $result = $mysqli->query($query);
    echo "<h3>Breakdown per district";
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
        
        echo "<div class=w3-light-grey>";
        echo "<div  class='w3-container w3-center' style='background:".$color.";width:".$row["prcnt"]."%'>".$row["district"]." (".$row["distcount"].")</div>";
        echo "</div>";


    }
                        
    
    ?>

</div>
</body>
</html>