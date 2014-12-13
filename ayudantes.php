<?php

function vista($plantilla, $vars = array()){
	require "vistas/$plantilla.pl.php";
}

function controlador($url){
	$file = "controlador/$url.php";
	if (file_exists($file))
	{ 
		require "vistas/vistaini.php";
	}
	else
	{
		$url="inicio";
		$file = "controlador/$url.php";
		require "vistas/vistaini.php";
	}
}