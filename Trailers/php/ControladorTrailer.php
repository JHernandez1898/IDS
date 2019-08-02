<?php 
require("ModeloTrailer.php");
$funcion =  $_POST["funcion"];
$lstTrailers  =  new ListaTrailers();
switch($funcion){
    case "RegistrarTrailer":
        if(isset($_POST["tranumber"]))$numero = $_POST["tranumber"];else $numero = -1;
        if(isset($_POST["tracompania"]))$compania = $_POST["tracompania"];else $compania = -1;
        $ruta = "img/trailers/".$numero.".jpg";
        if($numero !=-1 or $compania != -1){
            $datos =  array($numero,$compania,$ruta);
            $respuesta = $lstTrailers -> AgregarTrailer($datos);
        }else echo "Debe de agregar un número o compañia";
        
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