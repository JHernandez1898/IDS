<?php
require("conect.php");
class ListaEntrada{

    function AgregarEntrada($datos){
        $conexion = new ConexionBD();
        $idCone = $conexion -> Conectar();
        $sql = "INSERT INTO entrada (IDTrailer,IDTruck,IDDriver,SealNumber,LDMT,EType,Hora,Fecha,IDConsignacion) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','".date("Y-m-d")."','$datos[7]')";
        $query = mysqli_query($idCone,$sql);
        if($query)echo 1;
        else throw new  Exception(mysqli_error($idCone));
    }
    function MostrarEntradas(){
        $conexion = new ConexionBD();
        $idCone = $conexion ->Conectar();
        $sql = "SELECT a.IDEntrada, c.TNumber,c.Company from entrada as a left join estadia as b on a.IDEntrada = b.IDEntrada inner join trailers as c on a.IDTrailer = c.IDTrailer  where b.IDEntrada IS null";
        $query = mysqli_query($idCone,$sql);
        $resultado = array();
        while($F  = mysqli_fetch_array($query))$resultado[]  = $F;
        return($resultado);   
    }    
  
}
?>