<?php
class lstUsuarios{
    public function MostrarUsuarios(){
        require("../conect.php");
        $idCone = conectarlocalmente();
        $sql = "SELECT nombre,password,numero,case estatus when 1 then 'Activo' else 'Inactivo' end as Estatus FROM usuarios ";
        $query = mysqli_query($idCone,$sql);
        $resultado = array();
        while($F = mysqli_fetch_array($query))$resultado[] = $F;
        return $resultado;
    }
    public function ElegirUsuario($numero){
        require("../conect.php");
        $idCone = conectarlocalmente();
        $sql = "SELECT nombre,password,numero,case estatus when 1 then 'Activo' else 'Inactivo' end as Estatus FROM usuarios where numero ='$numero'";
        $query = mysqli_query($idCone,$sql);
        $resultado = array();
        while($F = mysqli_fetch_array($query))$resultado[] = $F;
        return $resultado;
    }
    public function ModificarUsuario($datos,$numero){
        require("../conect.php");
        $idCone = conectarlocalmente();
        $contra= MD5($datos[1]);
        $sql= "UPDATE usuarios SET nombre = '$datos[0]',password ='$contra',numero ='$datos[2]',estatus ='$datos[3]' WHERE numero = '$numero'";
        $query = mysqli_query($idCone,$sql);
    
        if($query)return 1;
        else return mysqli_error($idCone);
    }
    public function CrearUsuario($datos){
        require("../conect.php");
        $idCone = conectarlocalmente();
        $contra= MD5($datos[1]);
        $sql= "INSERT INTO usuarios (nombre,password,numero,estatus) VALUES ('$datos[0]','$contra','$datos[2]','$datos[3]')";
        $query = mysqli_query($idCone,$sql);
        if($query)return 1;
        else return mysqli_error($idCone);
    }
}
?>