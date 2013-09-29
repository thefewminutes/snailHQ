<?php # concerts/index.php
// this is the main page of the concerts section

// include the configuration file for error management and such
require_once ('../includes/config.inc.php');

// set the page title and include the HTML header
$page_title = 'SNAIL - Events';
include ('../includes/header.php');

?>
<h1>Events</h1>
<iframe src="http://www.google.com/calendar/embed?showTitle=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=jh0625pdufk6c1kb38slqnfiko%40group.calendar.google.com&amp;color=%23A32929&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="540" height="600" frameborder="0" scrolling="no"></iframe>
<?php
include ('../includes/footer.php');
?>
