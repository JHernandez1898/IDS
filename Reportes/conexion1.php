<?php
function conectar(){
	$user="masterIDS";
	$pass="masterIDS";
	$server="70.124.112.243";
	$db= "Aduana";
	$con=mysql_connect($server,$user,$pass) or die ("Error al conectar a la base de datos mysql".mysql_error());
	mysql_select_db($db,$con);
	
	return $con;
	}
?>