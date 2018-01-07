<?php 
session_start();
 if (!isset($_SESSION['User']))  header('Location: Login.php'); 
include("Recursos/Template.php");
require("../conect.php");
$idCliente = $_SESSION["id"];
$idCone = conexion();
$sql ="SELECT * FROM dbo.Trafico FULL OUTER JOIN dbo.tblNotaRevGen ON dbo.Trafico.traReferencia = dbo.tblNotaRevGen.Referencia WHERE traCli LIKE '$idCliente'";
if($idCliente == "00"){
	$sql ="SELECT * FROM dbo.Trafico FULL OUTER JOIN dbo.tblNotaRevGen ON dbo.Trafico.traReferencia = dbo.tblNotaRevGen.Referencia";
}
$query = sqlsrv_query($idCone,$sql);
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Reportes IDS</title>
<link href="../Recursos/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
	<div class="row">
    	<h1 class="page-header">
      		Pedimentos
      	</h1>
     </div>
     
     <div class="row">
     	<article class="col-lg-12">
         <form action="pedimento.php" method="post">
      <table  style="background-color:#6F9BC4" class="table " width="200" border="0">
        <tbody>
          <tr>
            <th height="44" scope="col">Referencia</th>
            <th scope="col"><input type="text" name="referencia"></th>
            <th scope="col">Pedimento</th>
            <th scope="col"><input type="text" name="pedimento"></th>
            <th scope="col">Tipo de operacion</th>
            <th scope="col"><input type="text" name="operacion"></th>
          </tr>
          <tr>
            <th>Clave del pedimento</th>
            <td><input type="text" name="clave"></td>
            <td>Aduana E/S</td>
            <td><input type="text" name="aduana"></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th>&nbsp;</th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" class="btn btn-info btn-sm"  value="Ingresar"></td>
            <td><input type="submit" class="btn btn-info btn-sm"  value="Regresar"></td>
          </tr>
        </tbody>
      </table>
      </form>
      <p>&nbsp;</p>
      <table class="table" width="783" border="1">
        <tbody>
          <tr>
            <td bgcolor="#6C85F7" style="text-align: center; font-size: 36px;">Reportes</td>
          </tr>
        </tbody>
      </table>
        </article>
     </div>
     </div>
     </body>
     </html>
<?php 
if($_POST){
	$referencia = $_POST["referencia"];
	$operacion  =$_POST["operacion"];
	$pedimento = $_POST["pedimento"];
	$aduana = $_POST['aduana'];
	$clave = $_POST["clave"];
	
	if($referencia != null){
		$sqlreferencia = "SELECT * FROM dbo.Trafico FULL OUTER JOIN dbo.tblNotaRevGen ON dbo.Trafico.traReferencia = 					dbo.tblNotaRevGen.Referencia WHERE traReferencia LIKE '$referencia'";
		$queryref = sqlsrv_query($idCone, $sqlreferencia);
		Mostrar_info($queryref,$idCone);
		
	}
	if($operacion != null){
		$sqloperacion = "SELECT * FROM dbo.Trafico FULL OUTER JOIN dbo.tblNotaRevGen ON dbo.Trafico.traReferencia = 					dbo.tblNotaRevGen.Referencia WHERE traImpExp LIKE '$operacion'";
		$queryoperacion = sqlsrv_query($idCone, $sqloperacion);
		Mostrar_info($queryoperacion,$idCone);
	}
	if($pedimento != null){
		$sqlpedimento = "SELECT * FROM dbo.Trafico FULL OUTER JOIN dbo.tblNotaRevGen ON dbo.Trafico.traReferencia = 					dbo.tblNotaRevGen.Referencia WHERE Pedimento LIKE '$pedimento'";
		$queryoperacion = sqlsrv_query($idCone, $sqlpedimento);
		Mostrar_info($queryoperacion,$idCone);
	}
	if($aduana != null){
		$sqladuana = "SELECT * FROM dbo.Trafico FULL OUTER JOIN dbo.tblNotaRevGen ON dbo.Trafico.traReferencia = 					dbo.tblNotaRevGen.Referencia WHERE ADUANA LIKE '$aduana'";
		$queryaduana = sqlsrv_query($idCone, $sqladuana);
		Mostrar_info($queryaduana,$idCone);
	}
	if($clave != null){
		$sqlclave = "SELECT * FROM dbo.Trafico FULL OUTER JOIN dbo.tblNotaRevGen ON dbo.Trafico.traReferencia = 					dbo.tblNotaRevGen.Referencia WHERE CLAVEPED LIKE '$clave'";
		$queryclave = sqlsrv_query($idCone, $sqlclave);
		Mostrar_info($queryclave,$idCone);
	}
}
else
{
	 Mostrar_info($query,$idCone);
}
?>
