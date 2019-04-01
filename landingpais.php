<?php
$v1 = $_POST['variable1'];
require_once 'dbconfig.php';
// Get boxers form the database
$boxer = mysqli_query($conn, "SELECT id_ciudad, nombre_ciudad, desc_ciudad, foto_ciudad FROM ciudad WHERE ciudad.id_pais=$v1 ORDER BY nombre_ciudad ASC");
$boxer2 = mysqli_query($conn, "SELECT id_pais, nombre_pais, desc_pais, foto_pais FROM pais WHERE id_pais=$v1 ORDER BY nombre_pais ASC");
?>
<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>TOURISAPP - LUGARES</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<!-- Note: The "styleN" class below should match that of the banner element. -->
					<header id="header" class="alt style2">
						<a href="index.php" class="logo"><strong>TOURISAPP</strong> <span>by M&J</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.php">Home</a></li>
							<li><a href="landing.php">Landing</a></li>
							<li><a href="generic.php">Generic</a></li>
							<li><a href="elements.php">Elements</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="#" class="button primary fit">Get Started</a></li>
							<li><a href="#" class="button fit">Log In</a></li>
						</ul>
					</nav>

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
					<section id="banner" class="style2">
						<div class="inner">
							<span class="image">
								<img src="images/pic07.jpg" alt="" />
							</span>
							<header class="major">
							<?php   while ($row = mysqli_fetch_array($boxer2)){ ?>
								<h1><?php echo $row['nombre_pais']; ?></h1>
										<?php }; ?>  
							</header>
							<div class="content">
							<p>Informacion relevante estilo guia,<br />
								Fotografias, historia y valoracion de otros usuarios</p>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
							
							</section>

					   
					</section>
						<!-- Two -->
						<form action="landingciudad.php" method="post">
							<section id="two" class="spotlights">
							<?php  while ($row = mysqli_fetch_array($boxer)){ ?>
								<section>
									<a href="landingciudad.php" class="image">
										<img src="images/<?php echo $row['foto_ciudad']; ?>" alt="" data-position="center center"/>
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3><?php echo $row['nombre_ciudad']; ?></h3>
											</header>
											<p><?php echo $row['desc_ciudad']; ?></p>
											<ul class="actions">
												<li><button name="variable2" value=<?php echo $row['id_ciudad']; ?> type="submit">Llevame Alli</button></li>
											</ul>
										</div>
									</div>
									</section>
							<?php }; ?>
							</section>  
							</form>
						

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">information@untitled.tld</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(000) 000-0000 x12387</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Address</h3>
										<span>1234 Somewhere Road #5432<br />
										Nashville, TN 00000<br />
										United States of America</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>