<?php 
require("ModeloEntrada.php");
$funcion =  $_POST["funcion"];
$lstEntrada  =  new ListaEntrada();
switch($funcion){
    case "RegistrarEntrada":
        try{
            $tnumber = $_POST["tnumber"];
            $driverid = $_POST["driverid"];
            $trucknumber = $_POST["trucknumber"];
            $consigna = $_POST["consigna"];
            $sealnumber = $_POST["sealnumber"];
            $LDMT = $_POST["LDMT"];
            $tipo = $_POST["tipo"];

            $datos = array($trucknumber,$tnumber,$driverid,$sealnumber,$LDMT,$tipo,$consigna);
            $respuesta = $lstEntrada-> AgregarEntrada($datos);
        }
        catch(Exception $e){ echo "Error:".$e->getMessage();   }                                   
    break;
    case "MostrarEntradas":
        $resultado = $lstEntrada-> MostrarEntradas();
        echo json_encode($resultado);
    break;
    case "getid":
        $id  = $_POST['id'];
        $resuldado = $lstEntrada -> getID($id);
        break; 
    case "MostrarConsignas":
        $resultado  =  $lstEntrada ->MostrarConsignas();
        echo json_encode($resultado);
        break;
}
?>