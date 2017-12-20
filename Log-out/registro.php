<?php
include("Template.php");
require("conect.php");
$idCone =  conectarlocal(); 
if($_POST){
	$nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$direccion =$_POST["direccion"];
	$inicio  = $_POST["inicio"];
	$puesto  =$_POST["puesto"];
	$estado = $_POST["estado"];
	$autorizacion =  $_POST["autorizacion"];
	$serie=  rand(100000000,999999999); 
	$image  = "Recursos/Fotos/".$_FILES["userfile"]["name"];
	if($autorizacion = 'Admin@98.19'){
		$sql = "INSERT INTO empleados (nombre,apellidos,direccion,iniciodetrabajo,puesto,serie,imagen,status) VALUES('$nombre','$apellidos','$direccion','$inicio','$puesto','$serie','$image','1')";
		$query =mysqli_query($idCone,$sql);
		if($query){
			$uploads_dir = 'Recursos/Fotos';
		
				$tmp_name = $_FILES["userfile"]["tmp_name"];
				// basename() may prevent filesystem traversal attacks;
				// further validation/sanitation of the filename may be appropriate
				$name = basename($_FILES["userfile"]["name"]);
				move_uploaded_file($tmp_name, "$uploads_dir/$name");
				
			header('Location: imprimir.php');
			
		}else{
			echo "ERROR AL SUBIR INFORMACION";
		}
    }
	else
	{
        echo "<div class='error'>Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG.</div>";
	}
}

 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nuevo</title>
</head>

<body>
<center>
<table width="490" border="0">
  <tbody>
    <tr>
      <td style="font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; font-size: 36px;">Registrar  nuevo empleado<span style="font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif; color: #000000;"></span></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form enctype="multipart/form-data" action="#" method="post">
<table width="684" border="0" align="center">
  <tbody>
    <tr>
      <td width="352" style="text-align: left"><p><strong>Nombre:
            <input type ="text" name="nombre" required>
      </strong></p>
        <p>&nbsp;</p></td>
      <td width="322" style="text-align: left"><p><strong>Apellidos:
            <input type ="text" name ="apellidos" required>
      </strong></p>
        <p>&nbsp;</p>
        <p></p></td>
    </tr>
    <tr>
      <td style="text-align: left"><p><strong>Dirección:
            <input type="text" name="direccion" required>
      </strong></p>
        <p>&nbsp;</p></td>
      <td style="text-align: left"><p><strong>Inicio de labores:
            <input type = "date" name="inicio" required>
      </strong></p>
        <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td style="text-align: left"><p><strong>Puesto:
            <input type="text" name="puesto" required>
      </strong></p>
        <p>&nbsp;</p>
        <p></p></td>
      <td style="text-align: left"><p><strong>Estado:
            <select name="estado">
              <option value="1">Activo</option>
              <option value="0">Inactivo</option>
            </select>
      </strong></p>
        <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td height="75" style="text-align: left"><p><strong>Autorización:
            <input type="text" name="autorizacion" required>
      </strong></p>
        <p>&nbsp;</p></td>
      <td style="text-align: left"><p>Fotografia:
          <input type="file" name="userfile"/>
      </p>
        <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td style="text-align: left"><p>&nbsp;</p></td>
      <td style="text-align: right"><p>&nbsp;
        </p>
        <p>
          <input type="submit" name="continuar" value="Registrar">
        </p></td>
    </tr>
  </tbody>
</table>
</form>
</center>
<p>&nbsp;</p>
</body
></html>