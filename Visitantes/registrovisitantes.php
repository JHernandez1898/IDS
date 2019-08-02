<?php 
include ('Template.php');
include ('../conect.php');
$idCone = conectarlocalmente();
$idsql = "SELECT MAX(id) as ma FROM comunes";
$id;
$queryx = mysqli_query($idCone,$idsql);
if($F =  mysqli_fetch_array($queryx)){
	$id = $F["ma"] + 1;
}
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

<body>
    <div class="container">

        <!-- Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="text-align:center">Registrar primera visita
                    
                </h1>
               
            </div>
        </div>
        <!-- /.row -->

        <!-- Feature Row -->
        <div class="row">
            
            <article class="col-md-12 article-intro">
               <form action= "registrovisitantes.php" method="POST">
            <table class="table table-bordered" align="center" width="200" border="1">
            
              <tbody>
                <tr>
                  <th scope="col">Datos del visitante</th>
                </tr>
                <tr>
                  <td><table class ="table table-bordered" width="335" border="1">
                    <tbody>
                      
                      <tr>
                        <td>Nombre del visitante:</td>
                        <td><input name="nombre" type="text" class="input-sm" size="50" ></td>
                        </tr>
                      <tr>
                        <td>Compañia:</td>
                        <td><input name="compania" type="text" class="input-sm" size="50" ></td>
                        </tr>
                      <tr>
                        <td>Id:</td>
                        <td><input type="number" value="<?php echo $id ?>" readonly class="input-sm" name="id"/>
                      </tbody>
                    </table>
                  <p>
                    <input type="submit"  class="btn btn-sm btn-success"name="Registrar" id="Registrar" value="Registrar">
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
