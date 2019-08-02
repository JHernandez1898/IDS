<?php 
include ('Template.php');
require('../conect.php');
$idCone =  conectarlocalmente();
$sql = "SELECT * FROM comunes";
$query =  mysqli_query ($idCone,$sql);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registrar Visita</title>
<link href="../Recursos/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<center>
<body>
<div class="container">
	<div class="row">
		<h1 class="page-header" style="text-align:center">
        Seleccione a el visitante
        </h1>
	</div>
    
    <div class="row">
    <article class="col-lg-3">
    </article>
    <article class="col-lg-6">
    <form action = 'registrovisita.php' method="POST">
        <select name ='visitante'> <?php while($F = mysqli_fetch_array($query)){ ?>
        <option value="<?php echo $F['id']?>" > <?php echo $F['nombre'] ?><?php }  ?>
        </option></select><br><br>
        <input type="submit" class="btn-sm btn btn-success" value="Registrar"/><br>
<br>
		<a href="index.php"><input type="button" class="btn-sm btn btn-warning" value="Regresar"></a>
        </form>
    </article>
    <article class="col-lg-3">
    </article>
    </div>
</div>



</body>

</html>