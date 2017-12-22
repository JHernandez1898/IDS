<?php 
include ('Template.php');
include ('../conect.php');
$idCone = conectarlocalmente();
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
<link href="../Recursos/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<p>&nbsp;</p>
<body>
 <!-- Content -->
    <div class="container">

        <!-- Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Registrar primera visita
                    
                </h1>
               
            </div>
        </div>
        <!-- /.row -->

        <!-- Feature Row -->
        <div class="row">
            
            <article class="col-md-4 article-intro">
               <form action= "registrovisitantes.php" method="POST">
            <table class="table-bordered" width="200" border="1">
            
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
            </article>

           
        </div>
        </div>
        



        
<p>&nbsp;</p>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
