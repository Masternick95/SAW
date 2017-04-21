<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Profilo</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="index.css">
	</head>
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
						<li><a href="index.php">HOME</a></li>
						<li><a href="#">PROFILO</a></li>
						<li><a href="#">INFO</a></li>	
						<?php 
							if (!isset($_SESSION["username"])) {
								echo '<li><a href="registrazione.html">REGISTRAZIONE</a></li>';
							}else{
								echo '<li id="logout" ><a href="logout.php">LOGOUT</a></li>';
							}
						?>
					</ul>
				</nav>
			</div>
			<div id="content"><br>
				<?php 
					if (isset($_SESSION["username"])) {
						echo '<h1 style="text-align: center">Benvenuto nella pagina profilo</h1>';
						echo '<h2 style="text-align: left">I miei dati:</h2>';
						echo 
							'<p id="dati_utente" style="text-align: left">
								Nome: '.$_SESSION["nome"].'<br>
								Cognome: '.$_SESSION["cognome"].'<br>
								Data di nascita: '.$_SESSION["data"].'<br>
								Indirizzo: '.$_SESSION["indirizzo"].'<br>
								Cap: '.$_SESSION["cap"].'<br>
								Username: '.$_SESSION["username"].'<br>
								Email: '.$_SESSION["email"].'</p>';
					} else {
						echo '<h1 style="text-align: center">Registrati o loggati</h1>';
					}
				?>
			<div>
		<div id="footer"><footer>Copyright @NAN</footer></div>
		</div>
	</body>
</html>
