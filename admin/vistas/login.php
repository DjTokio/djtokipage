<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Admin tokio</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/stylus.css">
</head>
<body>
	<form>
		<p class="admin">Admin Panel</p>
		<p>
			<input type="text" name="usuario" id="usuario" placeholder="Usuario"/>
		</p>
		<p>
			<input type="password" name="password" id="password" placeholder="Contraseña" />
		</p>
		<input type="button" value="Entrar" name="Entrar" />
	</form>
	<?php echo "$_GET[url]"; ?>
</body>
</html>