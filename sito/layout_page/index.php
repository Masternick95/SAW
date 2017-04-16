<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Homepage</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="index.css">
		<link rel="stylesheet" href="login_embedded.css">
		<script src="./script/originale/login.js"></script>
		<script src="./script/originale/cambio_pagine.js"></script>
	</head>
	<script>
		function initMap() {
			// Create a map object and specify the DOM element for display.
			var map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: 44.402016, lng: 8.969922},
			scrollwheel: false,
			zoom: 8
			});
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0W3mlTakNctxFJL2RRks8FRIbvFsoENY&callback=initMap"async defer></script>
	<body>
		<div class="container">
			<div class="testata">
				<div class="social_icons">
					<a href="https://www.facebook.com/nicolo.fajette?fref=ts" target="_blank" class="social_a"><img src="./img/facebook_icon.png" alt="Facebook link" /></a>
					<a href="https://twitter.com/andregrifone" target="_blank" class="social_a"><img src="./img/twitter_icon.png" alt="Twitter link" /></a>
					<a href="https://www.instagram.com/borgioli.niccolo/" target="_blank" class="social_img"><img src="./img/instagram_icon.png" alt="Instagram link" /></a>
					<a href="http://www.comune.genova.it" target="_blank"><img src="./img/comune.png" id="logo_comune" alt="Comune di Genova link"></a>
				</div>
				<div class="logo">
					<a href="index.php"><img src="./img/logo1.png" id="logo_img" alt="Logo"></a>
				</div>
				<nav>
					<ul id="menu">
						<li><a href="#">HOME</a></li>
						<li><a href="profilo.php">PROFILO</a></li>
						<li><a href="#">INFO</a></li>
						<?php
							if (!isset($_SESSION["username"])) {
								echo '<li><a href="registrazione.html">REGISTRAZIONE</a></li>';
							}else{
								echo '<li id="logout"><button ><a href="logout.php">LOGOUT</a></button></li>';
							}
						?>
					</ul>
				</nav>
			</div>
			<div id="content"><br>				
				<div id="testo" <?php if (isset($_SESSION["username"])) { echo 'style="margin-left:20vw"';}?>>
					<p id="pagina_testo">
						&ldquo;&Egrave; una citt&agrave; di carta. Guardala: guarda tutti quei viottoli, quelle strade che girano su se stesse, quelle case che sono state costruite per cadere a pezzi. Tutte quelle persone di carta che vivono nelle loro case di carta, che si bruciano il futuro pur di scaldarsi. Tutti quei ragazzini di carta che bevono birra che qualche cretino ha comprato loro in qualche discount di carta. Cose sottili e fragili come carta. E tutti altrettanto sottili e fragili. Ho vissuto qui per diciotto anni e non ho mai incontrato qualcuno che si preoccupasse delle cose che contano davvero.&rdquo;<br>
					<cite>Citt&agrave; di Carta</cite>
					</p>
					<form id="change_text">
						<input type="radio" name="page" value="1" onclick="pages(1)" checked><input type="radio" name="page" onclick="pages(2)" value="2"><input type="radio" name="page" onclick="pages(3)" value="3">
					</form>
				</div>	
				<?php
					if (!isset($_SESSION["username"])) {
					echo
						'<div class="form_container">
							<form onsubmit="return validate()" id="form" method="POST" action="login.php">
								LOGIN<br><br>
								<div class="form-group">
									<label for="email" class="form_group_label">Email:</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
								</div>
								<div class="form-group">
									<label for="pwd" class="form_group_label">Password:</label>
									<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" required>
								</div>
								<div class="checkbox">
									<label class="checkbox_label"><input type="checkbox" name="remember"> Remember me</label>
								</div>
								<button type="submit" class="button">Submit</button><br><br>
								<div id="msg"></div>
							</form>
						</div>';
					} else {
						echo '<div id="map"></div>';
					}
				?>
			</div>
		</div>
		<footer>Copyright @NAN</footer>
	</body>
</html>
