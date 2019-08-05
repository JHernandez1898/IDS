<?php 
require("ModeloConsigna.php");
$funcion =  $_POST["funcion"];
$lstConsigna  =  new ListaConsigna();
switch($funcion){
    case "RegistrarConsigna":
        try{
            $consigna = $_POST["consigna"];
            $respuesta = $lstConsigna-> AgregarConsigna($consigna);
        }
        catch(Exception $e){ echo "Error:".$e->getMessage();   }                                   
    break;
    case "MostrarConsigna":
        $resultado = $lstConsigna-> MostrarConsignas();
        echo json_encode($resultado);
    break;
}
?>