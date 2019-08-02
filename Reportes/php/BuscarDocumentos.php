<?php
$Doc = array();
$name = $_POST["name"];
$rutapedimento  ="../Anexos/PEDIMENTO/";
$rutafac = "../Anexos/FACTURA/";
$rutamxn = "../Anexos/CUENTAS MEXICANAS/";
$rutausa  = "../Anexos/CUENTAS AMERICANAS/";;
$rutahcal ="../Anexos/HOJA DE CALCULO/";
$rutaval ="../Anexos/MANIFESTACION DE VALOR/";
if(file_exists($rutapedimento.$name)) $Doc[]= 1;else $Doc[] = 0; 
if(file_exists($rutafac.$name)) $Doc[] = 1;else $Doc[] = 0;
if(file_exists($rutamxn.$name)) $Doc[] = 1;else $Doc[] = 0;
if(file_exists($rutausa.$name)) $Doc[] = 1;else $Doc[] = 0;
if(file_exists($rutahcal.$name)) $Doc[] = 1;else $Doc[] = 0;
if(file_exists($rutaval.$name)) $Doc[] = 1;else $Doc[] = 0;
echo json_encode($Doc);
?>

    
