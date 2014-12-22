<?php

$host="localhost";
$username="root";
$password="izkanall45";
$database="tokiodjbd";

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
