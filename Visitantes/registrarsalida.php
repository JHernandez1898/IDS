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
<div class="container">
	<div class="row">
    	<h1 class="page-header" style="text-align:center">
        	Registrar salida
        </h1>
    </div>
    
    <div class="row">
    <article class="col-lg-12">
    	
<table class="table table-striped table-bordered"  width="848" border="1">
  <tbody>
  	<thead style=" background-color:#6C85F7">
    <tr>
      <th width="69" scope="col">Fecha </th>
      <th width="30" scope="col">ID</th>
      <th width="125" scope="col">Nombre</th>
      <th width="78" scope="col">Compañia</th>
      <th width="160" scope="col">Asunto</th>
      <th width="61" scope="col">Area</th>
      <th width="120" scope="col">Hora de entrada</th>
      <th width="153" scope="col"></th>
    </tr>
    </thead>
    <?php while($F = mysqli_fetch_array($query)){ ?>
    <form method="post" action="registrosalida.php">
    <input type="hidden" name="id" value="<?php  echo $F["id"]; ?>">
    <input type="hidden" name="date" value="<?php  echo $F["fecha"]; ?>">
    <tr>
      <td><?php echo $F['fecha']; ?></td>
      <td><?php echo $F['id'];?></td>
      <td><?php echo $F['nombre'];?></td>
      <td><?php echo $F['compania'];?></td>
      <td><?php echo $F['visitara'];?>;</td>
      <td><?php echo $F['area'];?></td>
      <td><?php echo $F['horaentrada'];?></td>
      <td><input class="btn btn-success" type ="submit" value ="Registrar"></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</form>
    </article>
    </div>
</div>



</center>
</body>
</html>