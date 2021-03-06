
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
					<li><a href="whatsOn.php">What's on</a></li>
					<li class="active"><a href="book.php">Book now</a></li>
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
				
				
				   
				
				
					<div class="colm" align="center" style="margin-top:20px;">
					
					   
						<table cellspacing="0" style="width:95%">
						
						<tr>
						   <th>Theatre Name</th>
						   <th>Location</th>
						   <th>Movie</th>
                                                   <th>Times</th>
						   <th>Book Now</th>
						</tr>
						
						
	
        <?php
 require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);  
 if ($conn->connect_error) die($conn->connect_error); 


	  $movie_name=$_POST['movie_name'];	  
	
	  /* $conn1 = mysql_connect("localhost","grant","T1nk3rB377101po")or die("can not connect");
	  mysql_select_db("publications",$conn1) or die("can not select database");*/	  
	  $query1="select * from movie where movie_name = '".$movie_name."'";
      $result1 = $mysqli->query($query1,$conn)or die("wrong query");
	 $query2="select * from movie where movie_name = '".$movie_name."'";
      $result2 = $mysqli->query($query2,$conn)or die("wrong query");	  
	  if($result1)
	  {
	    if($movie_name!="")
		    {	
					while(($row1  = mysql_fetch_array($result1)))
					  {							
$query3="select * from movie where movie_name = '".$movie_name."' and movie_theatre_id='"."'";
		$result3 = mysql_query($query3,$conn2)or die("wrong query");
			while($row3  = mysql_fetch_array($result3))                                   
                        {						   									
								echo  '<tr>
								<td>'.$row1['theatre_name'].'</td>
								<td>'.$row1['theatre_location'].'</td>
								<td>'.$row3['movie_name'].'</td>
                                                                <td>'.$row4['movie_times'].'</td>
								<td>
								<a href="show_select.php?theatre_id='.$row1['theatre_id'].'&&movie_id='.$row3['movie_id'].'"> 
								<input type="button" name="book" id="book" style="width:100px;" value="Book now"></a>
								</td>	   
								</tr>';
									 }		 
									
								 }		   
				        }		                											  				   		  												
			else
	          {	   
					while(($row1  = mysql_fetch_array($result1)))					
					  {				
                       /* echo $row1['theatre_id'];	*/					
					    $query3="select * from movie where movie_theatre_id = '".$row1['theatre_id']."'";
						$result3 = mysql_query($query3,$conn)or die("wrong query");														
							$row3  = mysql_fetch_array($result3); 											
							echo  '<tr>
										  <td>'.$row1['theatre_name'].'</td>
										  <td>'.$row1['theatre_location'].'</td>
										  <td>'.$row3['movie_name'].'</td>
										  <td>
										  <a href="show_select.php?theatre_id='.$row1['theatre_id'].'&&movie_id='.$row3['movie_id'].'"> 
									      <input type="button" name="book" id="book" style="width:100px;" value="Book now"></a>
										  </td>	   
									</tr>';									
								 }		   
				       }								
			}			
mysql_close($conn);	   
?>

	
						
						</table>
						

			
                    </div>
					
					<div class="cl">&nbsp;</div>
				</section>

				<br/><br/><br/>
				
				
			</div>
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