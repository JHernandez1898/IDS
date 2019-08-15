<?php
require("conect.php");
class ListaDrivers{

    function AgregarDriver($datos){
        $conexion = new ConexionBD();
        $idCone = $conexion -> Conectar();
        $sql = "INSERT INTO drivers  VALUES ('$datos[0]','$datos[1]', '$datos[2]')";
        $query = mysqli_query($idCone,$sql);
        if($query)echo 1;
        else throw new  Exception(mysqli_error($idCone));
    }
    function MostrarDrivers(){
        $conexion = new ConexionBD();
        $idCone = $conexion ->Conectar();
        $sql = "SELECT IDDriver FROM Drivers";
        $query = mysqli_query($idCone,$sql);
        $resultado = array();
        while($F  = mysqli_fetch_array($query))$resultado[]  = $F;
        return($resultado);   
    }    
    function MostrarDriver($id){
        $conexion = new ConexionBD();
        $idCone = $conexion ->Conectar();
        $sql = "SELECT concat(name,' ', lastname) as nombrecompleto from drivers Where IDDriver  =".$id;
        $query = mysqli_query($idCone,$sql);
        $resultado = array();
        while($F  = mysqli_fetch_array($query))$resultado[]  = $F;
        return($resultado);   
    }
}
?>