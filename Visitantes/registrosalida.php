<?php 
date_default_timezone_set('America/Mexico_City');
require('Template.php');
require('../conect.php');
$idCone  = conectarlocalmente();
$id = $_POST["id"];
$fecha = $_POST['date'];
$sql =  "SELECT * FROM visitas WHERE(id like '$id' and fecha like '$fecha')";
$query =  mysqli_query($idCone,$sql);
$date =  date("Y-m-d");
$hora = date("H:i");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro de visita</title>
<link href="../Recursos/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
	<div class="row">
    	<h1 class="page-header">
        		Datos de Salida
        </h1>
    </div>
    
    <div class="row">
    	<article class="col-lg-12">
        		<form action="registrofinal.php" method="post">
<?php if($D = mysqli_fetch_array($query)){ ?>
	<table class = "table table-bordered" width="544" border="1">
        <tbody>
          <tr style="text-align: left">
            <th scope="col">Fecha</th>
            <th scope="col"><input type="date" name="fecha" value="<?php echo $date ?>" readonly></th>
            <th scope="col">Visitara a:</th>
            <th scope="col"><input type="visitara" name="visitara" value ="<?php echo $D['visitara']; ?>"></th>
          </tr>
          <tr>
            <td>Nombre:</td>
            <td><input type="text" name="nombre" value ="<?php echo $D['nombre']; ?>" readonly ></td>
            <td>Area:</td>
            <td><input type="text" name="area" value ="<?php echo $D['area']; ?>"></td>
          </tr>
          <tr>
            <td>ID:</td>
            <td><input type="text" name="id" value="<?php echo $D['id']; ?>" readonly ></td>
            <td>Hora de entrada</td>
            <td><input type="time" name="horaentrada" value="<?php echo $D['horaentrada'];?>" readonly></td>
          </tr>
          <tr>
            <td>Compañia:</td>
            <td><input type="text" name="compania"  value="<?php echo $D['compania']; ?>" readonly></td>
            <td>Hora de salida</td>
            <td><input type='time' name="horasalida" value = "<?php  echo $hora; ?>"></td>
          </tr>
        </tbody>
      </table>
<p>
<?php } ?><br>

  <input type="submit" class="btn btn-sm btn-success" value="Registrar"><br>
<br><br>

  <a href="registrarsalida.php"><input type="button" class="btn btn-sm btn-warning" value="Regresar"></a>
</p>
</form>
        </article>
    </div>
</div>
</body>
</html>