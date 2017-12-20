<?php
date_default_timezone_set('America/Mexico_City');
require("Template.php");
include ("conect.php");
$idCone = conectarlocal();
$serie = $_POST["serie"];
$sql =  "SELECT * FROM empleados WHERE serie LIKE '$serie'";
$query = mysqli_query($idCone,$sql);

if($R = mysqli_fetch_array($query)){
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Datos de entrada</title>
</head>

<body>
<p>Datos de entrada</p>
<p>&nbsp;</p>
<form action= "entradaexitosa.php" method="post">
<table width="320" border="1">
  <tbody>
    <tr>
      <td>Fecha: <input type="text" name = "fecha" value = "<?php echo date('F j, Y');?>" readonly></td>
      <td>Nombre:<input type = text name = "nombre" value="<?php echo $R["nombre"]; echo " "; echo $R["apellidos"]; ?>" readonly ></td>
    </tr>
    <tr>
      <td>ID: <input type = "text" name="id"  value="<?php echo $R["id"];?>"></td>
      <td><p>Entrada: <input type="text" name="entrada" value="<?php echo date("h:i:s A")?>" readonly  ></p></td>
    </tr>
    <input type="hidden" name  = "serie" value = <?php echo $R["serie"];?>>
    <tr>
      <td>Notas: <textarea name="notas"> </textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" value="Continuar"></td>
    </tr>
  </tbody>
</table>
</form>
<p>&nbsp;</p>
</body>
</html>
<?php }
?>