<?php 
include("Template.php");
require("../conect.php");
$idCone =  conectarlocalmente();


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Salida</title>
<link href="../Recursos/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
	<div class="row">
    	<h1 class="page-header" style="text-align:center">
        	Registro de salida
        </h1>
    </div>
    <div class="row">
    	<article class="col-lg-12">
        	<form action="registrosalida.php" method="post">
            <table width="200" align="center" border="0">
              <tbody align="center">
                <tr>
                  <td class="alert-info text-info">Por favor ingrese o pase el codigo de su gafet</td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td><input name="serie" class="input-sm" type="text" id="serie" size="50"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><input type = "submit" class="btn btn-sm btn-success" value="Continuar"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><a href="index.php"><input type="button" class="btn btn-sm btn-warning" value="Regresar"></a></td>
                </tr>
              </tbody>
            </table>
            
            </form>
        </article>
    </div>
</div>
</body>
</html>