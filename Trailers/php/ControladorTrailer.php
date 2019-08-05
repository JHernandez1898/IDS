<?php 
require("ModeloTrailer.php");
$funcion =  $_POST["funcion"];
$lstTrailers  =  new ListaTrailers();
switch($funcion){
    case "RegistrarTrailer":
        try{
        $numero = $_POST["tranumber"];
        $compania = $_POST["tracompania"];
        $ruta = "img/trailers/".$numero.".jpg";
        $datos =  array($numero,$compania,$ruta);
        $respuesta = $lstTrailers -> AgregarTrailer($datos);
        }
        catch(Exception $e){
            echo "error: ".$e->getMessage();
        }
        
    break;
    case "MostrarTrailers":
        $resultado = $lstTrailers -> MostrarTrailers();
        echo json_encode($resultado);
    break;
    case "MostrarTrailer":
        $id = $_POST["idtra"];
        $resultado = $lstTrailers->MostrarTrailer($id);
        echo json_encode($resultado);
        break;
}

?>