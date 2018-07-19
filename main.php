<!DOCTYPE html>
<html>
<title>Pilipinas Rotaract Convension 2019</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
	<a href="#registration" class="w3-bar-item w3-button w3-padding-large w3-hide-small">REGISTRATION</a>
    
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">ABOUT EVENT <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#location" class="w3-bar-item w3-button">Location</a>
        <a href="#program" class="w3-bar-item w3-button">Program</a>
        <a href="#contact" class="w3-bar-item w3-button">Contact US</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#registration" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">REGISTRATION</a>
  <a href="#location" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">LOCATION</a>
  <a href="#program" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PROGRAM</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT US</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="./images/poster.jpg" style="width:60%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Legaspi Albay</h3>
      <p><b>DIOS MABALOS!</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="./images/cwc2.jpg" style="width:60%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="./images/cwc1.jpg" style="width:60%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
       
    </div>
  </div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">Pilipinas Rotaract Convention 2019</h2>
    <p class="w3-opacity"><i>Legaspi Albay, February 22-26, 2019</i></p>
   
  </div>

  <!-- The Registration Section -->
  <div class="w3-black" id="registration">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">REGISTRATION</h2>
      <p class="w3-opacity w3-center"><i>Limited Slots available. Hurry up!!!</i></p><br>
      <!--document.getElementById('ticketModal').style.display='block'-->
      <p class="w3-opacity w3-center"><?php include('attendancegraph.php'); ?></p>

      <button class="w3-button w3-block w3-green w3-xlarge">Register NOW!</button>
      
      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">Batch 1 <i>(Php 3,000)</i> <span class="w3-tag w3-green w3-margin-left">5 slot</span>
        </li>
        <li class="w3-padding">Batch 2 <i>(Php 3,300)</i><span class="w3-tag w3-green w3-margin-left">10 slot</span></li>
        <li class="w3-padding">Batch 3 <i>(Php 3,500)</i><span class="w3-tag w3-green w3-margin-left">20 slot</span></li>
        <li class="w3-padding">Regular <i>(Php 3,800)</i><span class="w3-tag w3-green w3-margin-left">365 slot</span></li>
        <li class="w3-padding">Rotarian <i>(Php 3,800*)</i><span class="w3-tag w3-green w3-margin-left">UNLIMITED</span></li>
        <li class="w3-padding"><?php include('registration_main.php'); ?></li>
      </ul>

      <p class="w3-opacity w3-left"><i><b>Note:<b> REGISTRATION IS NON-REFUNDABLE,PAYMENT REGISTRATION ONLY WILL NOT GUARANTEE YOUR SLOT</i></p><br>
      <p class="w3-opacity w3-left"><i>*No accomodation</i></p><br>
      <br>
      
    </div>
  </div>

  <div id="location" class="w3-white">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
    <h2 class="w3-wide w3-center">LOCATION</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.441846140784!2d123.736560314482!3d13.134505990749126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a103d11bef603b%3A0x6f1cd8ab6f0d4d0e!2sThe+Oriental+Legazpi!5e0!3m2!1sen!2sph!4v1531410148028" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        <h4> The Oriental Hotel Legazpi</h3>
      <i class="fa fa-map-marker">Taysan Hills Sto. Nino Village, Albay, 4500 Legazpi, Philippines</i>
      <a href="https://play.google.com/store/apps/details?id=com.innopub.albay.guide"><img src="./images/google-play-badge.png" style="width:30%"></a>
      </div>

      <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
        <video width="100%" height="400px" controls="controls">
            <source src="./video/90SECONDERVIDEO.mp4" type="video/mp4">
            Your browser does not support the HTML5 Video element.
        </video>
      </div>

      
  </div>

  <div class="w3-dark-grey" id="program">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">PROGRAM</h2>
      <div class="w3-bar w3-black">
        <button class="w3-bar-item w3-button" onclick="openCity('day1')">Day1</button>
        <button class="w3-bar-item w3-button" onclick="openCity('day2')">Day2</button>
        <button class="w3-bar-item w3-button" onclick="openCity('day3')">Day3</button>
      </div>

      <div id="day1" class="w3-container programsched">
        <br>
        <div class="w3-row w3-border">
          <div class="w3-col s4 w3-grey w3-left"><p>PROGRAMME</p></div>
          <div class="w3-col s4 w3-grey w3-center"><p>VENUE</p></div>
          <div class="w3-col s4 w3-grey w3-center"><p>ATTIRE</p></div>
        </div>
        <div class="w3-row w3-border">
          <div class="w3-col s4 w3-white w3-left"><p>Arrival</p></div>
          <div class="w3-col s4 w3-white w3-center"><p>Hotel Lobby</p></div>
          <div class="w3-col s4 w3-white w3-center"><p>placeholder</p></div>
        </div>
        <div class="w3-row w3-border">
          <div class="w3-col s4 w3-white w3-left"><p>Registration</p></div>
          <div class="w3-col s4 w3-white w3-center"><p>Hotel Lobby</p></div>
          <div class="w3-col s4 w3-white w3-center"><p>placeholder</p></div>
        </div>
        <div class="w3-row w3-border">
          <div class="w3-col s4 w3-white w3-left"><p>Check-in</p></div>
          <div class="w3-col s4 w3-white w3-center"><p>placeholder</p></div>
          <div class="w3-col s4 w3-white w3-center"><p>placeholder</p></div>
        </div>
        <div class="w3-row w3-border">
          <div class="w3-col s4 w3-white w3-left"><p>Leaders' Meeting</p></div>
          <div class="w3-col s4 w3-white w3-center"><p>Manila Boardroom</p></div>
          <div class="w3-col s4 w3-white w3-center"><p>Rotaract Shirt</p></div>
        </div>
        <div class="w3-row w3-border">
          <div class="w3-col s4 w3-white w3-left"><p>Rotaract Festival</p></div>
          <div class="w3-col s4 w3-white w3-center"><p>Ante Hall</p></div>
          <div class="w3-col s4 w3-white w3-center"><p>District Shirt</p></div>
        </div>
        <div class="w3-row w3-border">
          <div class="w3-col s4 w3-white w3-left"><p>Welcome Dinner<br>GALA NIGHT (MASQUERADE BALL)<br></p></div>
          <div class="w3-col s4 w3-white w3-center"><p><br>Grand Ballroom<br> <br></p></div>
          <div class="w3-col s4 w3-white w3-center"><p>Mask (Required) <br>Men: Suit and Slacks<br>Women: Ball/Long Gown</p></div>
        </div>
      </div>

      <div id="day2" class="w3-container programsched" style="display:none">
      <br>
        <div class="w3-row w3-border">
          <div class="w3-col s4 w3-grey w3-left"><p>PROGRAMME</p></div>
          <div class="w3-col s4 w3-grey w3-center"><p>VENUE</p></div>
          <div class="w3-col s4 w3-grey w3-center"><p>ATTIRE</p></div>
        </div>
        <div class="w3-row w3-border">
          <div class="w3-col s4 w3-white w3-left"><p>Coastal Clean-up <br> Fun Run <br> MOB Dance</p></div>
          <div class="w3-col s4 w3-white w3-center"><p><br> Legaspi Boulevard <br> <br> </p></div>
          <div class="w3-col s4 w3-white w3-center"><p><br> PROCON T-SHIRT <br> <br> </p></div>
        </div>
        <div class="w3-row w3-border">
          <div class="w3-col s4 w3-white w3-left"><p>Breakfast <br> Pleanary 1 <br> Plenary 2 <br> District Report <br> Lunch <br> Skills Acquisition <br> PM Snack <br> </p></div>
          <div class="w3-col s4 w3-white w3-center"><p><br> <br> <br> Grand Ballroom <br> <br> <br> <br></p></div>
          <div class="w3-col s4 w3-white w3-center"><p><br> <br> <br> Business Attire <br> <br> <br> <br></p></div>
        </div>
        <div class="w3-row w3-border">
          <div class="w3-col s4 w3-white w3-left"><p>Dinner <br> District Presentation <br> Fellowship Night (Neon Party)</p></div>
          <div class="w3-col s4 w3-white w3-center"><p><br>Grand Ballroom <br> <br></p></div>
          <div class="w3-col s4 w3-white w3-center"><p><br>White top and Jeans<br> <br></p></div>
        </div>
      </div>

      <div id="day3" class="w3-container programsched" style="display:none">
      <br>
        <div class="w3-row w3-border">
          <div class="w3-col s4 w3-grey w3-left"><p>PROGRAMME</p></div>
          <div class="w3-col s4 w3-grey w3-center"><p>VENUE</p></div>
          <div class="w3-col s4 w3-grey w3-center"><p>ATTIRE</p></div>
        </div>
        <div class="w3-row w3-border">
          <div class="w3-col s4 w3-white w3-left"><p>Breakfast <br> Adjournment</p></div>
          <div class="w3-col s4 w3-white w3-center"><p><br> Grand Ballroom <br> </p></div>
          <div class="w3-col s4 w3-white w3-center"><p><br> Anything Confortable <br> </p></div>
        </div>
        <div class="w3-row w3-border">
          <div class="w3-col s4 w3-white w3-left"><p>Free Time</p></div>
          <div class="w3-col s4 w3-white w3-center"><p> <br></p></div>
          <div class="w3-col s4 w3-white w3-center"><p> Anything Confortable</p></div>
        </div>
        <div class="w3-row w3-border">
          <div class="w3-col s4 w3-white w3-left"><p>Check-out</p></div>
          <div class="w3-col s4 w3-white w3-center"><p>Hotel Lobby</p></div>
          <div class="w3-col s4 w3-white w3-center"><p> Anything Confortable</p></div>
        </div>
      </div>
      </div>
    </div>
  </div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Register Now!</h2>
      </header>
      <div class="w3-container w3-content w3-padding-64">
        <?php include('registration_main.php'); ?>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        
        
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACTS</h2>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Richard S. Punongbayan<br>
        <i class="fa fa-phone" style="width:30px"></i> Mobile: 09953476093<br>
      </div>
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> PATRICK JOSEPH K. DONDONILLA<br>
        <i class="fa fa-phone" style="width:30px"></i> Mobile: 09065633280<br>
      </div>
      
    </div>
  </div>

  

  

  
  
<!-- End Page Content -->
</div>
<!-- Add Google Maps -->
<!--<div id="googleMap" style="height:400px;" class="w3-grayscale-max"></div>-->
<script>
function myMap() {
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  
  <p class="w3-medium">Copyright © PROCON2019. All rights reserved.</a></p>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  <p class="w3-medium">Developed by <a href="https://web.facebook.com/jaygmarasigan"><i class="fa fa-facebook-official w3-hover-opacity"></i></a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 80000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("programsched");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
}

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}


</script>

</body>
</html>
