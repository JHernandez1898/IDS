<?php
 require("Template.php");
 require("../conect.php");
 $idCone =  conectarlocalmente();
 $ref = $_POST['ref'];
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
   	      <table width="200" border="1">
       	      <tbody>
       	        <tr>
       	          <td>Truck Company:</td>
       	          <td>&nbsp;</td>
   	            </tr>
       	        <tr>
       	          <td>Truck Number:</td>
       	          <td>&nbsp;</td>
   	            </tr>
       	        <tr>
       	          <td>Driver name</td>
       	          <td>&nbsp;</td>
   	            </tr>
       	        <tr>
       	          <td>Driver id:</td>
       	          <td>&nbsp;</td>
   	            </tr>
       	        <tr>
       	          <td>Trailer company</td>
       	          <td>&nbsp;</td>
   	            </tr>
       	        <tr>
       	          <td>Trailer number</td>
       	          <td>&nbsp;</td>
   	            </tr>
       	        <tr>
       	          <td>Seal number</td>
       	          <td>&nbsp;</td>
   	            </tr>
       	        <tr>
       	          <td>LD/MT</td>
       	          <td>&nbsp;</td>
   	            </tr>
       	        <tr>
       	          <td>Delivery drop</td>
       	          <td>&nbsp;</td>
   	            </tr>
       	        <tr>
       	          <td>Fecha de llegada</td>
       	          <td>&nbsp;</td>
   	            </tr>
       	        <tr>
       	          <td>Hora de llegada</td>
       	          <td>&nbsp;</td>
   	            </tr>
       	        <tr>
       	          <td>Consigna</td>
       	          <td>&nbsp;</td>
   	            </tr>
   	        </tbody>
   	      </table>
   	      <p>&nbsp;</p>
        </article>
      <article class="col-lg-6">
        	<h4 style="text-align:center" class="text-info">
            	Salida
        </h4>
        	<table width="200" border="1">
        	  <tbody>
        	    <tr>
        	      <td>Fecha de salida</td>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td>Hora de salida</td>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td>Bultos</td>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td>Descripcion</td>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td>Guia</td>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td>Cliente</td>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td>Referencia</td>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td>Linea</td>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td>Cargos</td>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td>Monto</td>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td>Motivo</td>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td>Autorizado</td>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td>Entregado</td>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td>Recibido</td>
        	      <td>&nbsp;</td>
      	      </tr>
      	    </tbody>
      	  </table>
        	<p style="text-align:center">&nbsp;</p>
      </article>
  </div>
</div>
</body>
</html>