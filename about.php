<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="google-site-verification" content="FAFmCgvnSep5s_mzYMANvyELMKnjwi19jKSxbtxCb-s" />

	<title>UNR ACM</title>


	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
	<link href='https://fonts.googleapis.com/css?family=Vollkorn:400,700' rel='stylesheet' type='text/css'>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="main.css">

	<!-- Optional theme
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</head>



<?php

include 'navbar.php';

include 'header.php';

?>

<body>

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

			<div class="col-xs-4">

				<div class="thumbnail">

					<img href="/signup.php" src="images/BecomeAMemberButton.png" alt="">

					<div class="caption">

						<h3>Join the ACM today!</h3>

						<p>Both UNR and National ACM are great resources.</p>

						<p>
							<a href="/signup.php" class="btn btn-primary">Join Now!</a> <a href="/about.php" class="btn btn-default">More Info</a>

						</p>

					</div>

				</div>

			</div>

			<div class="col-xs-4">

				<div class="thumbnail">

					<img src="http://placehold.it/800x500" alt="">

					<div class="caption">

						<h3>Feature Label</h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

						<p>
							<a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>

						</p>

					</div>

				</div>


			</div>

			<div class="col-xs-4">

				<div class="thumbnail">

					<img src="http://placehold.it/800x500" alt="">

					<div class="caption">

						<h3>Feature Label</h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

						<p>
							<a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>

						</p>

					</div>

				</div>

			</div>

		</div>

	</div>

	<br>

	<br>

</body>

<?php


include 'footer.php';

?>

</html>