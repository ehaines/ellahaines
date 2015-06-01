<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Bootstrap Latest compiled and minified CSS -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet"/>

		<!-- Optional Bootstrap theme -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css" rel="stylesheet"/>

		<!--FontAwesome-->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

		<!--SwipeBox-->
		<link rel="stylesheet" href="src/css/swipebox.css">

		<!--Custom CSS Stylesheets-->
		<link rel="stylesheet" href="/css/main.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/additional-methods.min.js"></script>

		<link rel="stylesheet" href="/css/main.css"/>
		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<!--swipebox plugin-->
<!--		<script src="lib/jquery-2.0.3.js"></script>-->
<!--		<script src="/js/jquery.swipebox.js"></script>-->

		<title>Ella's Totally Rad Website</title>
	</head>
	<body>

<!--=======================-->
<!--NAVBAR-->
<!--=======================-->

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
							<li><a href="#about-section">About</a></li>
							<li><a href="#gallery-section">Gallery</a></li>
							<li><a href="#contact">Contact</a></li>
							<li><a href="/games.php">Games</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

<!--====================-->
<!--BODY-->
<!--====================-->
		<!--LANDING SECTION-->
		<section class="container-fluid section" id ="landing-section">
<!--			<img class = "img-responsive desktop-background-img" src="img/sunset_birds1920x1273.jpg" alt="birds flying at sunset">-->
			<div class="jumbotron col-md-6 col-md-offset-3 text" id="Ella-jumbotron">
				<h1>Ella Haines</h1>
			</div>
		</section>

		<!--GALLERY SECTION-->
		<section class="container-fluid section" id ="gallery-section">
			<div class="col-md-4 col-md-offset-4" id="swipe-container">
				<a href="/games.php" class="swipebox" title="My Caption">
					<img src="/img/unicorn.jpg" alt="unicorn">
				</a>
<!--				<script type="text/javascript">-->
<!--					;( function( $ ) {-->
<!---->
<!--						$( '.swipebox' ).swipebox();-->
<!---->
<!--					} )( jQuery );-->
<!--				</script>-->
			</div>
		</section>

		<!--ABOUT SECTION-->
		<section class="container-fluid section" id ="about-section">
			<p class="col-md-4 col-md-offset-4">
				Cold-pressed squid bitters synth, shabby chic food truck hella Austin
				roof party pour-over letterpress occupy Thundercats. Intelligentsia Bushwick
				cray, asymmetrical gluten-free 8-bit Blue Bottle ethical master cleanse. Narwhal
				leggings food truck chia scenester tousled. Brooklyn lomo leggings YOLO XOXO.
				Put a bird on it American Apparel vegan, trust fund synth meggings fingerstache
				meh bitters. Pitchfork flexitarian Tumblr semiotics PBR&B. XOXO McSweeney's yr
				Intelligentsia mlkshk bitters fingerstache, wolf wayfarers retro aesthetic meh four loko banjo.
			</p>

		</section>
	</body>
</html>