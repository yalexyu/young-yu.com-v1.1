<?php require("inc/doctype.php") ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<title>Young A. Yu - Home</title>
	
	<link rel="stylesheet" type="text/css" href="styles/global.css" />
	<link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css' />
		
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
	
	<script type="text/javascript" src="scripts/jquery.js"></script>
	<!-- jQuery Cycle Plugin from http://jquery.malsup.com/cycle/basic.html	 -->
	<script type="text/javascript" src="scripts/jquery.cycle.all.latest.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {		
		$('#quotes').cycle({
			timeout: 4500,
			cleartype: 1,
			speed: 300,
			fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		});
	});
	</script>
	<!-- End script for rotating images -->
</head>

<body>
<?php require("inc/header.php") ?>

<div id="content">
	<img class="portrait" src="images/portrait-yu.jpg" alt="Portrait of Young A. Yu"/>
	<div id="about">
		<h2>Hello there! My name is Young. Did you know?... </h2>
		<span id="quotes">
			<?php require("inc/quotes.php") ?>
		</span>
		<p><a href="portfolio.php">Come check out my work</a>.</p>
	</div>

</div>

</body>
</html>
