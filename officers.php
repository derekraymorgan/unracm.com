<!DOCTYPE html>

<html lang="en">

<?php

include 'head.php';

include 'navbar.php';

?>

<body>

<?php

include 'header.php';

?>

<div class="container-fluid mainContainer">

	<div class="row">

		<?php

			$officers = array
			(

				[
					'position' => 'President',
					'name' => 'Renee Iinuma',
					'email' => 'rtiinuma@nevada.unr.edu',
					'linkedin' => 'https://www.linkedin.com/pub/renee-iinuma/85/958/893',
					'facebook' => 'https://www.facebook.com/summeroffreedom',
					'gplus' => 'https://plus.google.com/111682909971464936171/posts',
					'image' => 'images/officers/renee.jpg'

				],

				[
					'position' => 'Vice President',
					'name' => 'David Vaughan',
					'email' => 'DavidRayVaughan00@gmail.com',
					'linkedin' => 'https://www.linkedin.com/pub/renee-iinuma/85/958/893',
					'facebook' => 'https://www.facebook.com/summeroffreedom',
					'gplus' => 'https://plus.google.com/111682909971464936171/posts',
					'image' => 'images/officers/david.jpg'

				],

				[
					'position' => 'Web Developer',
					'name' => 'Derek Morgan',
					'email' => 'derek.ray.morgan@gmail.com',
					'linkedin' => 'https://www.linkedin.com/pub/renee-iinuma/85/958/893',
					'facebook' => 'https://www.facebook.com/summeroffreedom',
					'gplus' => 'https://plus.google.com/111682909971464936171/posts',
					'image' => 'images/officers/derek.jpg'

				],

				[
					'position' => 'Secretary',
					'name' => 'Helen Medrano',
					'email' => 'hmedrano@nevada.unr.edu',
					'linkedin' => 'https://www.linkedin.com/pub/renee-iinuma/85/958/893',
					'facebook' => 'https://www.facebook.com/summeroffreedom',
					'gplus' => 'https://plus.google.com/111682909971464936171/posts',
					'image' => 'images/officers/helen.jpg'

				],

				[
					'position' => 'Director of Fundraising',
					'name' => 'Saharath "Jay" Kleips',
					'email' => 'saharathkleips@yahoo.com',
					'linkedin' => 'https://www.linkedin.com/pub/renee-iinuma/85/958/893',
					'facebook' => 'https://www.facebook.com/summeroffreedom',
					'gplus' => 'https://plus.google.com/111682909971464936171/posts',
					'image' => 'images/officers/jay.jpg'

				],

				[
					'position' => 'Director of Outreach',
					'name' => 'Chris Lewis',
					'email' => 'christopherlewis@nevada.unr.edu',
					'linkedin' => 'https://www.linkedin.com/pub/renee-iinuma/85/958/893',
					'facebook' => 'https://www.facebook.com/summeroffreedom',
					'gplus' => 'https://plus.google.com/111682909971464936171/posts',
					'image' => 'images/officers/chris.jpg'

				],

				[
					'position' => 'Director of Programming',
					'name' => 'Aaron "BigMac" Whitehead',
					'email' => 'Aaronbmwhitehead@gmail.com',
					'linkedin' => 'https://www.linkedin.com/pub/renee-iinuma/85/958/893',
					'facebook' => 'https://www.facebook.com/summeroffreedom',
					'gplus' => 'https://plus.google.com/111682909971464936171/posts',
					'image' => 'images/officers/aaron.jpg'

				],

				[
					'position' => 'Director of Human Resources',
					'name' => 'Matthew Molloy',
					'email' => 'mmolloy@nevada.unr.edu',
					'linkedin' => 'https://www.linkedin.com/pub/renee-iinuma/85/958/893',
					'facebook' => 'https://www.facebook.com/summeroffreedom',
					'gplus' => 'https://plus.google.com/111682909971464936171/posts',
					'image' => 'images/officers/matt.jpg'

				],

				[
					'position' => 'Treasurer',
					'name' => 'Vladislav Savranschi',
					'email' => 'savlad2012@gmail.com',
					'linkedin' => 'https://www.linkedin.com/pub/renee-iinuma/85/958/893',
					'facebook' => 'https://www.facebook.com/summeroffreedom',
					'gplus' => 'https://plus.google.com/111682909971464936171/posts',
					'image' => 'images/officers/vlad.jpg'

				]



			);



			foreach( $officers as $officer )
			{


				echo'

				<div class="col-sm-6 col-xs-12 col-md-4">
					<h3>' . $officer['position'] . '</h3>
					<div class="thumbnail">
						<img src="' . $officer['image'] . '" alt="...">
						<div class="caption container-fluid">

							<p>' . $officer['name'] . '</p>
							<p><a href="mailto:derek.ray.morgan@gmail.com">' . $officer['email'] . '</a></p>


						</div>

					</div>

				</div>';

			}

//<p class="col-xs-6"><img src="images/smallFbLogo.png" alt="..."></p>
//<p class="col-xs-6"><img src="images/smallLinkLogo.png" alt="..."></p>

		?>


	</div>

</div>





<br>

<?php

include 'footer.php';

?>

</body>

</html>