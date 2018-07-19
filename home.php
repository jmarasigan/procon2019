<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58475 -->
    <meta charset="utf-8">
    <title>Pilipinas Rotaract Convention 2019</title>
    <meta name="keywords" content="PROCON2019,Pilipinas Rotaract Convention 2019,ROTARACT,CWC">
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
    

<style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style></head>
	
<body>
					<div id="regStat">
                    <?php 
                    include 'db_connect.php';
					                    
					$query = "Select district,count(district) count FROM registration where regstatus='APPROVED' group by district order by district";
					$result = $mysqli->query($query);
					
					echo "<table border=1>";
					echo "<tr>";
					echo "<td>DISTRICT</td>"."<td>PARTICIPANTS</td>";
					echo "</tr>";
					while($row = $result->fetch_array(MYSQLI_ASSOC)) {
						echo "<tr>";
						echo "<td align = center>".$row["district"]."</td>"."<td align=center>".$row["count"]."</td>";
						echo "</tr>";
					}
					echo "</table>";
					                    
                    
                    ?>
                    </div>

<div id="art-main">
    <div class="art-sheet clearfix">
<nav class="art-nav clearfix">
    <ul class="art-hmenu"><li><a href="home.php" class="active">Home</a></li><li><a href="program.php">Program</a></li><li><a href="about-cwc.html">About Albay</a></li><li><a href="registration.php">Registration</a></li><li><a href="contacts.html">Contacts</a></li></ul> 
    </nav>

            <div>
                <img src="images/poster.jpg" style="width:61.5em;" alt="PROCON2019">
            </div>           
	

</header>
<div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
        <p><span style="font-weight: bold;"><br></span></p>
    </div>
    </div>
</div>
</div>
</article></div>
                    </div>
                </div>
            </div><footer class="art-footer clearfix">
<p>Copyright © 2018. PROCON2019 All Rights Reserved.</p>
</footer>

    </div>
    <p class="art-page-footer">
        <!--        <span id="art-footnote-links"><a href="http://www.artisteer.com/" target="_blank">Web Template</a> created with Artisteer.</span>-->
    </p>
</div>


</body></html>