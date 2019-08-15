<?php 
require("ModeloDriver.php");
$funcion =  $_POST["funcion"];
$lstDrivers  =  new ListaDrivers();
switch($funcion){
    case "RegistrarDriver":
        try{
            $driverid = $_POST["driverid"];
            $drivername = $_POST["drivername"];
            $driverlastname =$_POST["driverlastname"];
            
            $datos =  array($driverid,$drivername,$driverlastname);
            $respuesta = $lstDrivers -> AgregarDriver($datos);
        }
        catch(Exception $e){ echo "error: ".$e->getMessage();   }                                   
    break;
    case "MostrarDrivers":
        $resultado = $lstDrivers -> MostrarDrivers();
        echo json_encode($resultado);
    break;
    case "MostrarDriver":
        $id = $_POST["driverid"];
        $resultado = $lstDrivers->MostrarDriver($id);
        echo json_encode($resultado);
        break;
}
?>