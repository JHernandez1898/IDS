<?php
date_default_timezone_set('America/Mexico_City');
require("Template.php");
include ("../conect.php");
$idCone = conectarlocalmente();
$serie = $_POST["serie"];
$sql =  "SELECT * FROM empleados WHERE serie LIKE '$serie'";
$query = mysqli_query($idCone,$sql);

if($R = mysqli_fetch_array($query)){
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Datos de entrada</title>
<link href="../Recursos/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>


<body>
 <!-- Content -->

    <div class="container">
   

        <!-- Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Datos de entrada
                    
                </h1>
               
            </div>
        </div>
        <!-- /.row -->

        <!-- Feature Row -->
        <div class="row">
           
            <article class="col-md-12">
           
            <form action= "entradaexitosa.php" method="post">
            <table width="320" class="table table-striped  table-bordered" border="1">
              <tbody>
                <tr>
                  <td><p>Fecha: 
                  </p>
                    <p>
                      <input name = "fecha" type="text" class="input-sm" value = "<?php echo date('F j, Y');?>" readonly>
                  </p></td>
                  <td><p>Nombre:
                  </p>
                    <p>
                      <input name = "nombre" type = text class="input-sm" value="<?php echo $R["nombre"]; echo " "; echo $R["apellidos"]; ?>" readonly >
                  </p></td>
                </tr>
                <tr>
                  <td><p>ID:</p>
                    <p>
  <input name="id" type = "text" class="input-sm"  value="<?php echo $R["id"];?>">
                  </p></td>
                  <td><p>Entrada:</p>
                    <p>
  <input name="entrada" type="text" class="input-sm" value="<?php echo date("h:i:s A")?>" readonly  >
                  </p></td>
                </tr>
                <input type="hidden" name  = "serie" value = <?php echo $R["serie"];?>>
                <tr>
                  <td>Notas: <br>
			<textarea name="notas"> </textarea></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit" class="btn btn-sm btn-success" value="Continuar"></td>
                </tr>
              </tbody>
            </table>
            </form>
            </article>

           
        </div>
       
        </div>
        

<p>&nbsp;</p>

</body>
</html>
<?php }
?>