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
					'name' => 'Renee Iinuma',
					'email' => 'rtiinuma@nevada.unr.edu',
					'linkedin' => 'https://www.linkedin.com/pub/renee-iinuma/85/958/893',
					'facebook' => 'https://www.facebook.com/summeroffreedom',
					'gplus' => 'https://plus.google.com/111682909971464936171/posts',
					'image' => 'images/officers/renee.jpg'

				],

				[
					'position' => 'Web Developer',
					'name' => 'Renee Iinuma',
					'email' => 'rtiinuma@nevada.unr.edu',
					'linkedin' => 'https://www.linkedin.com/pub/renee-iinuma/85/958/893',
					'facebook' => 'https://www.facebook.com/summeroffreedom',
					'gplus' => 'https://plus.google.com/111682909971464936171/posts',
					'image' => 'images/officers/renee.jpg'

				],

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
					'position' => 'President',
					'name' => 'Renee Iinuma',
					'email' => 'rtiinuma@nevada.unr.edu',
					'linkedin' => 'https://www.linkedin.com/pub/renee-iinuma/85/958/893',
					'facebook' => 'https://www.facebook.com/summeroffreedom',
					'gplus' => 'https://plus.google.com/111682909971464936171/posts',
					'image' => 'images/officers/renee.jpg'

				],

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
					'position' => 'President',
					'name' => 'Renee Iinuma',
					'email' => 'rtiinuma@nevada.unr.edu',
					'linkedin' => 'https://www.linkedin.com/pub/renee-iinuma/85/958/893',
					'facebook' => 'https://www.facebook.com/summeroffreedom',
					'gplus' => 'https://plus.google.com/111682909971464936171/posts',
					'image' => 'images/officers/renee.jpg'

				],

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
					'position' => 'President',
					'name' => 'Renee Iinuma',
					'email' => 'rtiinuma@nevada.unr.edu',
					'linkedin' => 'https://www.linkedin.com/pub/renee-iinuma/85/958/893',
					'facebook' => 'https://www.facebook.com/summeroffreedom',
					'gplus' => 'https://plus.google.com/111682909971464936171/posts',
					'image' => 'images/officers/renee.jpg'

				]



			);



			foreach( $officers as $officer )
			{


				echo'

				<div class="col-sm-4">
					<h3>' . $officer['position'] . '</h3>
					<div class="thumbnail">
						<img src="' . $officer['image'] . '" alt="...">
						<div class="caption container-fluid">

							<p>' . $officer['name'] . '</p>
							<p><a href="mailto:derek.ray.morgan@gmail.com">' . $officer['email'] . '</a></p>
							<p class="col-xs-6"><img src="images/smallFbLogo.png" alt="..."></p>
							<p class="col-xs-6"><img src="images/smallLinkLogo.png" alt="..."></p>

						</div>
					</div>
				</div>';

			}



		?>


	</div>

</div>





<br>

<?php

include 'footer.php';

?>

</body>

</html>