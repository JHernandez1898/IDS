<?php
require("conect.php");
class ListaTrailers{

    function AgregarTrailer($datos){
        $conexion = new ConexionBD();
        $idCone = $conexion -> Conectar();
        $sql = "INSERT INTO trailers(IDTnumber, company) VALUES ('$datos[0]','$datos[1]')";
        $query = mysqli_query($idCone,$sql);
        if($query)echo 1;
        else throw new Exception(mysqli_error($idCone));
    }
    function MostrarTrailers(){
        $conexion = new ConexionBD();
        $idCone = $conexion ->Conectar();
        $sql = "SELECT IDTnumber FROM Trailers";
        $query = mysqli_query($idCone,$sql);
        $resultado = array();
        while($F  = mysqli_fetch_array($query))$resultado[]  = $F;
        return($resultado);   
    }
    function MostrarTrailer($id){
        $conexion = new ConexionBD();
        $idCone = $conexion ->Conectar();
        
        $sql = "SELECT company FROM Trailers Where IDTNumber = '".$id."'";
        $query = mysqli_query($idCone,$sql);
        $resultado = array();
        while($F  = mysqli_fetch_array($query))$resultado[]  = $F;
        return($resultado);   
    }
}
?>