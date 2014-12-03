<?php 

	include 'connection/connection.php';

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DJ Tokio | INICIO</title>
	<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
	<style>
		section.djtokio{
			<?php include'contenido/editable/parallax/parallax.php'; ?>
			}
	</style>
	<link rel="stylesheet" href="css/stylus.css" />
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
</head>
<body>
	<header>
		<figure>
			<?php include 'contenido/editable/logo/logo.php';?>
		</figure>
		<nav>
			<ul>
				<li id="musica"><img src="sources/images/recursos/audio_icono.png" alt="audio" />CANCIONES</a></li>
				<li id="videos"><img src="sources/images/recursos/audio_icono.png" alt="audio" />VÍDEOS</a></li>
				<li id="fotos"><img src="sources/images/recursos/audio_icono.png" alt="audio" />FOTOS</a></li>
				<li id="contacto"><img src="sources/images/recursos/audio_icono.png" alt="audio" />CONTACTO</a></li>
			</ul>
		</nav>
		
		<?php include 'contenido/editable/musica/musica.php';?>

	</header>
	<section class="djtokio" id="djtokiocabezera" data-type="parallax_section" data-speed="10">
		<article>
			<span><u>Hola, soy DJ tokio y compongo buena musica, ahora puedes poner información sobre ti aqui tokio :)</u></span>
		</article>
	</section>
	<section id="contenedor">
		<?php include 'contenido/content/inicio/inicio.php';?>
	</section>
	<footer>
		
	</footer>
</body>
</html>