<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<?php require_once("lib/utilities.php"); ?>


		<!--Custom CSS Stylesheets-->
		<link rel="stylesheet" href="/css/games.css"/>

		<!--Google Fonts-->
		<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>


		<title>Ella's Games</title>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapsed">
							<span class="sr-only">Main Menu</span>
							<i class="fa fa-navicon"></i>
						</button>

					</div>
					<div class="collapse navbar-collapse" id="navbar-collapsed">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php/#about-section">About</a></li>
<!--							<li><a href="index.php/#gallery-section">Gallery</a></li>-->
							<li><a href="index.php/#contact-section">Contact</a></li>
							<li><a href="">Games</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<main class="container">
			<section>
				<div id="video-box" class="col-md-8 col-md-offset-2">
					<h1>Collapse</h1>
					<figure>
						<img src="img/collapse2.51.jpg" class="img-responsive" alt="Picture of Collapse game">
					</figure>
					<div id="button-box">
						<a href="downloads/collapsegame2.5.jar" download="Collapse2.5.jar" class="btn btn-info btn-large">DOWNLOAD</a>
						<h4>Requires Java 8</h4>
						<p>Not for mobile! Click on groups of 3 or more blocks to make them disappear. The
						surrounding blocks will collapse downward, then sideways toward the central column.
						A new row will be added to the bottom every time the preview window fills with blocks.
						Every 200 points you will gain a level and the game will get faster. Every 3 levels, you
						will get a new block color.</p>
					</div>
				</div>

			</section>
		</main>
	</body>
</html>