<?php

$host="localhost";
$username="stor";
$password="70495534";
$database="stor_djtokiobd";

$connect=@mysql_connect($host, $username, $password);
$dbselect=@mysql_select_db($database);
$acentosandtildes=@mysql_query("SET NAMES 'UTF-8'");

if (!$connect) {
	echo "<script type='text/javascript'>
	console.log('Error  en la conexion');</script>";
}
if (!$dbselect) {
	echo "<script type='text/javascript'>
	console.log('Error  en la conexion a la bd');</script>";
}
