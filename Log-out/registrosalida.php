<?php
date_default_timezone_set('America/Mexico_City');
require("Template.php");
include ("conect.php");
$idCone = conectarlocal();
date_default_timezone_set('America/Mexico_City');
$serie = $_POST["serie"];
$fecha = date('F j, Y');
$fecnum = strtotime($fecha);
$sql =  "SELECT * FROM historial WHERE serie LIKE '$serie' AND fecnum LIKE '$fecnum'";
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
<p>Datos de salida</p>
<p>&nbsp;</p>
<form action= "salidaexitosa.php" method="post">
<table width="320" border="1">
  <tbody>
    <tr>
      <td>Fecha: <input type="text" name = "fecha" value = "<?php echo date('F j, Y');?>" readonly></td>
      <td>Nombre:<input type = text name = "nombre" value="<?php echo $R["nombre"]; ?>" readonly ></td>
    </tr>
    <tr>
      <td>ID: <input type = "text" name="id"  value="<?php echo $R["id"];?>"></td>
      <td><p>Entrada: <input type="text" name="entrada" value="<?php echo $R["entrada"];?>" readonly  ></p></td>
    </tr>
    <input type="hidden" name  = "serie" value = <?php echo $R["serie"];?>>
    <tr>
      <td>Notas: <textarea name="notas"> </textarea></td>
      <td>Salida: <input type="text" value="<?php echo date("h:i:s A") ?>" name= "salida" readonly></td>
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
<?php }else{
	
	echo "No se ha registrado la entrada de este usuario";
	echo "<br>";
	echo "<a href='index.php'>Continuar</a>";
}
?>