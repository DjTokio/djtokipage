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
<body>
	<header>
		<figure class="logo">
			<img src="sources/images/logo/logo.png" alt="logo">
		</figure>
		<nav class="computador">
			<ul>
				<li><a href="?url=musica" class="icon-musica">MUSICA</a></li>
				<li><a href="?url=videos" class="icon-video">VIDEOS</a></li>
				<li><a href="?url=fotos" class="icon-fotos">FOTOS</a></li>
			</ul>
		</nav>
		<nav class="movil">
			<ul>
				<li><a href="#" class="icon-menu"></a>
					<ul>
						<li><a href="#" class="icon-musica">MUSICA</a></li>
						<li><a href="#" class="icon-video">VIDEOS</a></li>
						<li><a href="#" class="icon-fotos">FOTOS</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>
	<div class="music">
		<div id="reproductorBox">
		</div>
		<select  id = "selectTrack" multiple onchange="cambiarTrack(this.options[this.selectedIndex]);">
			<option path="music/a.mp3">Invierno del 92</option>
			<option path="music/b.mp3">El dia que artigas se emborachó</option>
			<option path="music/c.mp3">Invierno del 92</option>
			<option path="music/d.mp3">El dia que artigas se emborachó</option>

		</select>
		<script>cargarReproductor();</script>
	</div>
</body>
</html>