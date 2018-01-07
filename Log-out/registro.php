<?php
include("Template.php");
require("../conect.php");
$idCone =  conectarlocalmente(); 
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
<link href="../Recursos/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class=" container">
	<div class="row">
    	<h1 class="page-header" style="font:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif">
        	Registrar  nuevo empleado
        </h1>
    </div>
    <div class="row">
    	<article class="col-lg-10">
        <form enctype="multipart/form-data" action="#" method="post">
            <table width="684" border="0" >
              <tbody>
                <tr>
                  <td width="352" style="text-align: left"><p><strong>Nombre:
                        </strong></p>
                    <p><strong>
                      <input type ="text" name="nombre" required>
                    </strong></p>
                  <p>&nbsp;</p></td>
                  <td width="322" style="text-align: left"><p><strong>Apellidos:</strong></p>
                    <p><strong>
  <input type ="text" name ="apellidos" required>
                    </strong></p>
                    <p>&nbsp;</p>
                    <p></p></td>
                </tr>
                <tr>
                  <td style="text-align: left"><p><strong>Dirección:</strong></p>
                    <p><strong>
  <input type="text" name="direccion" required>
                    </strong></p>
                  <p>&nbsp;</p></td>
                  <td style="text-align: left"><p><strong>Inicio de labores:</strong></p>
                    <p><strong>
  <input type = "date" name="inicio" required>
                    </strong></p>
                  <p>&nbsp;</p></td>
                </tr>
                <tr>
                  <td style="text-align: left"><p><strong>Puesto:</strong></p>
                    <p><strong>
  <input type="text" name="puesto" required>
                    </strong></p>
                    <p>&nbsp;</p>
                    <p></p></td>
                  <td style="text-align: left"><p><strong>Estado:</strong></p>
                    <p><strong>
  <select name="estado">
    <option value="1">Activo</option>
    <option value="0">Inactivo</option>
  </select>
                    </strong></p>
                  <p>&nbsp;</p></td>
                </tr>
                <tr>
                  <td height="75" style="text-align: left"><p><strong>Autorización:</strong></p>
                    <p><strong>
  <input type="password" name="autorizacion" required>
                    </strong></p>
                  <p>&nbsp;</p></td>
                  <td style="text-align: left"><p>Fotografia:
                      <input type="file" name="userfile"/>
                  </p>
                    <p>&nbsp;</p></td>
                </tr>
                <tr>
                  <td style="text-align: left"><p><a href="index.php"><input type="button" value="Regresar" class="btn btn-warning btn-sm"></a></p></td>
                  <td style="text-align: right"><p><input type="submit" class="btn btn-success btn-sm" name="continuar" value="Registrar"></p>
                  </td>
                </tr>
              </tbody>
            </table>
            </form>
        </article>
    </div>
</div>
</body>
</html>