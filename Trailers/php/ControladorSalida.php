<?php 
require("ModeloSalida.php");
$funcion =  $_POST["funcion"];
$lstSalida  =  new ListaSalidas();
switch($funcion){
    case "RegistrarSalida":
        try{
            $idEntrada = $_POST["identrada"];
            $idestadia = $_POST["idestadia"];
            $datos = array($idEntrada,$idestadia);
            $respuesta = $lstSalida-> AgregarSalida($datos);
        }
        catch(Exception $e){ echo "Error:".$e->getMessage();   }                                   
    break;
    case "MostrarEstadiasYard":
        $resultado = $lstEstadia-> MostrarEstadiasYard();
        echo json_encode($resultado);
    break;
}
?>