<?php
    require("../conect.php");
    $idCone = conexion();
    $sql = "SELECT dbo.Clientes.CLIENTE_ID,Nom  AS CLIENTE FROM dbo.Clientes";
    $query = sqlsrv_query($idCone,$sql);
    $Resultado =array();
    while($F = sqlsrv_fetch_array($query))$Resultado[]  = $F;
    if($query) echo json_encode($Resultado);    
    else echo sqlsrv_error();
?>