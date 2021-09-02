<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Twisted Dragon Forge - Custom Blacksmithing</title>
		
		<meta name="description" content="Twisted Dragon Forge Custom Blacksmithing. Blades, costumes, home decor" />
		<meta name="keywords" content="Twisted Dragon Forge Custom Blacksmithing blades knives cosplay costumes home decor">
		<meta name="Content-Language" content="en">
		<meta name="Subject" content="Twisted Dragon Forge Custom Blacksmithing. Blades, costumes, home decor">
		<meta name="Copyright" content="Twisted Dragon Forge">
		<meta name="Author" content="Twisted Dragon Forge">
		<meta name="Category" content="portfolio blacksmith custom blades">
		
		<link rel="icon" type="image/x-icon" href="img/logo.png" />

		<!-- CSS -->
		<link rel="stylesheet" href="css/jquery.fullPage.css" type="text/css"/>
		<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css">
		<link rel="stylesheet" href="css/styles.css" type="text/css"/>
		<link rel="stylesheet" href="css/styles-mobile.css" type="text/css" media="only screen and (min-width:100px) and (max-width:960px)" />
		<link href='https://fonts.googleapis.com/css?family=Barrio|Lato:400,900,700,300,100' rel='stylesheet' type='text/css'>
	</head>

	
	<body>	
		<!-- Left-hand corner logo -->
		<div class="home">
			<a href="index.php">
				<img src="img/fulllogo.png" alt="Twisted Dragon Forge" height="100px"/>
			</a>
		</div>

		<!-- Right-hand corner expandable menu -->
		<ul class="menu">
			<li><a href="index.php" class="linkeffect">Home</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="#!" class="open-contact-form">Contact</a></li>
		</ul>
		<div class="menu-picto">
			<p>Menu</p>
			<i class="fa fa-bars" aria-hidden="true"></i>
		</div>
		
		<div id="fullpage">
			<!-- Home page / landing screen -->
			<div class="section active container" data-anchor="onepage" id="containerhomeindex">
				<div class="container-principal-text">
					<h1>Twisted Dragon Forge</h1>
					<h2>Custom blacksmithing</h2>
				</div>
				<!-- Granim gradient page -->
				<canvas id="canvas-image"></canvas>
			</div>

			<!-- Second page, FSU axe -->
			<div class="section container" data-anchor="twopage">
				<div class="container-principal-text-real">
					<h2>CUSTOMIZED GIFTS</h2>
					<h3>knives, swords, axes, you name it!</h3>
					<a href="gallery.php" class="button">See more</a>
				</div>
				<img src="img/homebg/fsu.jpg" alt="custom knives, swords, axes"/>
			</div>

			<!-- Third page, Captain shield -->
			<div class="section container"  data-anchor="threepage">
				<div class="container-principal-text-real">
					<h2>COSTUME PIECES</h2>
					<h3>shields, weapons, or full suits</h3>
					<a href="gallery.php" class="button">See more</a>
				</div>
				<img src="img/homebg/captright.jpg" alt="Captain America's Shield"/>
			</div>

			<!-- Fourth page, COD table -->
			<div class="section container"  data-anchor="fourpage">
				<div class="container-principal-text-real">
					<h2>HOME DECOR</h2>
					<h3>inspired by your favorite shows, movies, etc.</h3>
					<a href="gallery.php" class="button">See more</a>
				</div>
				<img src="img/homebg/cod.jpg" alt="Call of Duty coffee table"/>
			</div>
			

			<!-- Scroll instructions on landing page -->
			<div class="indicators-arrow">
				<a class="arrow-down indicators-arrow-move" href="#">
					Scroll using mouse wheel or up/down arrow keys<br />
					<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
				</a>
			</div>

		</div>


		<!-- Right-hand side navigation buttons -->
		<ul id="navigation">
			<li data-menuanchor="onepage" class="active"><a href="#onepage">01</a></li>
			<li data-menuanchor="twopage"><a href="#twopage">02</a></li>
			<li data-menuanchor="threepage"><a href="#threepage">03</a></li>
			<li data-menuanchor="fourpage"><a href="#fourpage">04</a></li>
		</ul>

		<!-- Left-hand side scrolling buttons -->
		<div class="arrow-container">
			<i class="fa fa-arrow-up arrow-up" aria-hidden="true"></i>
			<i class="fa fa-arrow-down arrow-down" aria-hidden="true"></i>
		</div>

		<!-- Pop-up contact form z-index-->
		<div class="pop-up-background"></div>

		<div class="contact-form">
			<h2>CONTACT CARL</h2>
			<h3>ESTIMATE REQUESTS - GENERAL INQUIRIES</h3>
			<form action="contact.php" method="post" id="contact-form">
				<div class="form-div">
					<label>Name *</label>
					<input name="name" type="text" id="name-form"/>
				</div>
				<div class="form-div">
					<label>Phone</label>
					<input name="phone" type="text"/>
				</div>
				<div class="form-div">
					<label>E-mail *</label>
					<input name="mail" type="text" id="email-form"/>
				</div>
				<div class="form-div form-div-unique">
					<label>Subject *</label>
					<input name="subject" type="text" id="object-form"/>
				</div>
				<div class="form-div form-div-unique">
					<label>Details *</label>
					<textarea name="detail" id="details-form"></textarea>
				</div>
				<input class="button" placeholder="Send" type="submit" value="Send">Submit</input>
			</form>
			<i id="close-pop-up-form" class="fa fa-times" aria-hidden="true"></i>
		</div>

		<!-- Loading animation -->
		<div class="loading">
			<div class="loadingshadow loadingleft"></div>
			<div class="loadingshadow loadingright"></div>
			<div class="loadingcontainer">
				<div class="loadingcarre"></div>
				<p>Smelting...</p>
			</div>
		</div>

		<!-- Scripts -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
		<script type="text/javascript" src="js/granim.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
	</body>
</html>