<?php # contact/index.php
// this is the main page of the contact section

// include the configuration file for error management and such
require_once ('../includes/config.inc.php');

// set the page title and include the HTML header
$page_title = 'SNAIL - Contact Us';
include ('../includes/header.php');

// check if the form has been submitted
if(isset($_POST['submitted'])) {
	
	$errors = array(); // initialize the error array
	
	// check for a name
	if(empty($_POST['name'])) {
		$errors[] = 'You forgot to enter your name!';
	}
	
	// check for a name
	if(empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address!';
	}
	
	if(empty($errors)) { // if everything's ok
		
		// Send an email
		$body = "Name: '{$_POST['name']}' . \nEmail: '{$_POST['email']}' . \n\n'{$_POST['comments']}'";
		mail ('mark@produkt.us', 'Contact from Snail Website', $body, 'From: thefewminutes@gmail.com');
		
		// display the thank you message
		echo '<h1>Contact Snail</h1>
		<p>THANK YOU!</p>
		<p>Your email message has been received. Please allow 24-48 hrs. to receive a reply.</p>';
		
	} else { // report the errors
	
		echo '<h1>ERROR!</h1>
		<p class="error">The following errors occurred:<br />';
		foreach ($errors as $msg) { // print each error
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please go back and try again.</p>';
	} // end of if(empty($errors)) IF
	
} else { // display the form
?>
<h1>Contact Snail</h1>
<h2>Email</h2>
<form id="form1" name="form1" method="post" action="">
<fieldset><legend>Your Info</legend>
<p>Name:<br />
<input name="name" type="text" /></p>
<p>Email Address:<br />
<input name="email" type="text" /></p>
</fieldset><br />
<fieldset><legend>Comments / Questions</legend>
<textarea name="comments" cols="50" rows="5"></textarea>
<input name="submitted" type="hidden" value="TRUE" />
</fieldset>
<p><input name="submit" type="submit" />
<input name="reset" type="reset" /></p>
</form>
<hr />
<h2>Booking</h2>
<p>Please use above form.</p>
<hr />
<h2>Facebook</h2>
<p><a href="https://www.facebook.com/pages/Snail/132959692639" target="_blank">Visit Snail on Facebook
</a>
<h2>YouTube</h2>
<p><a href="http://www.youtube.com/user/SnailHQ" target="_blank">Visit Snail on YouTube</a></p>

<?php
} // close main IF-ELSE
include ('../includes/footer.php');
?>
