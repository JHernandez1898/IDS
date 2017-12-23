<?php 
include("Template.php");
require("../conect.php");
$idCone =  conectarlocalmente();
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
            <form action="registrarnuevaentrada.php" method="post">
        	  <table width="563" border="0" align="center">
        	    <tbody>
        	      <tr>
        	        <td width="285"><p>Truck Company:
       	            </p>
        	          <p>
        	            <input type="text" name="textfield" id="textfield">
      	              </p>
                    </td>
        	        <td width="262"><p>Truck Number:</p>
        	          <p>
  					<input type="text" name="textfield6" id="textfield6">
      	            </p></td>
      	        </tr>
        	      <tr>
        	        <td><p>Driver name:</p>
        	          <p>
  <input type="text" name="textfield2" id="textfield2">
      	            </p></td>
        	        <td><p>Trailer Company:</p>
        	          <p>
  <input type="text" name="textfield7" id="textfield7">
      	            </p></td>
      	        </tr>
        	      <tr>
        	        <td><p>Trailer Number:</p>
        	          <p>
  <input type="text" name="textfield3" id="textfield3">
      	            </p></td>
        	        <td><p>Seal Number:
       	            </p>
        	          <p>
        	            <input type="text" name="textfield8" id="textfield8">
      	            </p></td>
      	        </tr>
        	      <tr>
        	        <td><p>LD/MT:</p>
        	          <p>
  <input type="text" name="textfield4" id="textfield4">
      	            </p></td>
        	        <td><p>Delivery Drop:</p>
        	          <p>
  				<input type="text" name="textfield9" id="textfield9">
      	            </p></td>
      	        </tr>
        	      <tr>
        	        <td><p>Time:</p>
                      <p>
                        <input type="time" name="hora" class="input-sm" required>
                    </p></td>
        	        <td><p>Consignne:</p>
        	          <p>
        	            <input type="text" name="consigna" class="input-sm" required>
      	            </p></td>
       	          </tr>
        	      <tr>
        	        <td><p>Date:</p>
        	          <p>
 					 <input type="date" name="date" class="input-sm" required>
      	            </p></td>
        	        <td><input name="Registrar" type="submit" class="btn-success" id="Registrar" value="Registrar"></td>
      	        </tr>
      	      </tbody>
      	    </table>
            </form>
        	</article>
        </div>
    </div>
</body>
</html>