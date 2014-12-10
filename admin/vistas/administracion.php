<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Admin tokio</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/stylsadm.css">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
</head>
<body>
	<header>
		<p>
			Bienvenido <?= $_SESSION['username'] ?>
		</p>
		<nav>
			<ul>
				<li>
					<a href="#">
						Configuracion del servidor
					</a>
				</li>
				<li>
					<span>
						Configuracion de la web
					</span>
					<ul>
						<li><a href="#">Cambio de imagenes</a></li>
						<li><a href="#">Cambio de texto</a></li>
						<li><a href="#">Cambio de redes sociales</a></li>
					</ul>
				</li>
				<li>
					<a href="#">
						Configuracion del perfil
					</a>
				</li>
				<li>
					<a href="salir.php">
						Salir
					</a>
				</li>
			</ul>
		</nav>
	</header>
	<section>
		<h2>
			Este es el panel de administración
		</h2>
		<p>
			A este panel solo pueden acceder los administradores de la web
		</p>
		<h2>
			¿Que se puede hacer en este panel?
		</h2>
		<p>
			En este panel de administración puede manejar las imagenes, los textos de la web, el cambio de redes sociales y el cambio de servidor
		</p>
		<h2>
			¿Como funciona el cambio de textos, imagenes y demás?
		</h2>
		<p>
			Lo intente hacer lo más fácil y sencillo posible para el entendimiento del usuario, así si quieren cambiar una imagen, solo tienen que ver que imagen se cambiara y que parte de la web cambiara. Se recomiendan imagenes de 1080Pixeles(Hd).
		</p>
	</section>
</body>
</html>