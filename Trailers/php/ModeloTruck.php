<?php
require("conect.php");
class ListaTrucks{

    function AgregarTruck($datos){
        $conexion = new ConexionBD();
        $idCone = $conexion -> Conectar();
        $sql = "INSERT INTO Trucks(IDTKNumber, tcompany) VALUES ('$datos[0]','$datos[1]')";
        $query = mysqli_query($idCone,$sql);
        if($query)echo 1;
        else throw new Exception(mysqli_error($idCone));
    }
    function MostrarTrucks(){
        $conexion = new ConexionBD();
        $idCone = $conexion ->Conectar();
        $sql = "SELECT IDTKNumber FROM Trucks";
        $query = mysqli_query($idCone,$sql);
        $resultado = array();
        while($F  = mysqli_fetch_array($query))$resultado[]  = $F;
        return($resultado);   
    }
    function MostrarTruck($id){
        $conexion = new ConexionBD();
        $idCone = $conexion ->Conectar();
        $sql = "SELECT tcompany FROM Trucks Where IDTKNumber  =".$id;
        $query = mysqli_query($idCone,$sql);
        $resultado = array();
        while($F  = mysqli_fetch_array($query))$resultado[]  = $F;
        return($resultado);   
    }
}
?>