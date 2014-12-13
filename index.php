<?php
//Se incluye la configracion de la aplicacion
require 'configuracion.php';
require 'ayudantes.php';

//controlador de paginas
if (empty($_GET['url'])) {
	$_GET['url']="inicio";
}
controlador($_GET['url']);