<?php 
function Sesion()
{
if (isset($_SESSION['logged'])) {
		
}
else{
	require"vistas/login.php";

}
}
 