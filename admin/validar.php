<?php
session_start();
require "configuracion/config.php";	
if (isset($_POST['Entrar'])=='Entrar') {
		$usuario=$_POST['usuario'];
		$password=$_POST['password'];
		if (!empty($usuario) && $password) {
			$comprobar = mysqli_query($connection, "SELECT * FROM tokio_users WHERE Adm_User ='".$usuario."' AND Adm_Pass = '".$password."'")or die(mysqli_error($connection));
			if (mysqli_num_rows($comprobar)== 1) {
				$row=mysqli_fetch_assoc($comprobar);
				$_SESSION['username'] = $row['Adm_User'];
				$_SESSION['logged'] = TRUE;
				header("Location: index.php");
			}
			else
			{
				header("Location: index.php?error=3");
			}
		}
		else
		{
			header("Location: index.php?error=2");
		}
}
else
{
	header("Location: index.php?error=1");
}