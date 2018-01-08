<?php 
date_default_timezone_set('America/Mexico_City');
require('Template.php');
require('../conect.php');
$idCone  = conectarlocalmente();
$id = $_POST['visitante'];
echo $id;
$sql =  "SELECT * FROM comunes WHERE(id LIKE '$id')";
$query =  mysqli_query($idCone,$sql);
$date =  date("Y-m-d");
$hora = date("H:i:s");
if($D = mysqli_fetch_array($query)){
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro de visita</title>
<link href="../Recursos/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
	<div class="row">
    	<h1 class="page-header" style="text-align:center">
        	Datos de la visita
        </h1>
    </div>
    
    <div class="row">
    <article class="col-lg-1">
    </article>
    
    <article class="col-lg-10">
    	<form action="registroentrada.php" method="post">
      	<table class="table table-bordered" width="544" border="1">
        <tbody>
          <tr >
            <th>Fecha</th>
            <th><input type="date" name="fecha" value="<?php echo $date ?>" readonly></th>
            <th>Visitara a:</th>
            <th><input type="visitara" required name="visitara"></th>
          </tr>
          <tr>
            <td>Nombre:</td>
            <td><input name="nombre" type="text" value ="<?php  echo $D['nombre']; ?>" size="50" readonly ></td>
            <td>Area:</td>
            <td><input type="text" required name="area" ></td>
          </tr>
          <tr>
            <td>ID:</td>
            <td><input type="text" name="id" value="<?php echo $D['id']; ?>" readonly ></td>
            <td>Hora de entrada</td>
            <td><input type="time" name="horaentrada" value="<?php echo $hora?>" readonly></td>
          </tr>
          <tr>
            <td>Compañia:</td>
            <td><input type="text" name="compania"  value="<?php echo $D['compania'];?>" readonly></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
  <input class="btn btn-sm btn-success" type="submit" value="Registrar">
</p>
</form>
    </article>
    
    <article class="col-lg-1">
    </article>
	</div>
</div>
<center>
<br>
<br>
<br>
<br>
<br>

</center>
</body>
</html>
<?php } ?>