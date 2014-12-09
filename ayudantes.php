<?php

function vista($plantilla, $vars = array()){
	require "vistas/$plantilla.pl.php";
}

function controlador($url){
	$file = "controlador/$url.php";
	if (file_exists($file))
	{
		require $file;
	}
	else
	{
		$url="inicio";
		$file = "controlador/$url.php";
		require $file;
	}
}