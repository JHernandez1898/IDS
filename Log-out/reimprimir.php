<?php 
include("Template.php");
require("../conect.php");
$idCone = conectarlocalmente();
$id =  $_POST['id'];

$sql = "SELECT * FROM empleados WHERE serie LIKE '$id'";
$query = mysqli_query($idCone,$sql);
 while($F = mysqli_fetch_array($query)){
	 
		 $imagen = $F['imagen'];
?>
<html>
<link href="../Recursos/css/bootstrap.css" rel="stylesheet" type="text/css">
<body>
<div class="container">

        <!-- Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="text-align:center">Gafete
                    
                </h1>
               
            </div>
        </div>
        <!-- /.row -->

        <!-- Feature Row -->
        <div class="row">
            <article class="col-lg-12">
            <table class=" table-striped" style="text-align:center" align="center" width="242" height="171" border="1">
              <tbody>
                <tr>
                  <td height="36">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><?php echo"<img src = '".$imagen."' width='100' height='120' >";?></td>
                  <td>Nombre:<br>
            <?php echo $F['nombre']; echo " ";
                  echo $F['apellidos'];?></td>
                </tr>
                <tr>
                  <td>ID: <?php echo $F['id'] ?></td>
                  <td>Puesto: <br>
            <?php echo $F['puesto']?></td>
                </tr>
                <tr>
                  <td>Direccion:<br>
            <?php echo $F['direccion'];?></td>
                  <td>Inicio de labores:<br>
            <?php echo $F['iniciodetrabajo'];?></td>
                </tr>
              </tbody>
            </table>
            <table align="center" width="242" border="1">
              <tbody>
                <tr>
                  <td height="77"><center><?php echo "<img src='Recursos/barcode.php?text=".$F['serie']."'";?></center><br>
            <center><font  size="-1" ><?php echo $F['serie']; ?></font></center>
                  </td>
                </tr>
              </tbody>
            </table><br>

            <table align="center" width="200" border="0">
              <tbody>
                <tr>
                  <td> <input type="button" class="btn btn-sm btn-info" onClick="window.print()" value="Imprimir"> 
            		<a href="index.php"><input class="btn btn-sm btn-success" type= "button" value="continuar"></a></td>
                </tr>
              </tbody>
            </table>

            </article>
        </div>
           </div>
       
           
       
            
</body>
</html>
<p>&nbsp;</p>
<?php }?>