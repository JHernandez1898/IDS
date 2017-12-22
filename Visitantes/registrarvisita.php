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
<body><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<font size="+3">Seleccione a el visitante</font><br><br>

<form class="table-bordered" action = 'registrovisita.php' method="POST">
<select name ='visitante'> <?php while($F = mysqli_fetch_array($query)){ ?><option value="<?php echo $F['nombre']?>" > <?php echo $F['nombre'] ?><?php }  ?></option></select><br><br>


<input type="submit" value="Registrar"/>
</form>
</body>

</html>