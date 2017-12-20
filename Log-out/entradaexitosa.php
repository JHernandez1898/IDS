<?php
include("Template.php");
require("../conect.php");
date_default_timezone_set('America/Mexico_City');
$idCone  = conectarlocalmente();
$fecha =  date('F j, Y');
$nombre = $_POST["nombre"];
$id = $_POST["id"];
$serie = $_POST["serie"];
$entrada = $_POST["entrada"];
$notas= $_POST["notas"];
$fecnum =  strtotime($fecha);
	
	$sqlseguridad ="SELECT * FROM historial WHERE fecnum LIKE '$fecnum' AND nombre LIKE '$nombre'";
	$queryseguridad  = mysqli_query($idCone, $sqlseguridad);
	if(mysqli_num_rows($queryseguridad) >= 1){
		echo "Entrada de usuario ya registrada el dia de hoy";
		echo "<br>";

		echo "<a href='index.php'>Continuar </a>";
	}
	else{
		
		$sql = "INSERT INTO historial  VALUES ('$fecha','$nombre','$id','$serie','$entrada','0','$notas','$fecnum')";
		$query = mysqli_query($idCone,$sql);
		if($query){
			
			header("Location: index.php");
		}else
		{
			echo "Fallido";
		}
	}
	
	?>