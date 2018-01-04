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
            <form action="registrarnuevo.php" method="post">
        	  <table width="563" border="0" align="center">
        	    <tbody>
        	      <tr>
        	        <td width="285"><p>Truck Company:
       	            </p>
        	          <p>
        	            <input type="text" class="input-sm" name="truckcompany"  required>
      	              </p>
                    </td>
        	        <td width="262"><p>Truck Number:</p>
        	          <p>
  					<input type="text" class="input-sm" name="trucknumber" required>
      	            </p></td>
      	        </tr>
        	      <tr>
        	        <td><p>Driver ID:</p>
        	          <p><?php $sql =  "SELECT * FROM driver";
					  $query = mysqli_query($idCone,$sql);
					 
					  ?>
        	            <select name="driverid" class="input-sm">
                         <?php while($F =  mysqli_fetch_array($query)){ 
						 echo "<option value='".$F['DRIVER_ID']."'>".$F['DRIVER_ID']."</option>";
						 }?>
                         
                        
                        </select><a class="bg-success" href="nuevodriver.php">
       	                <input type="button"  class="input-sm" name="Nuevo" id="Nuevo" value="Nuevo"></a>
       	            </p></td>
        	        <td><p>Trailer Company:</p>
        	          <p>
  <input type="text" name="trailercompany" class="input-sm" required>
      	            </p></td>
      	        </tr>
        	      <tr>
        	        <td><p>Trailer Number:</p>
        	          <p>
  <input type="text" name="trailernumber" class="input-sm" required>
      	            </p></td>
        	        <td><p>Seal Number:
       	            </p>
        	          <p>
        	            <input type="text" class="input-sm" name="sealnumber" required>
      	            </p></td>
      	        </tr>
        	      <tr>
        	        <td><p>LD/MT:</p>
        	          <p>
  <input type="text" name="ld-mt" class="input-sm" required>
      	            </p></td>
        	        <td><p>Delivery Drop:</p>
        	          <p>
  				<input type="text" name="deliverydrop" class="input-sm" required>
      	            </p></td>
      	        </tr>
        	      <tr>
        	        <td><p>Consignne:</p>
                      <p>
                        <input type="text" name="consigna" class="input-sm" required>
                    </p></td>
        	        <td><p>Date:</p>
                      <p>
                        <input type="date" name="date" class="input-sm" required>
                    </p></td>
       	          </tr>
        	      <tr>
        	        <td><p> <a href="index.php">
        	          <input  type="button" class="btn-warning input-sm"value="Regresar">
       	            </a></p></td>
        	        <td><input name="Registrar" type="submit" class="btn-success input-sm" id="Registrar" value="Registrar"></td>
        	         
      	        </tr>
      	      </tbody>
      	    </table>
            </form>
        	</article>
        </div>
    </div>
</body>
</html>