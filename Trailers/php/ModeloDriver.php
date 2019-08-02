+-<?php
require("conect.php");
class ListaTrailers{

    function AgregarDriver($datos){
        $conexion = new ConexionBD();
        $idCone = $conexion -> Conectar();
        $sql = "INSERT INTO trailers(iddriver,name,lastname,identificacion) VALUES ('$datos[0]','$datos[1]', '$datos[2]','$datos[3]')";
        $query = mysqli_query($idCone,$sql);
        if($query)echo 1;else echo 2;
    }
    function MostrarDrivers(){
        $conexion = new ConexionBD();
        $idCone = $conexion ->Conectar();
        $sql = "SELECT IDTrailer,tnumber FROM Trailers";
        $query = mysqli_query($idCone,$sql);
        $resultado = array();
        while($F  = mysqli_fetch_array($query))$resultado[]  = $F;
        return($resultado);   
    }*.
    /    
    function MostrarTrailer($id){
        $conexion = new ConexionBD();
        $idCone = $conexion ->Conectar();
        $sql = "SELECT tnumber,company FROM Trailers Where IDTrailer  =".$id;
        $query = mysqli_query($idCone,$sql);
        $resultado = array();
        while($F  = mysqli_fetch_array($query))$resultado[]  = $F;
        return($resultado);   
    }
}
?>