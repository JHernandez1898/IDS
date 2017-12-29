<?php 
include("Template.php");
require("../conect.php");
$idCone =  conectarlocalmente();
$DNAME = $_POST["nombre"];
$ID =  $_POST['id'];
$sql = "INSERT INTO driver VALUES('$DNAME','$ID')";
$query = mysqli_query($idCone,$sql);

 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registrar driver</title>
<link href="../Recursos/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12">
        	  <h1 class="page-header" style="text-align: left">Registrar Conductor</h1>
            </div>
        </div>
        
        <div class="row">
        	<article class="col-lg-12">
            <?php 
			if($query){
			header("Location: nuevaentrada.php");
			}else{
			echo "Registro fallido";?><br>
<?php
			echo "<a href='nuevodriver.php'><input type = 'button' class = 'input-sm btn-warning' value = 'regresar'></a>";
				}
			?>
        	</article>
        </div>
    </div>
</body>
</html>