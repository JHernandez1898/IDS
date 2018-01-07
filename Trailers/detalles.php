<?php
 require("Template.php");
 require("../conect.php");
 $idCone =  conectarlocalmente();
 $ref = $_POST['ref'];
 $sqlentrada =  "SELECT * FROM traileractual WHERE(REF LIKE '$ref')";
 $queryentrada  = mysqli_query($idCone,$sqlentrada);

 $sqlsalida =  "SELECT * FROM salidashistorico WHERE (REF LIKE '$ref')";
 $querysalida  = mysqli_query($idCone,$sqlsalida);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>IDS</title>
<link href="../Recursos/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
	<div class="row">
   	  <h1 class="page-header" style="text-align: center">
        	Detalles
        </h1>
    </div>
    <div class="row">
    	<article class="col-lg-6">
        	<h4 style="text-align:center" class="text-info">
            	Entrada
            </h4>
           <?php 
		   $horasalida;
		   if($F = mysqli_fetch_array($queryentrada)){
			   $horasalida = $F["TIME_OUT"];
		   ?>
   	      <table width="333" border="0" class="table table-striped table-bordered">
       	      <tbody>
       	        <tr>
       	          <td>Truck Company:</td>
       	          <td><?php echo $F["T_COMPANY"];?></td>
   	            </tr>
       	        <tr>
       	          <td>Truck Number:</td>
       	          <td><?php echo $F["T_NUMBER"];?></td>
   	            </tr>
       	        <tr>
       	          <td>Driver name</td>
       	          <td><?php echo $F["D_NAME"];?></td>
   	            </tr>
       	        <tr>
       	          <td>Driver id:</td>
       	          <td><?php echo $F["DRIVER_ID"];?></td>
   	            </tr>
       	        <tr>
       	          <td>Trailer company</td>
       	          <td><?php echo $F["TR_COMPANY"];?></td>
   	            </tr>
       	        <tr>
       	          <td>Trailer number</td>
       	          <td><?php echo $F["TR_NUMBER"];?></td>
   	            </tr>
       	        <tr>
       	          <td>Seal number</td>
       	          <td><?php echo $F["N_SEAL"];?></td>
   	            </tr>
       	        <tr>
       	          <td>LD/MT</td>
       	          <td><?php echo $F["LD_MT"];?></td>
   	            </tr>
       	        <tr>
       	          <td>Delivery drop</td>
       	          <td><?php echo $F["DELIVERY_D"];?></td>
   	            </tr>
       	        <tr>
       	          <td>Fecha de llegada</td>
       	          <td><?php echo date("Y-m-d",$F["FECNUM"]);?></td>
   	            </tr>
       	        <tr>
       	          <td>Hora de llegada</td>
       	          <td><?php echo $F["TIME_IN"];?></td>
   	            </tr>
       	        <tr>
       	          <td>Consigna</td>
       	          <td><?php echo $F["CONSIGNNE"];?></td>
   	            </tr>
   	        </tbody>
   	      </table>
   	    <?php }?>
          
        </article>
      <article class="col-lg-6">
        	<h4 style="text-align:center" class="text-info">
            	Salida
        </h4>
        <?php if($F = mysqli_fetch_array($querysalida)){ ?>
        	<table width="200" class="table table-striped table-bordered" border="0">
        	  <tbody>
        	    <tr>
        	      <td width="48%">Fecha de salida</td>
        	      <td width="52%"><?php  echo date("Y-m-d",$F["fecnum"]); ?></td>
      	      </tr>
        	    <tr>
        	      <td>Hora de salida</td>
        	      <td><?php echo $horasalida; ?></td>
      	      </tr>
        	    <tr>
        	      <td>Bultos</td>
        	      <td><?php echo $F["bultos"]; ?></td>
      	      </tr>
        	    <tr>
        	      <td>Descripcion</td>
        	      <td><?php echo $F["descripcion"]; ?></td>
      	      </tr>
        	    <tr>
        	      <td>Guia</td>
        	      <td><?php echo $F["guia"]; ?></td>
      	      </tr>
        	    <tr>
        	      <td>Cliente</td>
        	      <td><?php echo $F["cliente"]; ?></td>
      	      </tr>
        	    <tr>
        	      <td>Referencia</td>
        	      <td><?php echo $F["referencia"]; ?></td>
      	      </tr>
        	    <tr>
        	      <td>Linea</td>
        	      <td><?php echo $F["linea"]; ?></td>
      	      </tr>
        	    <tr>
        	      <td>Cargos</td>
        	      <td><?php echo $F["cargos"]; ?></td>
      	      </tr>
        	    <tr>
        	      <td>Monto</td>
        	      <td><?php echo $F["monto"]; ?></td>
      	      </tr>
        	    <tr>
        	      <td>Motivo</td>
        	      <td><?php echo $F["motivo"]; ?></td>
      	      </tr>
        	    <tr>
        	      <td>Autorizado</td>
        	      <td><?php echo $F["autorizado"]; ?></td>
      	      </tr>
        	    <tr>
        	      <td>Entregado</td>
        	      <td><?php echo $F["entregado"]; ?></td>
      	      </tr>
        	    <tr>
        	      <td>Recibido</td>
        	      <td><?php echo $F["recibido"]; ?></td>
      	      </tr>
      	    </tbody>
      	  </table>
          <?php } ?>
        	<p style="text-align:center">&nbsp;</p>
      </article>
  </div>
  <div class="row">
   	<article class="col-lg-4">
   	  <table width="200" border="0">
   	    <tbody>
   	      <tr>
   	       
   	        <td><a href="index.php"><input type = "button" class="btn btn-sm btn-success" value="Regresar"></td>
          </tr>
        </tbody>
      </table>
      </article>
  </div>
</div>
</body>
</html>