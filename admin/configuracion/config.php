<?php 

	$host = "localhost";
	$usuario = "root";
	$password = "izkanall45";
	$database = "djtokiodjbd";
	$connection=mysqli_connect($host, $usuario, $password, $database);
	$queryutf= mysql_query("SET NAMES 'UTF-8'");
	
