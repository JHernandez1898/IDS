<?php
session_start(); 
if (!isset($_SESSION['User']))  header('Location: Login.php'); 
include("Recursos/Template.php");
require "../conect.php";
$idCone = conexion();
$id = $_SESSION["id"];

$sql = "SELECT * FROM dbo.Trafico WHERE traCli LIKE '$id'";
if($id == "00"  ){
	$sql = "SELECT * FROM dbo.Trafico";
}
$F = sqlsrv_query($idCone,$sql);
$c = 0
 ?> 

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

    <div class="col-sm-8 text-left"> 
      <h1>Trafico
      </h1>
      <hr>
      <p>&nbsp;</p>
    
      <form action="trafico.php" method="post">
      <table width="500" border="0">
        <tbody>
          <tr bgcolor="#6C85F7">
            <th height="44" scope="col">Referencia:</th>
            <th scope="col"><input type="text" name="ref"></th>
            <th scope="col">Cliente:</th>
            <th scope="col"><input type="text" name="Cliente"></th>
            <th scope="col">Imp/Exp/(1/2):</th>
            <th scope="col"><input type="text" name="ImpExp"></th>
          </tr>
          <tr bgcolor="#6C85F7">
            <th scope="row">Fecha Inicial</th>
            <td><input type="date" name="fecha_inicial"></td>
            <td>Fecha Final</td>
            <td><input type="date" name="fecha_final" value="0/0/0"></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr bgcolor="#6C85F7">
            <th scope="row">&nbsp;</th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" value="Ingresar"></td>
            <td><a href="trafico.php"><input type="button" value="Regresar"></a></td>
          </tr>
        </tbody>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
        <?php
	if(isset($_POST['ref'])!=""||isset($_POST['Cliente'])!=""||isset($_POST['ImpExp'])!=""){
		if($_POST['fecha_inicial']==null&&$_POST['fecha_final']==null){
			if(isset($_POST['ref'])!=""){
		  $ref = $_POST["ref"];
		 
	      $sqlref = "SELECT * FROM dbo.Trafico WHERE traReferencia LIKE '$ref'";
		  $query2 = sqlsrv_query($idCone,$sqlref);
		  ?>
	
	<table width="783" border="1">
        <tbody>
          <tr>
            <th width="787" bgcolor="#6C85F7" style="font-size: 24px; text-align: center;" scope="col">Reportes </th>
          </tr>
        </tbody>
      </table>
      </form>
      <p>&nbsp;</p>
      <table width="800" border="1">
        <tbody>
       
          <tr bgcolor="#6C85F7" style="font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif">
            <th scope="col">No.</th>
            <th scope="col">Referencia</th>
            <th scope="col">Numero de cliente</th>
            <th scope="col">Imp/Exp</th>
            <th scope="col">Pedimento</th>
            <th scope="col">Fecha Pago</th>
            <th scope="col">Clave de Doc</th>
            <th scope="col">Cliente</th>
            <th scope="col">Ver Anexo</th>
          </tr>
           <?php while ($R = sqlsrv_fetch_array($query2)){ 
		   $c++;
		   $imp;
		   if($R["traImpExp"] == "1" ){
			   $imp = "Importacion";
		   }else{
			   $imp = "Exportacion";
		   }
		   $date = date_format($R["traFechaAct"],'Y-m-d');?>
          <tr style="font-size: 12px;">
            <th scope="row"><?php echo $c; ?></th>
            <td><?php echo $R["traReferencia"]; ?></td>
            <td><?php echo $R["traCli"]; ?></td>
            <td><?php echo $imp; ?></td>
            <td><?php echo $R["traPedimento"]; ?></td>
            <td><?php echo $date; ?></td>
            <td><?php echo $R["TRAREGIMEN"]; ?></td>
            <td><?php $sqlquery = "SELECT * FROM dbo.Clientes WHERE CLIENTE_ID LIKE '".$R['traCli']."'" ;
			$cliente = sqlsrv_query($idCone,$sqlquery);
			while($T = sqlsrv_fetch_array($cliente)){
				echo $T["Nom"];
			}
			?></td>
            <td><a href="C:\Trafico\INDISEIN\DIGITALIZACION\PEDIMENTO\<?php echo $R["traReferencia"]; ?>.pdf"><?php echo $R["traReferencia"]?></a></td>
          </tr>
          <?php }
	  }?>
       		 </tbody>
     		 </table>
	
			<?php
            if(isset($_POST['Cliente'])!=""){
              $ref = $_POST["Cliente"];
             
              $sqlcli = "SELECT * FROM dbo.Trafico WHERE traCli LIKE '$ref'";
              $query3 = sqlsrv_query($idCone,$sqlcli);
              ?>
        
        
          </form>
          <p>&nbsp;</p>
          <table width="800" border="1">
            <tbody>
           
              <tr bgcolor="#6C85F7" style="font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif">
                <th scope="col">No.</th>
                <th scope="col">Referencia</th>
                <th scope="col">Numero de cliente</th>
                <th scope="col">Imp/Exp</th>
                <th scope="col">Pedimento</th>
                <th scope="col">Fecha Pago</th>
                <th scope="col">Clave de Doc</th>
                <th scope="col">Cliente</th>
                <th scope="col">Ver Anexo</th>
              </tr>
               <?php while ($R = sqlsrv_fetch_array($query3)){ 
               $c++;
               $imp;
               if($R["traImpExp"] == "1" ){
                   $imp = "Importacion";
               }else{
                   $imp = "Exportacion";
               }
               $date = date_format($R["traFechaAct"],'Y-m-d');?>
              <tr style="font-size: 12px;">
                <th scope="row"><?php echo $c; ?></th>
                <td><?php echo $R["traReferencia"]; ?></td>
                <td><?php echo $R["traCli"]; ?></td>
                <td><?php echo $imp; ?></td>
                <td><?php echo $R["traPedimento"]; ?></td>
                <td><?php echo $date; ?></td>
                <td><?php echo $R["TRAREGIMEN"]; ?></td>
                <td><?php $sqlquery = "SELECT * FROM dbo.Clientes WHERE CLIENTE_ID LIKE '".$R['traCli']."'" ;
                $cliente = sqlsrv_query($idCone,$sqlquery);
                while($T = sqlsrv_fetch_array($cliente)){
                    echo $T["Nom"];
                }
                ?></td>
                <td><a href="C:\Trafico\INDISEIN\DIGITALIZACION\PEDIMENTO\<?php echo $R["traReferencia"]; ?>.pdf"><?php echo $R["traReferencia"]?></a></td>
              </tr>
              <?php }
            }?>
            </tbody>
          </table>
			<?php
            if(isset($_POST['ImpExp'])!=""){
              $ref = $_POST["ImpExp"];
             
              $sqlcli = "SELECT * FROM dbo.Trafico WHERE traImpExp LIKE '$ref'";
              $query3 = sqlsrv_query($idCone,$sqlcli);
              ?>
        
        
          </form>
          <p>&nbsp;</p>
          <table width="800" border="1">
            <tbody>
           
              <tr bgcolor="#6C85F7" style="font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif">
                <th scope="col">No.</th>
                <th scope="col">Referencia</th>
                <th scope="col">Numero de cliente</th>
                <th scope="col">Imp/Exp</th>
                <th scope="col">Pedimento</th>
                <th scope="col">Fecha Pago</th>
                <th scope="col">Clave de Doc</th>
                <th scope="col">Cliente</th>
                <th scope="col">Ver Anexo</th>
              </tr>
               <?php while ($R = sqlsrv_fetch_array($query3)){ 
               $c++;
               $imp;
               if($R["traImpExp"] == "1" ){
                   $imp = "Importacion";
               }else{
                   $imp = "Exportacion";
               }
               $date = date_format($R["traFechaAct"],'Y-m-d');?>
              <tr style="font-size: 12px;">
                <th scope="row"><?php echo $c; ?></th>
                <td><?php echo $R["traReferencia"]; ?></td>
                <td><?php echo $R["traCli"]; ?></td>
                <td><?php echo $imp; ?></td>
                <td><?php echo $R["traPedimento"]; ?></td>
                <td><?php echo $date; ?></td>
                <td><?php echo $R["TRAREGIMEN"]; ?></td>
                <td><?php $sqlquery = "SELECT * FROM dbo.Clientes WHERE CLIENTE_ID LIKE '".$R['traCli']."'" ;
                $cliente = sqlsrv_query($idCone,$sqlquery);
                while($T = sqlsrv_fetch_array($cliente)){
                    echo $T["Nom"];
                }
                ?></td>
                <td><a href="C:\Trafico\INDISEIN\DIGITALIZACION\PEDIMENTO\<?php echo $R["traReferencia"]; ?>.pdf"><?php echo $R["traReferencia"]?></a></td>
              </tr>
              <?php 
               }
          }?>
            </tbody>
          </table>
		
	  	<?php }
		else{
	     $fechaini = $_POST["fecha_inicial"];
		 $fechafinal = $_POST["fecha_final"];
		  $ref = $_POST["ref"];
		 $fechaini = $_POST["fecha_inicial"];
		 $fechafinal = $_POST["fecha_final"];
	      $sqlref = "SELECT * FROM dbo.Trafico WHERE traFechaAct BETWEEN '$fechaini' AND '$fechafinal'";
		  $query2 = sqlsrv_query($idCone,$sqlref);
		  ?>
	
	<table width="783" border="1">
        <tbody>
          <tr>
            <th width="787" bgcolor="#6C85F7" style="font-size: 24px; text-align: center;" scope="col">Reportes </th>
          </tr>
        </tbody>
      </table>
      </form>
      <p>&nbsp;</p>
      <table width="800" border="1">
        <tbody>
       
          <tr bgcolor="#6C85F7" style="font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif">
            <th scope="col">No.</th>
            <th scope="col">Referencia</th>
            <th scope="col">Numero de cliente</th>
            <th scope="col">Imp/Exp</th>
            <th scope="col">Pedimento</th>
            <th scope="col">Fecha Pago</th>
            <th scope="col">Clave de Doc</th>
            <th scope="col">Cliente</th>
            <th scope="col">Ver Anexo</th>
          </tr>
           <?php while ($R = sqlsrv_fetch_array($query2)){ 
		   $c++;
		   $imp;
		   if($R["traImpExp"] == "1" ){
			   $imp = "Importacion";
		   }
		   else{
			   $imp = "Exportacion";
		   }
		   $date = date_format($R["traFechaAct"],'Y-m-d');?>
          <tr style="font-size: 12px;">
            <th scope="row"><?php echo $c; ?></th>
            <td><?php echo $R["traReferencia"]; ?></td>
            <td><?php echo $R["traCli"]; ?></td>
            <td><?php echo $imp; ?></td>
            <td><?php echo $R["traPedimento"]; ?></td>
            <td><?php echo $date; ?></td>
            <td><?php echo $R["TRAREGIMEN"]; ?></td>
            <td><?php $sqlquery = "SELECT * FROM dbo.Clientes WHERE CLIENTE_ID LIKE '".$R['traCli']."'" ;
			$cliente = sqlsrv_query($idCone,$sqlquery);
			while($T = sqlsrv_fetch_array($cliente)){
				echo $T["Nom"];
			}
			?></td>
            <td><a href="C:\Trafico\INDISEIN\DIGITALIZACION\PEDIMENTO\<?php echo $R["traReferencia"]; ?>.pdf"><?php echo $R["traReferencia"]?></a></td>
          </tr>
          <?php }
	  ?>
       		 </tbody>
     		 </table>
	
			
		
	
	
	<?php
			}
			
		
	}else{ ?>
      
      </form>
      <p>&nbsp;</p>
      <table width="800" border="1">
        <tbody>
       
          <tr bgcolor="#6C85F7" style="font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif">
            <th scope="col">No.</th>
            <th scope="col">Referencia</th>
            <th scope="col">Numero de cliente</th>
            <th scope="col">Imp/Exp</th>
            <th scope="col">Pedimento</th>
            <th scope="col">Fecha Pago</th>
            <th scope="col">Clave de Doc</th>
            <th scope="col">Cliente</th>
            <th scope="col">Ver Anexo</th>
          </tr>
           <?php while ($R = sqlsrv_fetch_array($F)){ 
		   $c++;
		   $imp;
		   if($R["traImpExp"] == "1" ){
			   $imp = "Importacion";
		   }else{
			   $imp = "Exportacion";
		   }
		   $date = date_format($R["traFechaAct"],'Y-m-d');?>
          <tr style="font-size: 12px;">
            <th scope="row"><?php echo $c; ?></th>
            <td><?php echo $R["traReferencia"]; ?></td>
            <td><?php echo $R["traCli"]; ?></td>
            <td><?php echo $imp; ?></td>
            <td><?php echo $R["traPedimento"]; ?></td>
            <td><?php echo $date; ?></td>
            <td><?php echo $R["TRAREGIMEN"]; ?></td>
            <td><?php $sqlquery = "SELECT * FROM dbo.Clientes WHERE CLIENTE_ID LIKE '".$R['traCli']."'" ;
			$cliente = sqlsrv_query($idCone,$sqlquery);
			while($T = sqlsrv_fetch_array($cliente)){
				echo $T["Nom"];
			}
			?></td>
            <td><a href="C:\Trafico\INDISEIN\DIGITALIZACION\PEDIMENTO\<?php echo $R["traReferencia"]; ?>.pdf"><?php echo $R["traReferencia"]?></a></td>
          </tr>
          <?php }
		}
		?>
        </tbody>
      </table>
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
