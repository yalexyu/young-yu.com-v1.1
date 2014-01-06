<div id="header">
    <div id="header-container">
	<div id="logo-block">
	    <img src="images/yu-chinese-cursive-rgba(0-79-41).png" alt="Chinese Character Yu" />
	</div>
		
	<div id="top-header-wrap">
	    <a href="index.php" id="title">Young A. Yu</a>
	    <ul id="nav">
		<li <?php checkCurrent("index.php") ?>><a href="index.php">Home</a></li>
		<li <?php checkCurrent("portfolio.php") ?>><a href="portfolio.php">Portfolio</a></li>
		<li <?php checkCurrent("experience.php") ?>><a href="experience.php">Experience</a></li>
		<li <?php checkCurrent("academics.php") ?>><a href="academics.php">Academics</a></li>
	    </ul>
	</div>
	<div id="bottom-header-wrap">
		<a id="e-mail" href="contact.php">E-mail me!</a>
		<div id="social-media">
		    <a id="facebook" href="http://www.facebook.com/young.alex.yu" title="Only if I know you">Facebook</a>
		    <a id="twitter" href="https://twitter.com/youngalexyu" title="For updates on my life">Twitter</a>
		</div>
	</div>
    </div>
</div>

<?php
    function checkCurrent($pattern) {
	$pattern = "/" . $pattern . "$/i";
	if (preg_match($pattern, $_SERVER['PHP_SELF'])) {
	    print("class=\"current\"");    
	} else {
	print("class=\"\"");
	}
    }
    
?>