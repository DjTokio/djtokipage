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
</body>
</html>