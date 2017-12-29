<?php
require("Template.php");
include("conect.php");
$idCone =  conectarlocalmente();

$truckcompany = $_POST['truckcompany'];
$trucknumber = $_POST['trucknumber'];
$drivername  =$_POST['driverid'];
$trailercompany  =$_POST['trailercompany'];
$trailernumber = $_POST['trailernumber'];
$sealnumber = $_POST['sealnumber'];
$ld = $_POST['ld-mt'];
$delivery = $_POST['deliverydrop'];
$hora =  $_POST['hora'];
$consigna  = $_POST['consigna'];
$date = $_POST['date'];

$sql  = "INSERT INTO traileractual (T_COMPANY, T_NUMBER, D_NAME, `DRIVER_ID`, `TR_COMPANY`, `TR_NUMBER`, `N_SEAL`, `LD/MT`, `DELIVERY_D`, `TIME IN`, `TIME OUT`, `CONSIGNNE`, `FECNUM`, `WAITING`, `ACTIVE`) VALUES ('$truckcompany','$trucknumber','$drivername','$trailercompany',[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16])";

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nuevo driver</title>
<link href="../Recursos/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12">
        	  <h1 class="page-header" style="text-align: left">Registrar Conductor</h1>
            </div>
        </div>
        
        <div class="row">
        	<article class="col-lg-12">
            <form action="registrarconductor.php" method="post">
              <table width="266" border="0" align="center">
                <tbody>
                  <tr>
                    <td><p>Nombre:</p>
                    <p>
                      <input type="text" name="nombre" class="input-lg">
                    </p></td>
                  </tr>
                  <tr>
                    <td><p>ID:</p>
                    <p>
                      <input type="text" name="id" class="input-lg">
                    </p></td>
                  </tr>
                  <tr>
                    <td align="center"><input  type="submit" value="Registrar" class="input-lg btn-success">
                      <a href="nuevaentrada.php">
                      <input  type="button" value="Regresar" class="input-lg btn-warning">
                    </a></td>
                  </tr>
                </tbody>
              </table>
            </form>
        	</article>
        </div>
    </div>
</body>
</html>