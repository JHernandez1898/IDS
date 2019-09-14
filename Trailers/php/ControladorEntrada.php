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
            $img1 = $_FILES["img1"]["tmp_name"];
            $img2 = $_FILES["img2"]["tmp_name"];
            $img3 = $_FILES["img3"]["tmp_name"];
            $img4 = $_FILES["img4"]["tmp_name"];
            $img5 = $_FILES["img5"]["tmp_name"];
            $datos = array($trucknumber,$tnumber,$driverid,$sealnumber,$LDMT,$tipo,$consigna);
            $respuesta = $lstEntrada-> AgregarEntrada($datos);
            $identrada = $lstEntrada->Pop();
            $img =array($identrada,$img1,$img2,$img3,$img4,$img5);
            $lstEntrada->SubirFotos($img); 
            echo json_encode($respuesta);
            
           
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