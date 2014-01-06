<?php

$myEmail = "yay5@cornell.edu";

// Credit for $patternEmail: http://www.regular-expressions.info/email.html
$patternEmail = "/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.(?:[A-Z]{2}|com|org|net|edu|gov|mil|biz|info|mobi|name|aero|asia|jobs|museum)$/i";
$patternName = "/^[a-z \']+$/i";

$success = false;

// Begin checking the field input
// Check that the form was submitted. If not, ignore the rest of the processes.
if (isset($_POST["submit"])) {
    // Form was submitted. Continue with checking process
    // Track if there are errors using $error and $errorMsg    
    $error = false;
    $errorMsg = array();
    $GLOBALS['success'] = false;
    $successMsg = "<p class=\"successmsg\">Thank you for your e-mail! I will try to respond back as soon as I can.</p>";
    
    // Begin long checking process
    // Check that the fields are !empty
    // 1. Check "firstname"
    if (empty($_POST["firstname"])) {
	$error = true;
	$errorMsg[] = "\"First Name\" was left blank.";
    } else {
	$_POST["firstname"] = trim($_POST["firstname"]);
	if (!checkStripTags($_POST["firstname"])) {
	    $_POST["firstname"] = strip_tags($_POST["firstname"]);
	    $errorMsg[] = "Tags for \"First Name\" have been automatically removed";
	}
	
	// Check that the "firstname" is a valid name
	if (!preg_match($patternName, $_POST["firstname"])) {
	    $error = true;
	    $errorMsg[] = "Invalid \"First Name\". Please refrain from using numbers or special characters.";
	}
    }
    
    // 2. Check "lastname"
    if (empty($_POST["lastname"])) {
        $error = true;
	$errorMsg[] = "\"Last Name\" was left blank.";
    } else {
	$_POST["lastname"] = trim($_POST["lastname"]);
	if (!checkStripTags($_POST["lastname"])) {
	    $_POST["lastname"] = strip_tags($_POST["lastname"]);
	    $errorMsg[] = "Tags for \"Last Name\" have been automatically removed";
	}
	
	// Check that the "lastname" is a valid name
	if (!preg_match($patternName, $_POST["lastname"])) {
	    $error = true;
	    $errorMsg[] = "Invalid \"Last Name\". Please refrain from using numbers or special characters.";
	}
    }
    
    // 3. Check "email-address"
    if (empty($_POST["email_address"])) {
	$error = true;
	$errorMsg[] = "\"E-mail Address\" was left blank.";
    } else {
	$_POST["email_address"] = trim($_POST["email_address"]);
	if (!checkStripTags($_POST["email_address"])) {
	    $_POST["email_address"] = strip_tags($_POST["email_address"]);
	    $errorMsg[] = "Tags for \"E-mail Address\" have been automatically removed";
	}

	// Check that the "email-address" is a valid name
	if (!preg_match($patternEmail, $_POST["email_address"])) {
	    $error = true;
	    $errorMsg[] = "Invalid \"E-mail Address\".";
	}
    }
    
    // 4. Check "message-title"
    if (empty($_POST["message_title"])) {
        $error = true;
	$errorMsg[] = "\"Message Title\" was left blank.";
    } else {
	$_POST["message_title"] = trim($_POST["message_title"]);
	if (!checkStripTags($_POST["message_title"])) {
	    $_POST["message_title"] = strip_tags($_POST["message_title"]);
	    $errorMsg[] = "Tags for \"Message Title\" have been automatically removed";
	}
	$_POST["message_title"] = stripslashes($_POST["message_title"]);
    }
    
    //5. Check "message-body"
    if (empty($_POST["message_body"])) {
        $error = true;
	$errorMsg[] = "\"Message Body\" was left blank.";
    } else {
	$_POST["message_body"] = trim($_POST["message_body"]);
	if (!checkStripTags($_POST["message_body"])) {
	    $_POST["message_body"] = strip_tags($_POST["message_body"]); // Try html_entity_decode();
	    $errorMsg[] = "Tags for \"Message Body\" have been automatically removed";
	}
	$_POST["message_body"] = stripslashes($_POST["message_body"]);
    }
    
    if (!$error){
	$subject = "(young-yu.com)" . $_POST["message_title"];
	$message = $_POST["message_body"]; 
	$headers = "To: Alex Yu <yay5@cornell.edu> \r\n";
	$headers .= 'From: ' . $_POST["firstname"] . " " . $_POST["lastname"] . " <" . $_POST["email_address"] . "> \r\n";
	
	// Send the e-mail and check that it was successful
	if (mail($myEmail, $subject, $message, $headers)) {
	    $GLOBALS['success'] = true;
	}
    }
}
?>
<?php require("inc/doctype.php") ?>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>    
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <title>Young A. Yu - Contact</title>
    <link rel="stylesheet" type="text/css" href="styles/global.css" />
    <link rel="stylesheet" type="text/css" href="styles/contact.css" />
    
    <!-- Start Importing Google WebFonts -->
    <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css' />
    <!-- End Importing Google WebFonts -->
    
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    
    <script type="text/javascript" src="scripts/jquery.js"></script>
    
</head>

<body>
    
<?php require("inc/header.php") ?>

<div id="content">
    <form id="contact-form" action= <?php print( "\"" . $_SERVER['PHP_SELF'] . "\"") ?> method="post">	
	<fieldset>
	    <legend> Contact Me </legend>
	
	    <?php
	        if ($GLOBALS["success"]) {
	            print $successMsg; 
	        }
		// Print out the error messages, if there are any
		else if (isset($error) && $error) {
		    print("<p id='error-title'>Please resolve the following errors:</p>\n");
		    print("<ul class=\"errormsg\">\n");   		
		    foreach($errorMsg as $a) {
			print("<li>$a</li>");
		    }
		    print("</ul>");
		}
	    ?>
	
	<div id="contact-form-wrap">
	    <label for="firstname">First Name:</label><input type="text" id="firstname" name="firstname" <?php if (isset($error) && $error) keepFormData("firstname") ?> />
	    <label for="lastname">Last Name:</label><input type="text" id="lastname" name="lastname" <?php if (isset($error) && $error) keepFormData("lastname") ?> />
	    <label for="email-address">E-mail Address:</label><input type="text" id="email-address" name="email_address" <?php if (isset($error) && $error) keepFormData("email_address") ?> />
	    <label for="message-title">Message Title:</label><input type="text" id="message-title" name="message_title" <?php if (isset($error) && $error) keepFormData("message_title") ?> />
	    
	    <div id="message-body-div">
		<label for="message-body" id="message-body-l">Message Body:</label>
		<textarea name="message_body" id="message-body" rows="30" cols="30"><?php if (isset($error) && $error) keepFormData2("message_body") ?></textarea>
		<input type="submit" id="submit-button" value="Send" name="submit" />
		<input type="reset" id="reset-button" value="Reset Fields" name="reset" />
	    </div>
	</div>
	</fieldset>
    </form>
</div>

</body>
</html>

<?php

// This function is for <input> tags
// This function is to be called from within the <input> tag
function keepFormData($a) {
    if (isset($_POST[$a]) && !empty($_POST[$a])) {
	print('value = ' .$_POST[$a]);
    } else { // It's not necessary to print value=''. I might remove this later.
	print('value=""');
    }
}

// This function is for <textarea> tags
// This function is to be called from between <textarea> and </textarea> tags
function keepFormData2($a) {
    if (isset($_POST[$a]) && !empty($_POST[$a])) {
	print($_POST[$a]);
    } else {
	print('');
    }
}
// This function is to check any differences between an original string
// and the strip_tag version of the string.
// True: $a == strip_tags($a);
function checkStripTags($a) {
    if ($a == strip_tags($a)) {
	return true;
    }
    
    return false;
}
?>