<?php 
include("Template.php");
require("../conect.php");
$idCone =  conectarlocalmente();
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