<?php 
include("Template.php");
require("..\conect.php");
$idCone =  conectarlocalmente();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Reimprimir</title>
<link href="../Recursos/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<center>
<body>
<div class="container">
	<div class="row">
    	<h1 class="page-header" style="align-content:center">
        	REIMPRESION DE GAFET
        </h1>
    </div>
    <div class="row">
    	<article class="col-lg-12">
        	<form action="reimprimir.php" method="post">
            <table width="200" border="0">
              <tbody>
                <tr>
                  <td class=" alert-info text-info"  >Por favor ingrese su codigo</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><input name="id"  class=" input-sm" type="text" id="id" size="50"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><input  class="btn btn-sm btn-success" type = "submit" value="Continuar"></td>
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