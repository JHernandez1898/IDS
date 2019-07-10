<?php 
session_start();
if (!isset($_SESSION['User']))  header('Location: Login.php'); 
 ?>
<!doctype html5>
<html>
<head>
<meta charset="utf-8">
<title>Reportes IDS</title>
<link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="css/pedimentos.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/pedimentos.js"></script>

</head>
<body>
<header>
    <nav>
        <ul>
            <li class="logo"><img src="img/logo.png"> </li>
            <li><a href="index.php">Pedimentos</a></li>
            <li><a href="trafico.php">Trafico</a></li>
            <li>Facturas</li>
            <li>Estados de Cuenta (MX)</li>
            <li>Estados de Cuenta (US)</li>
        </ul>
    </nav>
    <div class="titulo">
        <h1>Búsqueda en Tráfico</h1>
        <span>En el siguiente apartado puede buscar pedimientos</span>
    </div>
</header>
    
<section class="busqueda">
        <article class="parametros">
            
            <form id="frmBusqueda" method="post">
                <table class="tablabusqueda">
                    <tr><th>Parámetros de Búsqueda</th></tr>
                <tr><td>
                    <span class="label">Referencia:</span>
                    <input class="textbox" type="text" name="ref" id="ref">
                    <span class="label">Cliente:</span>
                    <input class="textbox" type="text" name="cli" id="cli">
                    <span class="label">Operación:</span>
                    <input class="textbox" type="text" name="ope" id="ope"><br>
                    <span class="label">Fecha Inicial:</span>
                    <input type="date" name="fec_ini" id="fec_ini">
                    <span class="label">Fecha Final:</span>
                    <input type="date" name="fec_fin" id="fec_fin">
                    <input type="submit" onclick="BuscarPedimentos()" value="Buscar" class="btn">
                    </td>
                </tr>
                </table>
             </form>  
         </article>
    </section>
    <section class="resultado">
        <article>
            <table class='tablatrafico' id="contenido">
            </table>
    </article>
    </section>
     </body>
     </html>