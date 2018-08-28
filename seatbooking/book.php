<?php

?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Online Movie Ticket Booking</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
        <link rel="stylesheet" href="stylebook.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/style_form.css" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>
	
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
</head>
<body>
<!-- wrapper -->
<div id="wrapper">
	<!-- shell -->
	<div class="shell">
		<!-- container -->
		<div class="container">
			<!-- header -->
			<header id="header">
				<h1 id="logo"><a href="#">Retina</a></h1>
				<!-- search -->
				<div class="search">
					<form action="" method="post">
						<input type="text" class="field" value="keywords here ..." title="keywords here ..." />
						<input type="submit" class="search-btn" value="" />
						<div class="cl">&nbsp;</div>
					</form>
				</div>
				<!-- end of search -->
				<div class="cl">&nbsp;</div>
			</header>
			<!-- end of header -->
			<!-- navigaation -->
			<nav id="navigation">
				<a href="#" class="nav-btn">HOME<span></span></a>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li  class="active"><a href="booknow.php">Book Now</a></li>
					<li><a href="nowon.php">Now On</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
				</ul>
				<div class="cl">&nbsp;</div>
			</nav>
			<!-- end of navigation -->
			<!-- slider-holder -->
			<div class="slider-holder">
				
				
			</div>

			<!-- main -->
			<div class="main">

				

				<section class="cols">
			
				
				
					<div class="colm" style="margin-top:70px;margin-right:55px;">
					
					   
						
					


<form id="regForm" action="/action_page.php">
 
  <!-- One "tab" for each step in the form: -->
  <p>
  <div class="tab">Select a movie:
  <select id="movie_shows" name="movie_shows" required>
<option value="" selected="selected">--Select--</option>
<option value="Movie_1">Night School</option>
<option value="Movie_2 ">How to train your dragon 3 </option>
<option value="Movie_3">Princess</option>
<option value="Movie_4">Ocean's 8</option>
<option value="Movie_5">Thor </option>
<option value="Movie_6">Sorry to bother you</option>
<option value="Movie_7">Three identical strangers</option>
</p>
									
</select> 
                                
  </div>
  
  
  
  <div class="tab">Select times:
    <p><table>

  <tr>
    <td>2D</td>
   
    <td> <button class="btn" id="selectBox" onchange="changeFunc();">10:00</button></td>
    <td> <button class="btn" id="selectBox" onchange="changeFunc();">12:00</button> </td>
	<td> <button class="btn" id="selectBox" onchange="changeFunc();">14:00</button></td>
  </tr>
  <tr>
    <td>3D</td>
    <td> <button class="btn" id="selectBox" onchange="changeFunc();">10:00</button></td>
    <td> <button class="btn" id="selectBox" onchange="changeFunc();">12:00</button> </td>
	<td> <button class="btn" id="selectBox" onchange="changeFunc();">14:00</button></td>
  </tr>
  <tr>
    <td>Under 16's</td>
    <td> <button class="btn" id="selectBox" onchange="changeFunc();">10:00</button></td>
    <td> <button class="btn"  id="selectBox" onchange="changeFunc();">12:00</button> </td>
	<td> <button class="btn" id="selectBox" onchange="changeFunc();">14:00</button></td>
  </tr>
</table>
</p>

  </div>
  
   <div class="tab">Select seat:
    <p><table style="width: 30%">

  <tr>
    <td>A</td>
   
    <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
       <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
           <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
               <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
                       <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
                           <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
  
                    <td> </td>
                    <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
                    <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
  </tr><td> </td>
  <tr>
    <td>B</td>
     <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
         <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
             <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
                 <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
                 <td> </td>
                    <td> </td>
                    <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
                    <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
  </tr>
  <tr>
    <td>C</td>
        <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
            <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
                <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
                    <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
                    <td> </td>
                    <td> </td>
                    <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
                    <td> <button class="btn" id="selectBox" onchange="changeFunc();"><img src="seat.png" alt="description here" /></button></td>
  </tr>
</table>
   </div>
    
  <div class="tab">
  
      <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
   
  </div>
     
 
  </div>
  
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

   function changeFunc() {
    var selectBox = document.getElementById("selectBox").style.color = "blue";
   }
</script>
				
			<!-- end of main -->
			<div class="cl">&nbsp;</div>
			
			<!-- footer -->
			<div id="footer">
				<div class="footer-nav">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Book Now</a></li>
						<li><a href="#">Now On</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact Us</a></li>
						
					</ul>
					<div class="cl">&nbsp;</div>
				</div>
				<p class="copy">&copy; Copyright 2013<span>|</span>spiderguts. Design by <a href="http://spiderguts.com" target="_blank">spiderguts.com</a></p>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- end of footer -->
		</div>
		<!-- end of container -->
	</div>
	<!-- end of shell -->
</div>
<!-- end of wrapper -->
</body>
</html>