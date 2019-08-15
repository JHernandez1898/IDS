<?php
require("conect.php");
class ListaEntrada{

    function AgregarEntrada($datos){
        $conexion = new ConexionBD();
        $idCone = $conexion -> Conectar();
        $sql = "INSERT INTO entrada (IDTKNumber,IDTNumber,IDDriver,SealNumber,LDMT,EType,Hora,Fecha,Consignacion) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','".date("H:i")."','".date("Y-m-d")."','$datos[6]')";
        $query = mysqli_query($idCone,$sql);
        if($query)echo 1;
        else throw new  Exception(mysqli_error($idCone));
    }
    function MostrarEntradas(){
        $conexion = new ConexionBD();
        $idCone = $conexion ->Conectar();
        $sql = "SELECT a.IDEntrada, c.IDTNumber,c.Company from entrada as a left join estadia as b on a.IDEntrada = b.IDEntrada inner join trailers as c on a.IDTNumber = c.IDTNumber  where b.IDEntrada IS null";
        $query = mysqli_query($idCone,$sql);
        $resultado = array();
        while($F  = mysqli_fetch_array($query))$resultado[]  = $F;
        return($resultado);   
    }    
    function Pop(){
        $conexion = new ConexionBD();
        $idCone = $conexion ->Conectar();
        $sql = "SELECT identrada FROM ENTRADA ORDER BY identrada desc limit 1";
        $query = mysqli_query($idCone,$sql);
        $resultado ="";
        while($F  = mysqli_fetch_array($query)) $resultado = $F["identrada"];
        return($resultado);   
    }
    function SubirFotos($datos){
        $conexion = new ConexionBD();
        $idCone = $conexion ->Conectar();
        $n1 =$datos[0]."1.jpg";
        $n2 =$datos[0]."2.jpg";
        $n3 =$datos[0]."3.jpg";
        $n4 =$datos[0]."4.jpg";
        $n5 =$datos[0]."5.jpg";
        $img1 = "../img/fotos/".$n1;
        $img2 = "../img/fotos/".$n2;
        $img3 = "../img/fotos/".$n3;
        $img4 = "../img/fotos/".$n4;
        $img5 = "../img/fotos/".$n5;
        move_uploaded_file($datos[1], "$img1");
        move_uploaded_file($datos[2], "$img2");
        move_uploaded_file($datos[3], "$img3");
        move_uploaded_file($datos[4], "$img4");
        move_uploaded_file($datos[5], "$img5");
         $img1 = "img/fotos/".$n1;
        $img2 = "img/fotos/".$n2;
        $img3 = "img/fotos/".$n3;
        $img4 = "img/fotos/".$n4;
        $img5 = "img/fotos/".$n5;
        $sql = "INSERT INTO FOTOS(identrada, foto1, foto2, foto3, foto4, foto5) VALUES ('$datos[0]','$img1','$img2','$img3','$img4','$img5')";
        $query = mysqli_query($idCone,$sql);
        if($query)echo 1;
        else throw new  Exception(mysqli_error($idCone));
    }
}
?>