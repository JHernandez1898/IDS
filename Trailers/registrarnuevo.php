<?php
require("Template.php");
include("../conect.php");
$idCone =  conectarlocalmente();
date_default_timezone_set("America/Mexico_City");
$truckcompany = $_POST['truckcompany'];
$trucknumber = $_POST['trucknumber'];
$driverid  =$_POST['driverid'];
$sqldrive = "SELECT  *  FROM DRIVER WHERE DRIVER_ID LIKE '$driverid'";
$query = mysqli_query($idCone,$sqldrive);
$drivername ;
if($F =  mysqli_fetch_array($query)){
	$drivername =  $F['DNAME'];
}
$trailercompany  =$_POST['trailercompany'];
$trailernumber = $_POST['trailernumber'];
$sealnumber = $_POST['sealnumber'];
$ld = $_POST['ld-mt'];
$delivery = $_POST['deliverydrop'];
$hora =  date("H:i:s"); 
$consigna  = $_POST['consigna'];
$date = $_POST['date'];
$fecnum =  strtotime($date);
$ref =  "SELECT MAX(REF) as MAX FROM traileractual";
$queryref = mysqli_query($idCone,$ref);
if($F =  mysqli_fetch_array($queryref)){
	$refact  = $F['MAX'] + 1;
}
$ref =  "SELECT MAX(REF) as MAX FROM trailerhistorico";
$queryref = mysqli_query($idCone,$ref);
if($F =  mysqli_fetch_array($queryref)){
	$refhis  = $F['MAX'] + 1;
}

if($refact>$refhis){
	$ref = $refact;
}else{
	$ref = $refhis;
}
$sql  = "INSERT INTO traileractual  VALUES ('$ref','$truckcompany','$trucknumber','$drivername','$driverid','$trailercompany','$trailernumber','$sealnumber','$ld','$delivery','$hora','0','$consigna','$fecnum','0','0','1')";


//REF,T_COMPANY, T_NUMBER, D_NAME,DRIVER_ID, TR_COMPANY,TR_NUMBER,N_SEAL, LD/MT, DELIVERY_D, TIME IN,TIME OUT,CONSIGNNE,FECNUM,WAITING,ACTIVE

try{
$queryin = mysqli_query($idCone,$sql);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nueva entrada</title>
<link href="../Recursos/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12"><h1 class="page-header" style="text-align: left">Nueva entrada 
                </h1>
            </div>
        </div>
        
        <div class="row">
        	<article class="col-lg-12">
            <?php 
			
			if($queryin){
				header('Location: index.php');
			
			}
			else{
					?>
				<p> Error </p>
               
				<?php	
				echo mysqli_error($idCone);
			}
			}catch(Exception $ex){
				echo $e->getMessage();
			}
			?>
        	</article>
        </div>
    </div>
</body>
</html>