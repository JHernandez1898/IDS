<?php 
date_default_timezone_set("America/Mexico_City");
class ConexionBD {
     function Conectar(){
         $strHost ="localhost";
         $strUsuario = "root";
         $strClave = "";
         $strBaseDeDatos = "idstrailers";
         $idCone = mysqli_connect ($strHost, $strUsuario, $strClave,$strBaseDeDatos) or
           die ("Error conectando al servidor $host con el
                 nombre de usuario $usuario");  
         return $idCone;
     }
}
?>