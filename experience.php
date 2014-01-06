<?php require("inc/doctype.php") ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<title>Young A. Yu - Experience</title>
	<link rel="stylesheet" type="text/css" href="styles/global.css" />
	<link rel="stylesheet" type="text/css" href="styles/left-nav.css" />
        <link rel="stylesheet" type="text/css" href="styles/experience.css" />
	<link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css' />
	
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
	
	<script type="text/javascript" src="scripts/jquery.js"></script>

</head>

<body>

<?php require("inc/header.php") ?>

<div id="left-nav-wrapper">
	<div id="left-nav-container">
		<ul id="left-nav">
                    <li class="current"><a href="#itsd">IT Service Desk</a></li>
                    <li><a href="#helen-newman">Helen Newman Lanes</a></li>
                    <li><a href="#acacia">Acacia</a></li>
                    <li><a href="#jasc">JASC</a></li>
                    <li><a href="#jusa">JUSA</a></li>
                    <li><a href="#skills">Skills</a></li>
		</ul>
	</div>
</div>

<div id="content">
    <div class="experience" id="itsd">
        <div class="title">IT Service Desk Consultant</div>
        <div class="date">Nov 2011 - Dec 2012</div>
        <div class="description">Cornell Information Technologies, Cornell University</div>
        <div class="location">Ithaca, NY</div>
        <div class="separator"> &nbsp; </div>
        <ul class="mainpoints">
            <li>Greet and interact with Cornell users at ITSD's Level 1 main entry support group.</li>
            <li>Diagnose, research, and troubleshoot Cornell-specific or PC-related issues.</li>
        </ul>
    </div>
    
    <div class="experience" id="helen-newman">
        <div class="title">Bowling Alley Assistant</div>
        <div class="date">Oct 2009 - Dec 2010</div>
        <div class="description">Helen Newman Bowling Alley, Cornell University</div>
        <div class="location">Ithaca, NY</div>
        <div class="separator"> &nbsp; </div>
        <ul class="mainpoints">
            <li>Provide great service to customers.</li>
            <li>Aid mechanic in determining and fixing issues with bowling alley machines.</li>
        </ul>
    </div>
    
    <div class="experience" id="acacia">
        <div class="title">President</div>
        <div class="date">Nov 2011 - Nov 2012</div>
        <div class="description">Acacia Fraternity, Cornell Chapter</div>
        <div class="location">Ithaca, NY</div>
        <div class="separator"> &nbsp; </div>
        <ul class="mainpoints">
            <li>Oversee all executive boarad &amp; secondary officers and ensure healthy operation of the chapter.</li>
            <li>Collaborate with other fraternity presidents to pass proactive legislation that affects the entire Cornell Greek community.</li>
            <li>Manage 30+ fraternity men and various philanthropy, social, and educational events throughout the term.</li>
            <li>Proactively prevent and manage any and all risk/liabilities for the chapter</li>
            <li>Assist in managing the chapter's budget.</li>
        </ul>
    </div>
    
    <div class="experience" id="jasc">
        <div class="title">American Delegate</div>
        <div class="date">Summer 2010</div>
        <div class="description">Japan - America Student Conference (JASC)</div>
        <div class="location">Richmond, IN; Washington, DC; New Orleans, LA; San Francisco, CA</div>
        <div class="separator"> &nbsp; </div>
        <ul class="mainpoints">
            <li>Study, analyze, and discuss Japan-U.S. relations with American/Japanese delegates</li>
            <li>Distinguish and address the political, socioeceonomic, technological, and cultural concerns of Japan and the U.S.</li>
            <li>Travel to different sites in the host nation to learn more about ongoing Japan-U.S. issues.</li>
            <li>Lead a round table presentation on spreading environmental awareness and achieving sustainability.</li>
        </ul>
    </div>
    
    <div class="experience" id="jusa">
        <div class="title">Treasurer</div>
        <div class="date">August 2010 - December 2010</div>
        <div class="description">Japan - United States Association (JUSA), Cornell University</div>
        <div class="location">Ithaca, NY</div>
        <div class="separator"> &nbsp; </div>
        <ul class="mainpoints">
            <li>Present and pitch the organization's events to funding sources.</li>
            <li>Create and manage event budgets.</li>
            <li>Oversee logistics and operations of the finance committee.</li>
        </ul>
    </div>
    
    <div class="experience" id="skills">
        <div class="title">Skills</div>
        <div class="separator"> &nbsp; </div>
        <ul class="mainpoints">
            <li>Web Design, Programming and Applications: Experienced in HTML, CSS, PHP, Java, Matlab // Familiarity of Javascript, jQuery, C/C++, Python, and shell scripting.</li>
            <li>Database programming: Classroom experience in SQL with Microsoft Access.</li>
            <li>Languages: Conversational fluency in Mandarin Chinese, knowledgable in Spanish.</li>
        </ul>
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
