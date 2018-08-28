<?php
 require_once 'login.php';
 $conn = new mysqli($hn, $un, $pw, $db);  
 if ($conn->connect_error) die($conn->connect_error); 
?>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Theatre Ticket Booking System</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
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
                            <h1 id="logo"><a href="https://www.freepik.com/free-vector/set-of-cute-cartoon-movie-objects_1036379.htm">Theatre booking System</a>
                                        <img src="movie.jpg"></h1>
				<!-- search -->
				<div class="search">
					<form action="" method="post">
						<input type="text" class="field" value="Search" title="Search ..." />
						<input type="submit" class="search-btn" value="" />
						<div class="cl">&nbsp;</div>
					</form>
				</div>
				<!-- end of search -->
				<div class="cl">&nbsp;</div>
			</header>

			<!-- navigation -->
			<nav id="navigation">
				<a href="#" class="nav-btn">HOME<span></span></a>
				<ul>
                                        <li><a href="homepage.php">Homepage</a></li>
					<li class="active"><a href="whatsOn.php">What's on</a></li>
					<li><a href="book.php">Book now</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
				</ul>
				<div class="cl">&nbsp;</div>
			</nav>
			
			<!-- end of navigation -->
                        <!-- Image carousel -->
                    

<h2 style="text-align:center">Movies on </h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <iframe width=100% height="400px" src="https://www.youtube.com/embed/t9QtXGirWf0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        
 
  </div>

  <div class="mySlides">
      <div class="numbertext">2 / 6</div>
    <iframe width=100% height="400px" src="https://www.youtube.com/embed/sInM_xTZ7v4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
   
    <iframe width=100% height="400px" src="https://www.youtube.com/embed/c-OF0OaK3o0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    
    <iframe width=100% height="400px" src="https://www.youtube.com/embed/hIT4TzIsqfE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
   
    <iframe width=100% height="400px" src="https://www.youtube.com/embed/czY07Uhuxwo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
  
    <iframe width=100% height="400px" src="https://www.youtube.com/embed/SkcucKDrbOI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
        <img class="demo cursor" src="nightschoolKH.jpg" style="width:100%; height:220px" onclick="currentSlide(1)" alt="Night School">
    </div>
    <div class="column">
        <img class="demo cursor" src="oceans8header.jpg" style="width:100%; height:220px" onclick="currentSlide(2)" alt="Oceans 8">
    </div>
    <div class="column">
      <img class="demo cursor" src="threeidenticalstrangers.jpg" style="width:100%; height:220px" onclick="currentSlide(3)" alt="Three Identical Strangers">
    </div>
    <div class="column">
      <img class="demo cursor" src="sorry.jpg" style="width:100%; height:220px" onclick="currentSlide(4)" alt="SORRY TO BOTHER YOU">
    </div>
    <div class="column">
        <img class="demo cursor" src="princess_kaiulani.jpg" style="width:100%; height:220px" onclick="currentSlide(5)" alt="Princess Kaiulani">
    </div>    
    <div class="column">
        <img class="demo cursor" src="How_to_Train_Your_Dragon_3_poster.png" style="width:100%; height:220px" onclick="currentSlide(6)" alt="How to train your dragon 3">
    </div>
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    <!-- END of carousel-->
    
 

			</div>
                 <h2>Animated Button</h2>

    <button class="button"><a href="#"><span>Book now </span></a></button>
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
				<p class="copy">&copy; Copyright 2018<span>|</span> Mandy Arthur</p>
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
