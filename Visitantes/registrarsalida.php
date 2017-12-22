<?php 
include ('Template.php');
include ('../conect.php');
$idCone =  conectarlocalmente();
$sql =  "SELECT * FROM visitas WHERE(versalida LIKE '0')";
$query = mysqli_query($idCone,$sql);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registrar salida</title>
<link href="../Recursos/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<center>
<center>
<p>Registrar Salida.</p>
<form method="post" action="registrosalida.php">
<table class="table-responsive success"  width="848" border="1">
  <tbody>
    <tr bgcolor="#6C85F7">
      <th width="69" scope="col">Fecha </th>
      <th width="30" scope="col">ID</th>
      <th width="125" scope="col">Nombre</th>
      <th width="78" scope="col">Compañia</th>
      <th width="160" scope="col">Vino a visitar</th>
      <th width="61" scope="col">Area</th>
      <th width="120" scope="col">Hora de entrada</th>
      <th width="153" scope="col">Registrar Salida</th>
    </tr>
    <?php while($F = mysqli_fetch_array($query)){ ?>
    <tr>
      <td><input type="date" value="<?php echo $F['fecha']; ?>" name="fecha" readonly></td>
      <td><?php echo $F['id'];?></td>
      <td><input name="nombre" type="text" value="<?php echo $F['nombre'];?>" readonly></td>
      <td><?php echo $F['compania'];?></td>
      <td><?php echo $F['visitara'];?>;</td>
      <td><?php echo $F['area'];?></td>
      <td><?php echo $F['horaentrada'];?></td>
      <td><input type ="submit" value ="Registrar"></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</form>
</center>
</body>
</html>