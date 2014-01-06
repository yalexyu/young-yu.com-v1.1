<?php require("inc/doctype.php") ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Young A. Yu - Portfolio</title>
	
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="styles/global.css" />
	<link rel="stylesheet" type="text/css" href="styles/left-nav.css" />
	<link rel="stylesheet" type="text/css" href="styles/portfolio.css" />
	<link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css' />
	
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
	
	<script type="text/javascript" src="scripts/jquery.js"></script>

	<!-- jQuery Cycle Plugin from http://jquery.malsup.com/cycle/basic.html	 -->
	<script type="text/javascript" src="scripts/jquery.cycle.all.latest.js"></script>
	<!-- End script for rotating images -->
</head>

<body>

<?php require("inc/header.php") ?>
<div id="left-nav-wrapper">
	<div id="left-nav-container">
		<ul id="left-nav">
			<li class="current"><a href="#drjoseph">Dr. Danny Joseph, DDS</a></li>
			<li><a href="#yu-layout1">Young Yu v1.0</a></li>
		</ul>
	</div>
</div>

<div id="content">
	<div class="section project" id="drjoseph">
		<span class="title">Dr. Danny Joseph, DDS.</span>
		<p class="description">Introduction to Web Design and Programming, Fall 2012</p>
		<!-- Start script for #drjoseph -->
		<script type="text/javascript">
			$('#gallery1').cycle({ 
			fx: 'fade', 
			speed: 600, 
			timeout: 0, 
			next: '#next1', 
			prev: '#prev1' 
			});
		</script>
		<!-- End script for #drjoseph -->
		<div class="gallery-nav-buttons">
			<div id="gallery1" class="gallery">
				<img src="images/portfolio/drjoseph1.png" alt="Portfolio Image, Dr. Danny (1)" />
				<img src="images/portfolio/drjoseph2.png" alt="Portfolio Image, Dr. Danny (2)"/>
				<img src="images/portfolio/drjoseph3.png" alt="Portfolio Image, Dr. Danny (3)"/>
			</div>
			<a class="prev-button" href="#gallery1" id="prev1">&lt;</a>
			<a class="next-button" href="#gallery1" id="next1">&gt;</a>
		</div>
		<span class="caption">
			I was responsible for all of the HTML/CSS and some PHP/JS for this project.
		</span>
		<span class="caption">
			The live site will be coming soon.
		</span>
		<!-- Start next/prev buttons -->
		
		
	</div>

	<div class="section project" id="yu-layout1">
		<span class="title">Young Yu v1.0</span>
		<p class="description">Personal Website</p>
		<!-- Start script for #yu-layout1 -->
		<script type="text/javascript">
			$('#gallery2').cycle({ 
			fx: 'fade', 
			speed: 600, 
			timeout: 0, 
			next: '#next2', 
			prev: '#prev2' 
			});
		</script>
		<!-- End script for #yu-layout1 -->
		<div class="gallery-nav-buttons">
			<div id="gallery2" class="gallery">
				<img src="images/portfolio/layout1-1.png" alt="Portfolio Image, Layout1 (1)" />
				<img src="images/portfolio/layout1-2.png" alt="Portfolio Image, Layout1 (2)" />
			</div>
			<a class="prev-button" href="#gallery2" id="prev2">&lt;</a>
			<a class="next-button" href="#gallery2" id="next2">&gt;</a>
		</div>
		<span class="caption">
			I was responsible for the design and HTML/CSS for this design. jQuery/Javascript was used as part of the project.
		</span>
		<span class="caption">
			The live site is at <a href="http://www.young-yu.com/v1_0/">www.young-yu.com/v1_0/</a>.
		</span>
	</div>
</div>

<!-- Start scripts for smooth on-page scrolling -->
<script src="scripts/jquery.js" type="text/javascript"></script>
<script src="scripts/jquery.scrollTo.js" type="text/javascript"></script>
<script src="scripts/jquery.nav.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#left-nav').onePageNav({
			begin: function() {
			console.log('start');
		},
			end: function() {
			console.log('stop');
		},
			scrollOffset: 150,
			scrollThreshold: 40
	});
});
</script>
</body>
</html>
