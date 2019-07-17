<?php
    require("../conect.php");
    $idCone = conexion();
    if($_POST["ref"]!='')$ref=  $_POST["ref"];else $ref = 1;
    if($_POST["ped"]!='')$ped =  $_POST["ped"];else $ped =1;
    if($_POST["clv"]!='')$clv =  $_POST["clv"];else $clv =1;
    if($_POST["fec_ini"]!='')$fec_ini =  $_POST["fec_ini"];else $fec_ini  = 1;
    if($_POST["fec_fin"]!='')$fec_fin =  $_POST["fec_fin"];else $fec_fin  =1;
    $cli = $_POST["cli"];
    
    $sql = "SELECT traReferencia AS REF,CASE WHEN B.PEDIMENTO IS NULL THEN 'N/A' ELSE B.PEDIMENTO END  AS PED,CASE WHEN traFechaAct IS NULL THEN 'N/A' ELSE CONVERT(varchar, traFechaAct,101) END AS FEC, CASE WHEN C.Nom IS NULL THEN 'N/A' ELSE C.Nom END AS CLIENTE,CASE WHEN D.proNom IS NULL THEN 'N/A' ELSE D.proNom END AS PROVEEDOR, CASE traImpExp WHEN 1 THEN 'IMP' ELSE 'EXP' END AS IMP, B.TIPO_REG AS REG,CLAVEPED FROM dbo.Trafico as A FULL OUTER JOIN dbo.tblNotaRevGen AS B ON A.traReferencia = B.Referencia LEFT JOIN dbo.Clientes AS C ON C.CLIENTE_ID = A.traCli LEFT JOIN dbo.ProCli AS D ON D.PROVEEDOR_ID = B.Proveedor_id WHERE A.traReferencia = A.traReferencia";
    if($cli !=0)$sql .= " AND C.CLIENTE_ID = '$cli'";
    else{
        $clientes  = $_POST["Clientes"];
        if($clientes !=0) $sql .=" AND C.CLIENTE_ID = '$clientes'";
    }
	if($ref != 1) $sql .= " AND traReferencia = '$ref'";
	if($ped != 1)$sql .=" AND Pedimento = '$ped'";
	if($clv != 1)$sql .= " AND CLAVEPED = '$clv'";
	if($fec_ini != 1 && $fec_fin!=1) $sql .= " AND A.traFechaAct BETWEEN '$fec_ini' AND '$fec_fin'";
    else if($fec_ini != 1) $sql .=" AND A.traFechaAct > '$fec_ini'";
    else if($fec_fin != 1) $sql .= " AND A.traFechaAct < '$fec_fin'";
    $sql .=" ORDER BY traFechaAct DESC";
    $query = sqlsrv_query($idCone,$sql);
    $Resultado =array();
    while($F = sqlsrv_fetch_array($query))$Resultado[]  = $F;
    if($query)echo json_encode($Resultado);    
    else echo sqlsrv_error();
?>
