<?php 
include("Template.php");
require("../conect.php");
$idCone =  conectarlocalmente();
$ref  =$_POST["ref"];
$hora = date("g:i a");
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
            	<h1 class="page-header" style="text-align: left">ORDEN DE SALIDA DE MERCANCIAS
               </h1>
            </div>
        </div>
         <div class="row">
        	<article class="col-lg-10  text-info alert alert-info">
           <p> SE AUTORIZA LA SALIDA DE LAS MERCANCIAS QUE A CONTINUACION SE INDICAN PARA QUE SEAN ENTREGADAS A QUIEN SE IDENTIFIQUE Y FIRME AL CALCE DE ESTA FORMA
        	</article>
           
        </div>
        <div class="row">
       	  <article class="col-lg-6">
            <form action="registrarsalida.php" method="post">
            <input type="hidden" name="ref" value = "<?php echo $ref ?>"> 
            <input type="hidden" name="hora" value = "<?php echo $hora ?>"> 
        	  <table width="678" border="0" align="left">
        	    <tbody>
        	      <tr>
        	        <td width="96"><p>Fecha :</p>
        	          <p>
 						<input type="date" required name = "fecha" class="input-sm">
      	            </p></td>
        	        <td width="242"><p>Cantidad de bultos:</p>
        	          <p>
  						<input type ="text"  required name ="bultos" class="input-sm">
      	            </p></td>
      	        </tr>
        	      <tr>
        	        <td><p>Descripcion de la mercancia:</p>
        	          <p>
 					<textarea class="input-sm" required name= "descripcion"></textarea>
      	            </p></td>
        	        <td><p>Numero de guia:</p>
        	          <p>
  					<input type ="text" required name ="guia" class="input-sm">
      	            </p></td>
      	        </tr>
        	      <tr>
        	        <td><p>Cliente:
        	        </p>
        	          <p>
        	            <input type ="text" required name ="cliente" class="input-sm">
      	            </p></td>
        	        <td><p>Referencia(s):
        	        </p>
        	          <p>
        	            <input type ="text" required name ="referencia" class="input-sm">
      	            </p></td>
      	        </tr>
        	      <tr>
        	        <td><p>Linea transportista:
        	        </p>
        	          <p>
        	            <input type ="text" required name ="linea" class="input-sm">
      	            </p></td>
        	        <td><p>Cobrar otros cargos:
        	        </p>
        	          <p>
        	           <select required class="input-sm" name="cargos">
                       <option class="label-success">Si</option>
                       <option class="label-danger">No</option>
                       </select>
                       
      	            </p></td>
      	        </tr>
        	      <tr>
        	        <td><p>Monto: </p>
                      <p>
                        <input type ="text"  required value="0" name ="monto" class="input-sm">
                    </p></td>
        	        <td><p>Motivo de salida: </p>
                    <p>
                      <textarea required class="input-sm" name ="motivo"></textarea>
                    </p></td>
      	        </tr>
      	      </tbody>
      	    </table>
       
       	  </article>
          	<article class="col-lg-4">
          	  <table width="200" border="0" align="center">
          	    <tbody>
          	      <tr>
          	        <td><p>Autorizado por:</p>
       	            <p><input type ="text" required class="input-sm" name="autorizado"></p></td>
       	          </tr>
          	      <tr>
          	        <td><p>Entregado por:</p>
       	            <p><input type ="text" required class="input-sm" name="entregado"></p></td>
       	          </tr>
          	      <tr>
          	        <td><p>Recibido por:</p>
                      <p>
                        <input type ="text" required class="input-sm" name="recibido">
                    </p></td>
       	          </tr>
          	      <tr>
          	        <td><span class="active">
       	            <input type ="submit" value = "Registrar" class=" btn-sm btn-success">
          	        </span></td>
       	          </tr>
          	      <tr>
          	        <td>&nbsp;</td>
       	          </tr>
          	      <tr>
          	        <td><p><span class="active"><a href="index.php">
          	          <input type ="button" value = "Regresar" class=" btn-sm btn-warning">
          	        </a></span></p></td>
       	          </tr>
       	        </tbody>
       	      </table>
              </form>
            </article> 
        </div>
    </div>
    
</body>
</html>