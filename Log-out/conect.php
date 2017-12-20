<?php 
 function conectarlocal(){
	  $strHost ="localhost";
  $strUsuario = "root";
  $strClave = "";
  $strBaseDeDatos = "ids";
  $idCone = mysqli_connect ($strHost, $strUsuario, $strClave,$strBaseDeDatos) or
           die ("Error conectando al servidor $host con el
                 nombre de usuario $usuario");

  return $idCone;
 }
 