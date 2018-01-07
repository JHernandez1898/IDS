<?php 
function conexion(){
  $serverName = "70.124.112.243"; //serverName\instanceName
$connectionInfo = array( "Database"=>"Aduana", "UID"=>"masterIDS", "PWD"=>"masterIDS");
$conn = sqlsrv_connect($serverName, $connectionInfo) ;

if( $conn ) {
     echo "";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
	 
}

  return $conn;
	 
 }
 function conectarlocalmente(){
	  $strHost ="localhost";
  $strUsuario = "root";
  $strClave = "";
  $strBaseDeDatos = "ids";
  $idCone = mysqli_connect ($strHost, $strUsuario, $strClave,$strBaseDeDatos) or
           die ("Error conectando al servidor $host con el
                 nombre de usuario $usuario");

  return $idCone;
 }
 function Mostrar_info($query,$idCone){
	 ?>
<link href="Recursos/css/bootstrap.css" rel="stylesheet" type="text/css">
	<div class="container">
     <div class="row">
     <article class="col-lg-12">
      <table class="table table-striped table-bordered" width="834" border="1">
        <tbody>
          <tr>
            <th width="22" bgcolor="#6C85F7" scope="col">N°</th>
            <th width="121" bgcolor="#6C85F7" scope="col">Refererencia</th>
            <th bgcolor="#6C85F7" scope="col" width="150">Fecha</th>
            <th width="77" bgcolor="#6C85F7" scope="col">Impo/Expo</th>
            <th width="48" bgcolor="#6C85F7" scope="col">Cliente</th>
            <th width="150" bgcolor="#6C85F7" scope="col">Descripcion del cliente</th>
            <th width="74" bgcolor="#6C85F7" scope="col">Proveedor</th>
            <th width="110" bgcolor="#6C85F7" scope="col">Descripcion del proveedor</th>
            <th width="65" bgcolor="#6C85F7" scope="col">Regimen </th>
            <th width="100" bgcolor="#6C85F7" scope="col">Pedimento</th>
            <th width="100" bgcolor="#6C85F7" scope="col">Anexo</th>
          </tr>
          <?php
		  $c = 0; 
		  while($F = sqlsrv_fetch_array($query)){
			  $c++;
			  $date = " " ;
			  $imp =" " ;
			  if($F["traFechaCruce"]!=null){
			   $date = date_format($F["traFechaCruce"],'Y-m-d');
			   if($F["traImpExp"] == "1"  ){
			   $imp = "Importacion";
		   }else if ($F["traImpExp"] != null){
			   $imp = "Exportacion";
		   }
			  }
			   ?>
          <tr>
            <td><?php echo $c ?></td>
            <td><?php echo $F["traReferencia"] ;?></td>
            <td><?php echo $date;?></td>
            <td><?php echo $imp;?></td>
            <td><?php echo $F['traCli'];?></td>
            <td><?php $sqlquery = "SELECT * FROM dbo.Clientes WHERE CLIENTE_ID LIKE '".$F['traCli']."'" ;
			$cliente = sqlsrv_query($idCone,$sqlquery);
			while($T = sqlsrv_fetch_array($cliente)){
				echo $T["Nom"];
			}
			?></td>
            <td><?php echo $F["Proveedor_id"]; ?></td>
            <td><?php 
			$sqlquery = "SELECT * FROM dbo.ProCli WHERE PROVEEDOR_ID LIKE '".$F['Proveedor_id']."'" ;
			$cliente = sqlsrv_query($idCone,$sqlquery);
				while($T = sqlsrv_fetch_array($cliente)){
					echo $T["proNom"];
					}
			?></td>
            <td><?php echo $F["TIPO_REG"]; ?></td>
            <td><?php  echo $F["Pedimento"];?></td>
            <td><a href="C:\Trafico\INDISEIN\DIGITALIZACION\PEDIMENTO\<?php echo $F["traReferencia"]; ?>.pdf"><?php echo $F["traReferencia"]?></a></td>
          </tr>
          <?php }?>
        </tbody>
      </table>
	</article>
    </div> 
    </div>
	 <?php
 }?>