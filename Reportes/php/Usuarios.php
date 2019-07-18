<?php 
require("ModeloUsuarios.php");
$funcion = $_POST["funcion"];
$lstUsuarios =  new lstUsuarios();
switch($funcion){
    case "MostrarUsuarios":
        $resultado = array();
        $resultado = $lstUsuarios->MostrarUsuarios();
        echo json_encode($resultado);
        break;
    case "ElegirUsuario":
        $numero = $_POST["numero"];
        $resultado = array();
        $resultado = $lstUsuarios->ElegirUsuario($numero);
        echo json_encode($resultado);
        break;
    case "ModificarUsuario":
        $numeroviejo = $_POST["numeroviejo"];
        $nombre = $_POST["nombre"];
        $pass = $_POST["pass"];
        $numero = $_POST["num"];
        $estatus = $_POST["estatus"];
        $datos  = array($nombre,$pass,$numero,$estatus);
        $resultado = $lstUsuarios->ModificarUsuario($datos,$numeroviejo);
        echo $resultado;
        break;
        
}
?>