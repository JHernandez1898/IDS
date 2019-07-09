<?php 
 function conectarlocalmente(){
	  $strHost ="localhost";
  $strUsuario = "root";
  $strClave = "123";
  $strBaseDeDatos = "ids";
  $idCone = mysqli_connect ($strHost, $strUsuario, $strClave,$strBaseDeDatos) or
           die ("Error conectando al servidor $host con el
                 nombre de usuario $usuario");

  return $idCone;
 }
 