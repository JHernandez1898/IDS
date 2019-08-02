<?php 
 function conectarlocalmente(){
	  $strHost ="localhost";
  $strUsuario = "root";
  $strClave = "";
  $strBaseDeDatos = "ids";
  $idCone = mysqli_connect ($strHost, $strUsuario, $strClave,$strBaseDeDatos) or
           die ("Error conectando al servidor $host con el
                 nombre de usuario $usuario");

  return $idCone;
 }
 function conexion(){
  $serverName = "70.124.112.243"; //serverName\instanceName
$connectionInfo = array( "Database"=>"Aduana", "UID"=>"masterIDS", "PWD"=>"masterIDS");
$conn = sqlsrv_connect($serverName, $connectionInfo) ;

if( $conn ) {
     echo "";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
	 
}

  return $conn;
	 
 }