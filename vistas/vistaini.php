<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="La pagina del mejor DJ del mundo llamado Dj tokio el cual genera las mejores mezclas propias" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DJ Tokio | INICIO</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/stylus.css">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/reproductor.js"></script>	
</head>
<body>
	<header>
		<figure class="logo">
			<a href="?url=inicio"><img src="sources/images/logo/logo.png" alt="logo"></a>
		</figure>
		<nav class="computador">
			<ul>
				<li><a href="?url=musica" class="icon-musica">MUSICA</a></li>
				<li><a href="?url=fotos" class="icon-video">MULTIMEDIA</a></li>
			</ul>
		</nav>
		<nav class="movil">
			<ul>
				<li><span class="icon-menu"></span>
					<ul>
						<li><a href="?url=musica" class="icon-musica">MUSICA</a></li>
						<li><a href="?url=fotos" class="icon-video">MULTIMEDIA</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>
		<?php vista($_GET['url']) ?>
	<footer>
		<figure class="logo">
			<img src="sources/images/logo/logof.png" alt="logo">
		</figure>
		<div class="icons">
			<a href="" class="icon-facebook fbrd"></a>
			<a href="" class="icon-twitter"></a>
			<a href="" class="icon-youtube"></a>
		</div>
		<div>
			<p>
				 <strong>Copyright 2014 Dj Tokio Music</strong>
			</p>
		</div>
	</footer>
</body>
</html>