<?php
session_start();
require ("conect.php");
$idCone = conectarlocal();
 
$mensaje="";
if (isset($_POST["txtUsuario"]) && isset($_POST["txtPassword"])) 
{
	if (($_POST["txtUsuario"]!='') && ($_POST["txtPassword"]!=''))
		{ 
			$Usuario = $_POST["txtUsuario"];
			$sql = "SELECT * FROM logout_usuarios WHERE usuario='$Usuario' AND id ='0'";
			$result = mysqli_query($idCone,$sql);
			if(mysqli_num_rows($result)==1)
			{
				$_SESSION['AdminUser'] =1;
				header('Location: UserControl.php');
			}
			else 
			{ 
    			session_destroy();
    			$mensaje="Informacion incorrecta!!!"; 
			}
		}
}
?>
<html>
<head>
<style>

table {
	text-align: center;
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
<body bgcolor="#FFFFFF" >
<form method="POST">s
<table width="100%" height="100%" align="center">
<tr valign="top">
 <td>
  <table width="100%" height="100%" align="center">
  <tr valign="top">
   <td>
     <img src=".../imagenes/logo_tlc.png" />
   </td>
  </tr>
  </table>  
 </td>
</tr>
<tr valign="top">
<td>
 <table width="300px" align="center"  frame="box" cellpadding="0" cellspacing="0">
 <tr>  
  <th colspan="2">
   Administrador de usuarios
  </th>
  </tr>
  <tr>
    <td>Usuario:</td>
    <td><input type="text" name="txtUsuario"/></td>
  </tr>
  <tr>   
    <td>Contrasenia:</td>
    <td><input type="password" name="txtPassword"/></td>
  </tr>
  <tr >  
     <th colspan="2" style="background-color:fff;">
     <input type="submit" value="Entrar"/>
     </th>
  </tr> 
  <tr height="20px">
   <th colspan="2" style="color:#F00;background-color:#fff;">
     <?php echo $mensaje;?>
   </th>
  </tr>
</table>
</td>
</tr>

</table>
</form>
</body>
</html>

		