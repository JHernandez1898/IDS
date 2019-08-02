<?php 
require('../conect.php');
date_default_timezone_set('America/Mexico_City');
$idCone =  conectarlocalmente();
	$nombre = $_POST['nombre'];
	$id  = $_POST['id'];
	$compania  =$_POST['compania'];
	$area =  $_POST['area'];
	$fecha =  $_POST['fecha'];
	$fecnum = strtotime($fecha);
	$visitara =$_POST['visitara'];
	$horasalida = $_POST['horasalida'];
	$sql =  "UPDATE visitas SET  horasalida = '$horasalida', versalida = '1' WHERE(fecha LIKE '$fecha' AND versalida LIKE '0')";
	$query = mysqli_query($idCone,$sql);
	if(query){
		header('Location:  index.php');
		echo 'registro exitoso';
		
	}else{
		echo 'registro no exitoso';
	}
		
?>