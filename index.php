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

		<!--Google Fonts-->
		<link href='http://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
		<!--SwipeBox-->
<!--		<link rel="stylesheet" href="src/css/swipebox.css">-->

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

		<!-- stellar.js plugin -->
		<script type="text/javascript" src="js/jquery.stellar.min.js"></script>

		<!-- Custom JS/jQuery -->
		<script type="text/javascript" src="js/custom.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<!--swipebox plugin-->
<!--		<script src="lib/jquery-2.0.3.js"></script>-->
<!--		<script src="/js/jquery.swipebox.js"></script>-->

		<title>Ella Haines</title>
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
<!--							<li><a href="#gallery-section">Gallery</a></li>-->
							<li><a href="#contact-section">Contact</a></li>
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
		<section class="container-fluid parallax" data-stellar-background-ratio="1.5" id ="landing-section">
<!--			<img class = "img-responsive desktop-background-img" src="img/sunset_birds1920x1273.jpg" alt="birds flying at sunset">-->
			<div class="jumbotron col-md-6 col-md-offset-3 text" id="Ella-jumbotron">
				<h1>Ella Haines</h1>
				<h3>Approachable web design for your unique needs.</h3>
				<h3>Available for freelance or full-time work.</h3>
			</div>
		</section>

		<!--GALLERY SECTION-->
<!--		<section class="container-fluid section" id ="gallery-section">-->
<!--			<div class="col-md-4 col-md-offset-4" id="swipe-container">-->
<!--				<a href="/games.php" class="swipebox" title="My Caption">-->
<!--					<img src="/img/unicorn.jpg" alt="unicorn">-->
<!--				</a>-->
<!--<!--				<script type="text/javascript">-->
<!--<!--					;( function( $ ) {-->
<!--<!---->
<!--<!--						$( '.swipebox' ).swipebox();-->
<!--<!---->
<!--<!--					} )( jQuery );-->
<!--<!--				</script>-->
<!--			</div>-->
<!--		</section>-->

		<!--ABOUT SECTION-->
		<section class="container-fluid parallax" data-stellar-background-ratio="0.5"id ="about-section">
			<article class="col-md-4 col-md-offset-4">
				<h2>ABOUT ME</h2>
				<p>
					I began programming in 2012, and quickly discovered that I really enjoy
					squashing bugs and figuring out how to do something for the first time.
					It's addictive! I love the creative problem-solving that comes with coding,
					so at the beginning of the year, I enrolled in the Deep Dive Coding Bootcamp
					to become a web developer.
				</p>
				<p>
					I have programmed in Java, Python, PHP, MySQL, JavaScript, HTML5, and CSS,
					and I'm always looking to learn new skills for each project I take on.
					I love coding little games, a sample of which you can see on my games page.
					As a web developer, I aim to make my sites as intuitive as possible,
					with a simple and elegant aesthetic. I'm available for freelance work
					or full-time employment.
				</p>
			</article>
		</section>
		<!--CONTACT SECTION-->
		<section class="container-fluid parallax" data-stellar-background-ratio="1.5" id="contact-section">
			<div class="jumbotron col-md-6 col-md-offset-3" id="form-box">
				<h2>CONTACT ME</h2>
				<form id="contact-form">
					<div class="form-group">
						<input class="form-control" type="text" id="email-address" name="email-address" placeholder="Your email">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" id="subject" name="subject" placeholder="Subject">
					</div>
					<div class="form-group">
						<textarea class="form-control" id="email-content" name="email-content" maxlength="3000" rows="5" placeholder="3000 characters max"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn">Send</button>
					</div>
				</form>
			</div>
		</section>

	</body>
</html>