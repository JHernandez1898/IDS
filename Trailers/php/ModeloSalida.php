<?php
require("conect.php");
class ListaSalidas{

    function AgregarSalida($datos){
        $conexion = new ConexionBD();
        $idCone = $conexion -> Conectar();
        $sql = "INSERT INTO salidas (IDEntrada,Hora,Fecha) VALUES ('$datos[0]','".date("H:i")."','".date("Y-m-d")."')";
        $query = mysqli_query($idCone,$sql);
        if($query)echo 1;
        else throw new  Exception(mysqli_error($idCone));
    }

}
?>