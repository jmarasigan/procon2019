<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58475 -->
    <meta charset="utf-8">
    <title>REGISTRATION</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/script.responsive.js"></script>
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/jquery.ui.core.js"></script>
	<script src="js/jquery.ui.widget.js"></script>
	<script src="js/jquery.ui.accordion.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.min"></script>
<style type="text/css">

   .divMain #floatDiv {
        position:absolute;
        left:85%;
        margin-top:100px;
        margin-left:-200px;
        width:300px;
        height:200px;
        background-color: red;
    }
            
    </style>


<script language="javascript">
			
            $(document).ready(function(){
            	$('#floatDiv').show();
         //on window scroll fire it will call a function.
				
                $(window).scroll(function () {
 
         //after window scroll fire it will add define pixel added to that element.

                    set = $(document).scrollTop()+"px";
 
        //this is the jQuery animate function to fixed the div position after scrolling.

                    $('#floatDiv').animate({top:set},{duration:500,queue:false});

                });

            });

         </script>
<style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>


<div id="art-main">
    <div class="art-sheet clearfix">
<nav class="art-nav clearfix">
    <ul class="art-hmenu"><li><a href="home.php">Home</a></li><li><a href="program.php">Program</a></li><li><a href="about-cwc.html">About Albay</a></li><li><a href="registration.php" class="active">Registration</a></li><li><a href="contacts.html">Contacts</a></li></ul> 
    </nav>
<header class="art-header clearfix">

                    
                    <div id="registrationDiv">
                    	<?php include('registration_main.php'); ?>
                    </div>
                    
</header>
<!-- FLOATING DIV
<div class="divMain">
        <div id="floatDiv">
        	<div id="id_52451bd0b2fda1032002753" class="text_exposed_root text_exposed" style="display: inline; text-align: center;">
        <h5 class="uiStreamMessage userContentWrapper" data-ft="{&quot;type&quot;:1,&quot;tn&quot;:&quot;K&quot;}" style="color: rgb(0, 0, 0); margin-bottom: 5px; word-break: break-word; font-family: 'lucida grande', tahoma, verdana, arial, sans-serif; line-height: 14px; background-color: rgb(255, 255, 255);"><span style="font-size: 20px;">Registration fee: P3,000.00 (Luzon)<br>
        P2,800.00 (Visayas &amp; Mindanao)</span><span class="text_exposed_show"><span style="font-size: 20px;"><br>
        Early bird Registation: P2,500 (till Nov. 30 only)<br>
        <br>
        Rotarians' Registration: P3,500.00<br>
        P3,000.00 (Early Bird)</span><span style="font-size: 14px;"><br></span></span></h5>
        </div>
        
        </div>
    </div>
 -->

<footer class="art-footer clearfix">
<p>Copyright © 2018. PROCON2019 All Rights Reserved.</p>
</footer>

    </div>
    <p class="art-page-footer">
        <!--        <span id="art-footnote-links"><a href="http://www.artisteer.com/" target="_blank">Web Template</a> created with Artisteer.</span>-->
    </p>
</div>


</body></html>