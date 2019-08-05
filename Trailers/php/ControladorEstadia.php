<?php 
require("ModeloEstadia.php");
$funcion =  $_POST["funcion"];
$lstEstadia  =  new ListaEstadia();
switch($funcion){
    case "RegistrarEstadia":
        try{
            $idEntrada = $_POST["identrada"];
            $platenumber = $_POST["platenumber"];
            $lugar = $_POST["placement"];
            $state = $_POST["state"];
            $space = $_POST["space"];
            $datos = array($idEntrada,$platenumber,$lugar,$space,$state);
            $respuesta = $lstEstadia-> AgregarEstadia($datos);
        }
        catch(Exception $e){ echo "Error:".$e->getMessage();   }                                   
    break;
    case "MostrarEstadiasYard":
        $resultado = $lstEstadia-> MostrarEstadiasYard();
        echo json_encode($resultado);
    break;
    case "MostrarEstadiasDock":
        $resultado = $lstEstadia-> MostrarEstadiasDock();
        echo json_encode($resultado);
    break;
}
?>