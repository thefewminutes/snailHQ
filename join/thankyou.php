<?php # join/thankyou.php
// this is the thank you page of the join section

// include the configuration file for error management and such
require_once ('../includes/config.inc.php');

// set the page title and include the HTML header
$page_title = 'SNAIL - Thank You For Joining';
include ('../includes/header.php');

?>
<h1>Join Us</h1>
<h2>Email List Sign Up</h2>
<p><strong>Thank you for subscribing to the Snail Email List!</strong><br />You'll receive a verification e-mail shortly that contains a link which you need to visit in order to confirm and complete your subscription.</p>

<?php
include ('../includes/footer.php');
?>
