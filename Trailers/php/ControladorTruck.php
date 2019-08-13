<?php 
require("ModeloTruck.php");
$funcion =  $_POST["funcion"];
$lstTrucks  =  new ListaTrucks();
switch($funcion){
    case "RegistrarTruck":
        try{
            $trucknumber = $_POST["trucknumber"];
            $truckcompany = $_POST["truckcompany"];
            $ruta = "img/trailers/".$trucknumber.".jpg";
            $datos =  array($trucknumber,$truckcompany,$ruta);
            $respuesta = $lstTrucks -> AgregarTruck($datos);
        }
        catch(Exception $e){ echo "error: ". $e->getMessage(); }                                   
    break;
    case "MostrarTrucks":
        $resultado = $lstTrucks -> MostrarTrucks();
        echo json_encode($resultado);
    break;
    case "MostrarTruck":
        $id = $_POST["trucknumber"];
        $resultado = $lstTrucks->MostrarTruck($id);
        echo json_encode($resultado);
        break;
}

?>