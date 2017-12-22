<?php 
date_default_timezone_set('America/Mexico_City');
require('Template.php');
require('../conect.php');
$idCone  = conectarlocalmente();
$nombre = $_POST['visitante'];
$sql =  "SELECT * FROM comunes WHERE(nombre LIKE '$nombre')";
$query =  mysqli_query($idCone,$sql);
$date =  date("Y-m-d");
$hora = date("H:i:s")
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro de visita</title>
<link href="../Recursos/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
<br>
<br>
<br>
<br>
<br>
<form action="registroentrada.php" method="post">
<table class="active tab-pane" width="553" height="177" border="1">
  <tbody>
    <tr>
      <th style="text-align: center; font-size: 36px;" scope="col" >Datos de la visita</th>
    </tr>
    <tr>
      <td><table width="544" border="1">
        <tbody>
          <tr style="text-align: left">
            <th scope="col">Fecha</th>
            <th scope="col"><input type="date" name="fecha" value="<?php echo $date ?>" readonly></th>
            <th scope="col">Visitara a:</th>
            <th scope="col"><input type="visitara" name="visitara"></th>
          </tr>
          <tr>
            <td>Nombre:</td>
            <td><input type="text" name="nombre" value ="<?php if($D = mysqli_fetch_array($query)){ echo $D['nombre'];} ?>" readonly ></td>
            <td>Area:</td>
            <td><input type="text" name="area" ></td>
          </tr>
          <tr>
            <td>ID:</td>
            <td><input type="text" name="id" value="<?php if($D = mysqli_fetch_array($query)){ echo $D['id'];} ?>" readonly ></td>
            <td>Hora de entrada</td>
            <td><input type="time" name="horaentrada" value="<?php echo $hora?>" readonly></td>
          </tr>
          <tr>
            <td>Compañia:</td>
            <td><input type="text" name="compania"  value="<?php if($D = mysqli_fetch_array($query)){ echo $D['compania'];} ?>" readonly></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
<p>
  <input type="submit" value="Registrar">
</p>
</form>
</center>
</body>
</html>