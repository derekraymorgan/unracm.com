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

			<div class="col-xs-12">

				<?php

				include 'homeCarousel.php';

				?>

			</div>

		</div>

		<br>

		<div class="row">

			<div class="col-xs-12 col-md-4 thumbnail homePageSection">

					<br>

					<a href="https://www.facebook.com/UNRACM">

						<img src="images/fbLogo.png" alt="">

					</a>

					<div class="caption">

						<h3>ACM Facebook</h3>

						<p>Go to our Facebook page for cool stuff</p>

					</div>

			</div>

			<div class="col-xs-12 col-md-4 thumbnail homePageSection">

					<br>

					<a href="signup.php">

						<img src="images/BecomeAMemberButton.png" alt="">

					</a>

					<br>

					<div class="caption">

						<h3>Join the ACM today!</h3>

						<p>Both UNR and National ACM are great resources.</p>

						<p>
							<a href="signup.php" class="btn btn-primary">Join Now!</a> <a href="about.php" class="btn btn-default">More Info</a>

						</p>

					</div>


			</div>

			<div class="col-xs-12 col-md-4 thumbnail homePageSection">

				<br>

				<a href="events.php">

					<img src="images/calendarIcon.png" alt="">

					<div class="caption">

						<h3>Checkout the ACM Events</h3>

						<p>The ACM holds many fun and beneficial events for it's members.</p>

					</div>

				</a>

			</div>

		</div>

	</div>

	<br>

	<?php

	include 'footer.php';

	?>

</body>

</html>