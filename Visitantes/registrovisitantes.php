<?php 
include ('Template.php');
include ('conect.php');
$idCone = conectarlocal();
if($_POST){
	
$nombre = $_POST['nombre'];
$id = $_POST['id'];
$compania =  $_POST['compania'];
$sql = "INSERT INTO comunes (nombre,compania,id) VALUES('$nombre','$compania','$id')";
$query=mysqli_query($idCone,$sql);
if($query){
	Header('Location: registrarvisita.php');
	
}else
	{
	echo 'NO SE PUDO HACER LA ALTA DEL VISITANTE';
}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Visitantes</title>
</head>
<p>&nbsp;</p>
<body>
<p>&nbsp;</p>
<form action= "registrovisitantes.php" method="POST">
<table width="200" border="1">

  <tbody>
    <tr>
      <th scope="col">Datos del visitante</th>
    </tr>
    <tr>
      <td><table width="335" border="1">
        <tbody>
          
          <tr>
            <td>Nombre del visitante:</td>
            <td><input type="text" name="nombre" ></td>
            </tr>
          <tr>
            <td>Compañia:</td>
            <td><input type="text" name="compania" ></td>
            </tr>
          <tr>
            <td>Id:</td>
            <td><input type="number" name="id"/>
          </tbody>
        </table>
      <p>
        <input type="submit" name="Registrar" id="Registrar" value="Registrar">
      </p></td>
    </tr>
  </tbody>
</table>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
