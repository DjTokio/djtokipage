<?php 
function Sesion()
{
		if (isset($_SESSION['logged'])) {
			if (!empty($_GET['conf'])) {
					$file=$_GET['conf'];
				if (file_exists("vistas/".$file.".php")) {
					require "vistas/images.php";			
				}
				else
				{
					require "vistas/administracion.php";	
				}
			}
			else
			{ 
				$_GET['conf']="index.php";
				require "vistas/administracion.php";				
			}
		}
		else{
			require"vistas/login.php";

		}
	
}

 