<?php
session_start();
require("conect.php");
$idCone = conectarlocalmente();
	
  if (!isset($_SESSION['AdminUser']))  header('Location: UserControlLogin.php'); 
  if (isset($_GET["Logout"])) { unset($_SESSION["AdminUser"]); }
  $mensaje="";
 
  if (isset($_GET["id"])) $id=$_GET["id"]; else $id="0"; 
  if (isset($_GET["txtUsuario"])) $Usuario=$_GET["txtUsuario"]; else $Usuario="";
  if (isset($_GET["txtContrasenia"])) $Contrasenia=$_GET["txtContrasenia"]; else $Contrasenia="";
  if (isset($_GET["txtIdEm"])) $IdEm=$_GET["txtIdEm"]; else $IdEm="";
  if (isset($_GET["txtIds"])) $Ids=mysqli_real_escape_string($idCone,$_GET["txtIds"]); else $Ids="";


if (isset($_GET["action"])) {
 if ($_GET["action"]=="Limpiar") {   header('Location: UserControl.php');  }
 if ($_GET["action"]=="Grabar") {
  if ($id!="0") { // Es un usuario que ya existe en la base de datos
     $sqlcmd="UPDATE usuarios SET nombre='".$Usuario."',numero='".$Ids."',estatus='".$IdEm."',password= MD5('".$Contrasenia."') WHERE (numero='".$_GET["id"]."')";
     mysqli_query($idCone,$sqlcmd);
     $mensaje="Registro actualizado.";
  } else { // Es un usuario nuevo...hay que agregarlo
      $Existe=0;
      $result = mysqli_query($idCone,"SELECT * FROM usuarios WHERE (nombre LIKE '$Usuario')");
      while($row = mysqli_fetch_array($result)) { $Existe=1;  }
     if ($Existe!=1) mysqli_query($idCone,"INSERT INTO usuarios VALUES ('".$Ids."','".$Usuario."','".$Contrasenia."','".$IdEm."'");
    else $mensaje="Usuario ya existe, no se permite duplicidad!!!";
  }
 }
}
 
if (isset($_GET["id"])) { 
    $result = mysqli_query($idCone,"SELECT * FROM usuarios WHERE numero ='".$_GET["id"]."'");
    while($row = mysqli_fetch_array($result)) {
      $Usuario=$row["nombre"];
      $Contrasenia=$row["password"];
      $Ids=$row["numero"];
	  $IdEm  =$row["estatus"];
    }
  $id=$_GET["id"]; 
} else $id=0;
mysqli_close($idCone);
?>
<html>
<head>
<style>

table {
	text-align: left;
	font-family:Verdana;
	font-size:11px;
      }
th {
	font-weight: bold;
	background-color: #ddd;
	border: 0px; }
td,th {
	padding: 4px 5px;
	border-bottom: 0px; }
tr,td {  border: 0px;  }	
.odd {
	background-color: #ddd; }
.odd td {
	border-bottom: 0px solid #cef; }
</style>
</head>
<table width="100%" height="100%" align="center">
<tr valign="top">
 <td>
  <table width="100%" height="100%" frame="box" align="center">
  <tr valign="top">
   <td align="center">
     <div style="overflow:scroll;width:800px;height:300px;">
     <table width="100%" cellpadding="0" cellspacing="0">
      <tr style="font-weight:bold;background:#ddd;">
        <td>Usuario</td>
	<td>Contrasenia</td>
	<td>Status</td>
	<td>Numero</td>
      </tr>
     <?php
        $r=0;
  $idCone = conectarlocalmente();
	$cmdsql="SELECT * FROM usuarios";
	if (isset($_GET["action"])) {
	  if ($_GET["action"]=="Buscar") {
	   $cmdsql="SELECT * FROM usuarios WHERE usuario LIKE '%".$_GET["txtUsuario"]."%'";
	  }
	} 
        $result = mysqli_query($idCone,$cmdsql);
        while($row = mysqli_fetch_array($result)) {
	  if  ($r++ % 2) $bgcolor="#cde"; else $bgcolor="#fff;";
          echo "<tr style='background:$bgcolor'><td><a href='UserControl.php?id=".$row['numero']."'>". $row['nombre'] . "</td><td>" . $row['password']."</td><td>". $row['estatus']."</td><td>".$row["numero"]."</td></tr>";
        }
        mysqli_close($idCone);
     ?>
     </table>
     </div> 
   </td>
  </tr>
  </table>  
 </td>
</tr>
<tr valign="top">
<td>
 <form method="GET"> 
 <table width="400px" align="center"  frame="box" cellpadding="0" cellspacing="0">
 <tr>  
  <th colspan="3">
   <center>Control de usuarios&nbsp;&nbsp;<a href='?Logout=yes' ><img src='images/icon.png' style='border:0px' alt='Cerrar session' title='Cerrar session'/></a></center>
  </th>
  </tr>
  <tr>
    <td>Usuario:</td>
    <td><input type="text" name="txtUsuario" value="<?php echo $Usuario;?>"/></td>
  </tr>
  <tr>   
    <td>Contrasenia:</td>
    <td><input type="text" name="txtContrasenia" value="<?php echo $Contrasenia;?>"/></td>
  </tr>
  <tr>   
    <td>Numero:</td>
    <td><input type="Ids" name="txtIds" value="<?php echo $Ids;?>"/></td>
  </tr>
   <tr>   
    <td>Status:</td>
    <td><input type="text" name="txtIdEm" value="<?php echo $IdEm;?>"/></td>
  </tr>
  <tr style="background:#fff">
    <th colspan="3">
      <input type="hidden" name="id" value="<?php echo $id;?>"/>
    </th>
  </tr>
  <tr>  
    <td>    
     <center><input type="submit" name="action" value="Buscar"/></center>
    </td>
    <td>    
     <center><input type="submit" name="action" value="Grabar"/></center>
    </td>  
    <td>    
     <center><input type="submit" name="action" value="Limpiar"/></center>
    </td> 
  </tr> 
  <tr height="20px">
   <th colspan="3" style="color:#F00;background-color:#fff;text-align:center;">
     <?php echo $mensaje;?>
   </th>
  </tr>
</table>
</td>
  </form>
</tr>
</table>
</form>
</html>


		

		