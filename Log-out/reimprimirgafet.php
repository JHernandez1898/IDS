<?php 
include("Template.php");
require("conect.php");
$idCone =  conectarlocal();


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Reimprimir</title>
</head>
<center>
<body >
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="493" border="1" >
  <tbody>
    <tr>
      <td style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: 36px;">REIMPRESION DE GAFET</td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form action="reimprimir.php" method="post">
<table width="200" border="1">
  <tbody>
    <tr>
      <td>Por favor ingrese su id</td>
    </tr>
    <tr>
      <td><input name="id" type="text" id="id" size="50"></td>
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