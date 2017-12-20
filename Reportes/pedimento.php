<?php 
session_start();
 if (!isset($_SESSION['User']))  header('Location: Login.php'); 
include("Recursos/Template.php");
require("conect.php");
$idCliente = $_SESSION["id"];
$idCone = conexion();
$sql ="SELECT * FROM dbo.Trafico FULL OUTER JOIN dbo.tblNotaRevGen ON dbo.Trafico.traReferencia = dbo.tblNotaRevGen.Referencia WHERE traCli LIKE '$idCliente'";
if($idCliente == "00"){
	$sql ="SELECT * FROM dbo.Trafico FULL OUTER JOIN dbo.tblNotaRevGen ON dbo.Trafico.traReferencia = dbo.tblNotaRevGen.Referencia";
}
$query = sqlsrv_query($idCone,$sql);
echo $_SESSION["id"] ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Reportes IDS</title>
</head>

    <div class="col-sm-8 text-left"> 
      <h1>Pedimento</h1>
      <hr>
      <p>&nbsp;</p>
      <form action="pedimento.php" method="post">
      <table width="200" border="0">
        <tbody>
          <tr bgcolor="#6C85F7">
            <th height="44" scope="col">Referencia</th>
            <th scope="col"><input type="text" name="referencia"></th>
            <th scope="col">Pedimento</th>
            <th scope="col"><input type="text" name="pedimento"></th>
            <th scope="col">Tipo de operacion</th>
            <th scope="col"><input type="text" name="operacion"></th>
          </tr>
          <tr bgcolor="#6C85F7">
            <th scope="row">Clave del pedimento</th>
            <td><input type="text" name="clave"></td>
            <td>Aduana E/S</td>
            <td><input type="text" name="aduana"></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr bgcolor="#6C85F7">
            <th scope="row">&nbsp;</th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" value="Ingresar"></td>
            <td><input type="submit" value="Regresar"></td>
          </tr>
        </tbody>
      </table>
      </form>
      <p>&nbsp;</p>
      <table width="783" border="1">
        <tbody>
          <tr>
            <td bgcolor="#6C85F7" style="text-align: center; font-size: 36px;">Reportes</td>
          </tr>
        </tbody>
      </table>
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
<p>&nbsp;</p>
    
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <h3>&nbsp;</h3>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>
<body>
</body>
</html>
