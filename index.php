<?php # index.php
// this is the main page of the site

// include the configuration file for error management and such
require_once ('./includes/config.inc.php');

// set the page title and include the HTML header
$page_title = '--::SNAIL::--';
include ('./includes/header.php');

// welcome the user (by name if they are logged in)
echo '<h1>Welcome to Snail HQ';
if(isset($_SESSION['first_name'])) {
	echo ", {$_SESSION['first_name']}!";
	if ($_SESSION['permissions'] == 'admin') {
		echo " [Administrator]";
	}
}
echo '</h1>';
?>
            <h2>Latest News</h2>
            <h3>Snail - The '93 - '94 Blood Demos Available for Download</h3>
            <h4>7/1/2012</h4>
<iframe width="400" height="100" style="position: relative; display: block; width: 400px; height: 100px;" src="http://bandcamp.com/EmbeddedPlayer/v=2/album=1404318295/size=venti/bgcol=FFFFFF/linkcol=4285BB/" allowtransparency="true" frameborder="0"><a href="http://snailhq.bandcamp.com/album/the-93-94-blood-demos">The &#39;93 - &#39;94 Blood Demos by Snail</a></iframe>
            <p>These are the legendary Blood demos, recorded on cassette 4track in 1993-1994. At the time, Snail's self-titled album was out and garnering critical acclaim and the band was feeling confident about their upcoming second album...which wasn't recorded until 2009. These demos were recorded in Porterville, California USA at the town's Memorial Auditorium, where Snail was known to practice. Here's what Scott from Fu Manchu said about the demos:</p>
            <p>"I remember reading a record review of Snail's debut release in some   small zine back in late 1993. It was a small review but everything the   reviewer said about the music was everything i was interested in. That   set me out searching record stores for the release. It was only   available on CD so i searched every local record store until one had a   copy. Bought it brought it home and dug it from the first ultra fuzzy   guitar note of my favorite song on that release "deep see fishing". I   wrote the band to get more info and Matt and I traded music. I sent all   the Fu Manchu stuff that I had. I think Matt gave me a copy of their new   4-track stuff at a show we played in San Francisco at the starting of   our tour. I listened to the Snail cassette tape over and over on tour.   Favorite song from that tape was "Cleanliness". I was glad that they   re-recorded it for their "blood" release a few years ago. Still love   that song. The 4-track tape is awesome and I'm glad to now get a louder   version. Still have the tape!!!!!!!!!!!!!!!!!!!!!!"</p>
            <hr />
            <h3>Snail - S/T Available for Download</h3>
            <h4>6/1/2012</h4>
            <iframe width="400" height="100" style="position: relative; display: block; width: 400px; height: 100px;" src="http://bandcamp.com/EmbeddedPlayer/v=2/album=1042324083/size=venti/bgcol=FFFFFF/linkcol=4285BB/" allowtransparency="true" frameborder="0"><a href="http://snailhq.bandcamp.com/album/snail">Snail by Snail</a></iframe>
            <p>Listen to Snail's first album, released in 1993, available for purchase in CD quality on bandcamp.</p>
            <hr />
            <h3>Terminus: Available NOW!</h3>
            <h4>5/1/2012</h4>
            <p style="font-size:16px"><a href="/snailstore/shopexd.asp?id=24">BUY CD</a> | <a href="http://snailhq.bandcamp.com/" target="_blank">DOWNLOAD MP3</a></p>
            <p>It's finally here! Snail's latest release Terminus - definitely our heaviest release to date. This one was a long time coming...hopefully you will love it as much as we do. - Snail
            </p>
            <p><img src="media/terminus_large.jpg" width="545" height="545" alt="Terminus has dropped" /></p>
            <p style="font-size:16px"><a href="/snailstore/shopexd.asp?id=24">BUY CD</a> | <a href="http://snailhq.bandcamp.com/" target="_blank">DOWNLOAD MP3</a></p>
            <hr />
            <h3>The Obelisk Snail Interview</h3>
<h4>3/23/2012</h4>
            <p>JJ from The Obelisk interviewed Mark Johnson and Matt Lynch of Snail about the upcoming release, &quot;Terminus.&quot; This is a great feature with pictures and an exclusive Snail video for &quot;Ritual.&quot; Check it out!</p>
            <p><a href="http://theobelisk.net/obelisk/2012/03/23/snailinterview-2/" target="_blank">The Obelisk Snail Interview</a></p>
<hr />
            <h3>Release date set for Terminus: May 1st, 2012</h3>
<h4>3/21/2012</h4>
<p>We are very proud to announce that Snail is self-releasing their new album Terminus on May 1st, 2012. Orders from the Snailhq.com website will be shipped the following day.</p>
<p>Terminus will also be available from <a href="http://www.allthatisheavy.com" target="_blank">All That Is Heavy</a>, CD Baby, iTunes and Amazon.com.</p>
<p>Snail&rsquo;s new album, &ldquo;Terminus,&rdquo; showcases all fresh material, infused with the enthusiasm of newly minted
  collaboration. Influences that were not evident in past works come to the fore, steeped in old-school metal and
  psychedelia. The subject matter is noticeably more mature, as the entire record delves into the themes of mortality and
  its implications in our modern world. From crushing doom to head-bobbing Camaro rock and hypnotic psych, &ldquo;Terminus&rdquo;
is Snail&rsquo;s most varied work to date; but most importantly, IT ROCKS.</p>
<hr />
<img style="float:right;margin-left:10px" src="media/Terminus_Cover.jpg" width="250" height="250" alt="Snail - Terminus Cover" />
<h3>Snail's New Album 'Terminus' is Complete</h3>
<h4>1/9/2012</h4>
            <p>All tracks on Snail's latest album Terminus are complete. Songlist:</p>
            <ol>
              <li>Recursion</li>
              <li>Galaxies' Lament</li>
              <li>Matchbook</li>
              <li>Burn the Flesh</li>
              <li>Hippy Crack</li>
              <li>Love Theme</li>
              <li>Ritual</li>
              <li>Circles</li>
              <li>Try to Make It</li>
              <li>Terminus</li>
            </ol>
            <p>This album represents a departure from Blood in that it's grounded in early-eighties proto-metal. Release date not yet finalized, but it'll likely be very soon. We're negotiating with labels for a vinyl release. Stay tuned.</p>
            <hr />
<h3>Snail is in the Studio Recording a New Album</h3>
            <h4>6/20/2011</h4>
            <p>Yes it's true my friends. After burying ourselves for a couple years to ferment in the rich earth we have emerged...with new tunes. No release date has been set; to stay updated <a href="join/index.php">join us</a>.</p>
            <p>The tunes will be, in no particular order:</p>
            <p>Love Theme From Snail<br />
              Galaxies' Lament<br />
              Hippy Crack<br />
              Circles<br />
              Heavy Trait<br />
              Recursion<br />
              Ritual<br />
              Try to Make It<br />
              Burn the Flesh<br />
              Perilous Dandelion (working title)
              <br />
              Terminus</p>
<hr />
<h3><img style="float:right;margin-left:10px" src="media/products/BloodFrontCover_lg.jpg" width="250" height="220" alt="Snail - Blood" />Snail's New Album 'Blood' Released</h3>
<h4>08/04/2009</h4>
<p>Analogous to the slow, relentless power of erosion, SNAIL melts mountains and reshapes earth with their latest offering, &quot;Blood.&quot; A band that once shared the stage with Stoner/Doom contemporaries SLEEP, SNAIL embarked on a 13-year sacred journey to Sheol from whence they recently emerged. Crushing proto-metal psychedelic fuzz-fests march on with sweet melodies shrouded by psyched-out oscillations. This is an album that should be measured on the Geologic Time Scale.</p>
<h3><a href="/snailstore/shopexd.asp?id=18">[Buy Now]</a></h3>
<p><strong>Songs:</strong></p>
<ol>
  <li>  Mental Models</li>
  <li>Sleep</li>
  <li>Underwater</li>
  <li>Committed</li>
  <li>Via/Penny Dreadful</li>
  <li>Relief</li>
  <li>Blood</li>
  <li>Cleanliness</li>
  <li>Screen</li>
  <li>Not for Me</li>
  <li>Blacklight</li>
</ol>
  <hr />
<h3>New Website Launch</h3>
<h4>08/01/2009</h4>
            <p>Welcome to the official Snail website. This website was created to be a store, archive, library, photo album and interface with friends for the band Snail. If you have any questions or comments about this website, please <a href="contact/index.php">contact us</a>. If you have content (especially old photos or videos) you would like to contribute, please <a href="contact/index.php">contact us</a>.</p><hr />
            
<script type="text/javascript" src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php/en_US"></script><script type="text/javascript">FB.init("b96e9075b5529a7ae7b8b5de017145a0");</script><fb:fan profile_id="132959692639" stream="1" connections="18" width="545"></fb:fan><div style="font-size:8px; padding-left:10px"><a href="http://www.facebook.com/pages/Snail/132959692639">Snail on Facebook</a> </div>
<hr style="clear:both" />

<?php
include ('./includes/footer.php');
?>
