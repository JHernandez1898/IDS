<?php
require("conect.php");
class ListaEstadia{

    function AgregarEstadia($datos){
        $conexion = new ConexionBD();
        $idCone = $conexion -> Conectar();
        $sql = "INSERT INTO estadia (IDEntrada,PlateNumber,Lugar,Espacio,Estado) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";
        $query = mysqli_query($idCone,$sql);
        if($query)echo 1;
        else throw new  Exception(mysqli_error($idCone));
    }
    function MostrarEstadiasYard(){
        $conexion = new ConexionBD();
        $idCone = $conexion ->Conectar();
        $sql = "SELECT a.IDEntrada, b.IDEstadia,b.Espacio,c.Company,c.IDTNumber,b.PlateNumber,a.Fecha ,datediff(now(),a.Fecha) as daysonyard from entrada as a left join estadia as b on a.IDEntrada = b.IDEntrada inner join trailers as c on a.IDTNumber = c.IDTNumber left join salidas as d on b.IDEntrada = d.IDEntrada where b.Lugar = 'Yard' and d.IDEntrada is null";
        $query = mysqli_query($idCone,$sql);
        $resultado = array();
        while($F  = mysqli_fetch_array($query))$resultado[]  = $F;
        return($resultado);   
    } 
    function MostrarEstadiasDock(){
        $conexion = new ConexionBD();
        $idCone = $conexion ->Conectar();
        $sql = "SELECT a.IDEntrada, b.IDEstadia,b.Espacio,c.Company,c.IDTNumber,b.PlateNumber,a.Fecha ,datediff(now(),a.Fecha) as daysonyard from entrada as a left join estadia as b on a.IDEntrada = b.IDEntrada inner join trailers as c on a.IDTNumber = c.IDTNumber left join salidas as d on b.IDEntrada = d.IDEntrada where b.Lugar = 'Dock' and d.IDEntrada is null";
        $query = mysqli_query($idCone,$sql);
        $resultado = array();
        while($F  = mysqli_fetch_array($query))$resultado[]  = $F;
        return($resultado);   
    }
  
}
?>