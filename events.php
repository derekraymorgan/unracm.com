<!DOCTYPE html>

<html lang="en">

<?php

include 'head.php';

include 'navbar.php';

?>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1575323039395639";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

<?php

include 'header.php';

?>

<div class="container-fluid mainContainer">

	<div class="row">

		<br>
		<br>

		<div class="col-sm-12 col-md-6 col-lg-7 responsive-iframe-container">

			<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;
			src=hcl34a73s6mqmu4uqlgd1ngj0s%40group.calendar.google.com&amp;color=%2342104A&amp;
			ctz=America%2FLos_Angeles" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no">

			</iframe>

		</div>

		<div class="col-sm-12 col-md-6 col-lg-5 center-block">

			<br>
			<br>

			<div class="fb-page center-block" data-href="https://www.facebook.com/UNRACM" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/UNRACM"><a href="https://www.facebook.com/UNRACM">UNR ACM</a></blockquote></div></div>

		</div>

	</div>

</div>

<br>

<?php

include 'footer.php';

?>

</body>

</html>


