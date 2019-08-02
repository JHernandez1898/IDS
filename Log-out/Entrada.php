<?php 
include("Template.php");
require("../conect.php");
$idCone =  conectarlocalmente();
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
			<title>Entrada</title>
				<link href="../Recursos/css/bootstrap.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="container">
			<div class="row">
    			<h1 class="page-header" style="text-align:center">
        			Registro de entrada
        		</h1>
    		</div> 
            
    		<div class="row">
    			<article class="col-lg-12">
        			<form action="registrarentrada.php" method="post">
						<table width="200" border="0" align="center">
 							<tbody>
    							<tr>
    					  			<td class="alert-info text-info">Por favor ingrese o pase el codigo de su gafete</td>
  					  			</tr>
    							<tr>
      								<td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><input class="input-sm" name="serie" type="text" id="serie" size="50"></td>
                                </tr>
                                <tr>
                                    <td align="center">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td align="center"><input class="btn btn-sm btn-success" type = submit value="Continuar"></td>
                                </tr>
                                <tr>
                                  <td align="center">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="center"><a href="index.php"><input type="button" class="btn btn-sm btn-warning" value="Regresar"></a>    								</td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </article>
            </div>
        </div> 
	</body>
</html>