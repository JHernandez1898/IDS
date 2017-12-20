<?php 
require('conect.php');
$idCone =  conectarlocal();
	$nombre = $_POST['nombre'];
	$id  = $_POST['id'];
	$compania  =$_POST['compania'];
	$area =  $_POST['area'];
	$fecha =  $_POST['fecha'];
	$fecnum = strtotime($fecha);
	$visitara =$_POST['visitara'];
	$horaentrada = $_POST['horaentrada'];
	$sql =  "INSERT INTO visitas(fecha, id,nombre,compania,visitara,area,horaentrada,horasalida,versalida,fecnum) VALUES ('$fecha','$id','$nombre','$compania','$visitara','$area','$horaentrada','0','0','$fecnum')";
	$query = mysqli_query($idCone,$sql);
	if(query){
		header('Location:  index.php');
		echo 'registro exitoso';
		
	}else{
		echo 'registro no exitoso';
	}
		
?>