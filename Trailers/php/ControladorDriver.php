<?php 
require("ModeloTrailer.php");
$funcion =  $_POST["funcion"];
$lstTrailers  =  new ListaTrailers();
switch($funcion){
    case "RegistrarTrailer":
        if(isset($_POST["driverid"]))$driverid = $_POST["driverid"];else $driverid = -1;
        if(isset($_POST["drivercompany"]))$drivercompany = $_POST["drivercompany"];else $drivercompany = -1;
        $ruta = "img/trailers/".$driverid".jpg";
        if($driverid !=-1 or $drivercompany != -1){
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