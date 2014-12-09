<?php 
function Sesion()
{
if (isset($_SESSION['logged'])) {
	require"vistas/administracion.php";	
}
else{
	require"vistas/login.php";

}
}
 