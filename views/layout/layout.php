<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Merveilleux-SHOP</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/logoM.png">
	<link rel="stylesheet" href="css/bootstrap.css">	
    <link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/magnific-popup.min.css')}}">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/niceselect.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/flex-slider.min.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/slicknav.min.css">
	<link rel="stylesheet" href="css/reset.css">

	
	
</head>
<body class="js">	
	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +243 970 915 187</li>
								<li><i class="ti-email"></i> merveilleux.shop@gmail.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-location-pin"></i>Localisation</li>
								<li><i class="ti-alarm-clock"></i> <a href="#">Délai de Livraison</a></li>
								<li><i class="ti-user"></i> <a href="#">Mon compte</a></li>
								<?php
									session_start();
									if(isset($_SESSION['nom'])){
										echo '<li><i class="ti-power-off"></i><a href="controller/DeconnexionController.php">Se Deconnecter</a></li>';
									}else{
										echo '<li><a href="index.php?page=inscription">S\'inscrire</a></li>';
										echo '<li><i class="ti-power-off"></i><a href="" data-toggle="modal" data-target="#modalPush">Se connecter</a></li>';
									}
								?>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.php"><img src="images/logoM.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Rechercher ici..." name="search">
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->

    <div>
        <?= $content; ?>
    </div>

    <!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.php"><img src="images/logoM.png" alt="#"></a>
							</div>
							<p class="text">Merveilleux-SHOP est une boutique en ligne de vente de diverse produit</p>
							<p class="call">Pour toute question contacter 24/27 et 7J/7 à ce numéro<span><a href="tel:+243970915187">+243 970 915 187</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Informations</h4>
							<ul>
								<li><a href="#">Apropos</a></li>
								<li><a href="#">Email</a></li>
								<li><a href="#">Condition d'utilisation</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Aide</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Service Client</h4>
							<ul>
								<li><a href="#">Moyen de paiement</a></li>
								<li><a href="#">Paiement</a></li>
								<li><a href="#">Retour</a></li>
								<li><a href="#">Commande</a></li>
								<li><a href="#">Confidentialite</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Contact</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>04, Av. Mr Nsolotshi Q/4 C/RUASHI</li>
									<li> LUBUMBASHI-RDC</li>
									<li>merveilleux.shop@gmail.com</li>
									<li>+243 970 915 187</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->


	<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify" role="document">
			<div class="col-lg-6 col-md-12 col-12">
            <div class="modal-content">
            <div class="col-lg-12 col-md-12 col-12">
                <h2 class="kay-item">Se connecter</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <form action="controller/ConnexionController.php" class="" method="POST">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="md-form mb-0">
                            <label for="email" class="">Email</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="md-form mb-0">
                            <label for="password" class="">Password</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button class="shadow-md btn kay-item rounded" type="submit">Se Connecter</button>
                    </div>
                </form>
            </div>

            <!--Footer-->
            <div class="modal-footer flex-center">
                <p>Vous n'avez pas de compte ? | <a href="index.php?page=login">Vous inscrire</a></p>
            </div>
        </div>
            <!--/.Content-->
        </div>
    </div>
 
	<!-- Jquery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>
</body>
</html>