<?php 
require("conect.php");
$idCone = conectarlocal();
$id =$_POST["id"];
$sql = "SELECT * FROM empleados WHERE id LIKE '$id'";
$query = mysqli_query($idCone,$sql);
	 while($F= mysqli_fetch_array($query)){
		 $imagen = $F['imagen'];
?>
<table width="242" height="100" border="1">
  <tbody>
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
<table width="242" border="1">
  <tbody>
    <tr>
      <td height="77"><center><?php echo "<img src='Recursos/barcode.php?text=".$F['serie']."'";?></center><br>
<center><font  size="-1" ><?php echo $F['serie']; ?></font></center>
      </td>
    </tr>
  </tbody>
</table>
<table width="200" border="1">
  <tbody>
    <tr>
      <td> <input type="button" onClick="window.print()" value="Imprimir"> <br>
<a href="index.php"><input type= button value="continuar"></a></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<?php }
 ?>