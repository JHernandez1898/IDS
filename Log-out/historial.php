<?php
require("Template.php");
include("../conect.php");
date_default_timezone_set('America/Mexico_City');
$idCone = conectarlocalmente();
$date = date("Y-m-d");
$fecnum = strtotime($date);
if($_POST){
	$fecha =  $_POST["fecha"];
	$fecnum = strtotime($fecha);
}
$sql =  "SELECT * FROM historial WHERE fecnum LIKE '$fecnum'"; 
$query = mysqli_query($idCone,$sql);


?>
<!doctype html>
<html>
<head>
 <link href="../Recursos/css/bootstrap.min.css" rel="stylesheet">
<meta charset="utf-8">
<title>Historial</title>
</head>
<center>
<body>
<div class="container">
	<div class="row">
    	<h1 class="page-header" style="text-align:center">
        	HISTORIAL DE ENTRADAS Y SALIDAS
        </h1>
    </div>
    
    <div class="row">
    	<article class="col-lg-12">
           <form action="#" method="post">
          	<label for="fecha">Fecha:</label>
          		<input type="date" name="fecha" id="fecha">
          		<input name="ir" type="submit" id="ir" value="Buscar">
          	</form>
        
            <table width="722" class="table table-striped" align="center" border="1">
              <tbody>
              	<thead style="background-color:#6EB1DC">
                <tr bgcolor="#60D7E5">
                  <th bgcolor="#60D7E5" scope="col">N°</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">ID</th>
                  <th scope="col">Codigo</th>
                  <th scope="col">Entrada</th>
                  <th scope="col">Salida</th>
                  <th scope="col">Notas</th>
                </tr>
                </thead>
                <?php 
                $c = 0;
                while($R = mysqli_fetch_array($query)){
                $c++;	?>
                <tr>
                  <th bgcolor="#60D7E5" scope="row"><?php echo $c;?></th>
                  <td><?php echo $R["fecha"]; ?></td>
                  <td><?php echo $R["nombre"]; ?></td>
                  <td><?php echo $R["id"]; ?></td>
                  <td><?php echo $R["serie"]; ?></td>
                  <td><?php echo $R["entrada"]; ?></td>
                  <td><?php echo $R["salida"]; ?></td>
                  <td><?php echo $R["notas"]; ?></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
        </article>
    </div>
    <div class="row">
    	<article class="col-lg-12">
        	<a href="index.php">
            	<input type="button" class="btn btn-sm btn-warning" value="Regresar">
            </a>
        </article>
    </div>
</div>
</body>
</center>
</html>
