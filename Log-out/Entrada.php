<?php 
include("Template.php");
require("../conect.php");
$idCone =  conectarlocalmente();


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Entrada</title>
<link href="../Recursos/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<center>
<body >
<div class="table-responsive">
<table width="200" border="1" >
  <tbody>
    <tr>
      <td style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 36px;">Entrada </td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form action="registrarentrada.php" method="post">
<table width="200" border="1">
  <tbody>
    <tr>
      <td>Por favor ingrese o pase el codigo de su gafet</td>
    </tr>
    <tr>
      <td><input name="serie" type="text" id="serie" size="50"></td>
    </tr>
    <tr>
      <td><input type = submit value="Continuar"></td>
    </tr>
  </tbody>
</table>
</form>
</div>
<p>&nbsp;</p>
</body>
</center>
</html>