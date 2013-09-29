<?php # photos/index.php
// this is the main page of the photos section

// include the configuration file for error management and such
require_once ('../includes/config.inc.php');

// set the page title and include the HTML header
$page_title = 'SNAIL - Photos';
include ('../includes/header.php');

?>
<h1>Photos</h1>
<embed type="application/x-shockwave-flash" src="http://picasaweb.google.com/s/c/bin/slideshow.swf" width="545" height="400" flashvars="host=picasaweb.google.com&captions=1&hl=en_US&feat=flashalbum&RGB=0x000000&feed=http%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2Fthefewminutes%2Falbumid%2F5372868181002313313%3Falt%3Drss%26kind%3Dphoto%26hl%3Den_US" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>

<?php
include ('../includes/footer.php');
?>
