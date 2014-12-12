<?php 

if (isset($_SESSION['logged'])) {
	require"vistas/imagenes.php";	
}
else{
	require"vistas/login.php";

}