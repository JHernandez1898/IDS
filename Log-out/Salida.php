<?php 
include("Template.php");
require("conect.php");
$idCone =  conectarlocal();


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Salida</title>
</head>
<center>
<body >
<table width="305" border="1" >
  <tbody>
    <tr>
      <td style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 36px;">Registro de Salida </td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form action="registrosalida.php" method="post">
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
<p>&nbsp;</p>
</body>
</center>
</html>