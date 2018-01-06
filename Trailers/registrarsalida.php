<?php 
include("Template.php");
require("../conect.php");
$idCone =  conectarlocalmente();

$ref =  $_POST["ref"];
$fecha = $_POST["fecha"];
$bultos = $_POST["bultos"];
$descripcion = $_POST["descripcion"];
$guia = $_POST["guia"];
$cliente = $_POST["cliente"];
$referencia = $_POST["referencia"];
$linea = $_POST["linea"];
$cargos = $_POST["cargos"];
$monto = $_POST["monto"];
$motivo = $_POST["motivo"];
$autorizado = $_POST["autorizado"];
$entregado = $_POST["entregado"];
$recibido= $_POST["recibido"];
$hora = $_POST["hora"];
$fecnum = strtotime($fecha);
$fechaentrada;
$sqlfecha   = "SELECT *  FROM traileractual WHERE REF LIKE '$ref' ";
$queryfecha =  mysqli_query($idCone,$sqlfecha);
if($F =  mysqli_fetch_array($queryfecha)){
	$fec = $F["FECNUM"];
	$fechaentrada =  date("Y-m-d",$fec);
}

$datetime1 = new DateTime($fechaentrada);
$datetime2 = new DateTime($fecha);
$interval = $datetime1->diff($datetime2);
$espera =  $interval->format('%R%a días');

$sql =  "INSERT INTO salidashistorico VALUES ('$ref','$fecha','$bultos', '$descripcion','$guia','$cliente','$referencia'".
",'$linea','$cargos','$monto','$motivo','$autorizado','$entregado','$recibido','$fecnum')";

$sqlupdate= "UPDATE traileractual SET TIME_OUT = '$hora' ,WAITING  = '$espera', ACTIVE = '0' WHERE (REF like '$ref')";
$sqlupdate2= "UPDATE trailerhistorico SET TIME_OUT = '$hora' ,WAITING  = '$espera',ACTIVE = '0' WHERE (REF like '$ref')";

$queryupdate = mysqli_query($idCone,$sqlupdate);
$error2 =  mysqli_error($idCone);
$queryupdate2  = mysqli_query($idCone,$sqlupdate2);
$error3 =  mysqli_error($idCone);
$query = mysqli_query($idCone,$sql);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>IDS</title>
<link href="../Recursos/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
	<div class="row">
    	<div class="col-lg-12"> 
        	<h1 class="page-header" style="text-align:left">
            Registro de salida
            </h1>
    </div>
    <div class="row">
    	<article class="col-lg-12">
       	 	<?php
				if($query&&$queryupdate&&$queryupdate2){
					?>
                    <p class="label-success" style="text-decoration:!important"> Registro de salida exitoso</p>
					<?php
				}
				else{
					?>
                     <p class="label-danger" style="text-decoration:!important"> Registro de salida fallido</p>
					<?php
					echo $error2;
					echo $error3;
					
				}
				?>
                <a href="index.php"><input type="button" class="btn-group-sm btn-success" style="animation:cubic-bezier(x1,y1,x2,y2)" value = "Regresar"></a>
				
        </article>
    </div>
</div>
</body>
</html>