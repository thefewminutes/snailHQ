<?php # join/index.php
// this is the main page of the join section

// include the configuration file for error management and such
require_once ('../includes/config.inc.php');

// set the page title and include the HTML header
$page_title = 'SNAIL - Join Us';
include ('../includes/header.php');

?>
<h1>Join Us</h1>
<h2>Email List Sign Up</h2>
<p>Join the Snail Email List and receive direct Snail updates and Newsletters!</p>
<!-- Begin MailChimp Signup Form -->
<link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="http://newmetal.us5.list-manage.com/subscribe/post?u=c19b8df3056f7a1f5d14fb380&amp;id=323b6fb6f9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	<label for="mce-EMAIL">Subscribe to our mailing list</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
	<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>

<!--End mc_embed_signup-->
<p>&nbsp;</p>
<p>&nbsp;</p>

<?php
include ('../includes/footer.php');
?>
