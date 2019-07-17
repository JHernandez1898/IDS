<?php 
session_start();
if (!isset($_SESSION['User']))  header('Location: Login.php'); 
 ?>
<!doctype html5>
<html>
<head>
<meta charset="utf-8">
<title>Reportes IDS</title>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/pedimentos.js"></script>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
<link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="css/pedimentos.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

</head>
<body>
<header>
    <nav class="menubar">
        <ul>
            <li class="logo"><img src="img/logo.png"> </li>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="Login.php">Salir</a></li>
            <?php if($_SESSION["Numero"] == 0){?><li><a href="UserControl.php">Usuarios</a></li><?php }?>
        </ul>
    </nav>
    <div class="titulo">
        <h1>Búsqueda de Pedimentos</h1>
        <span>En el siguiente apartado puede buscar pedimientos</span>
    </div>
</header>
    
<section class="busqueda">
        <article class="parametros">
            
            <form id="frmBusqueda" method="post">
                <table class="tablabusqueda">
                    <tr>
                        <th>Parámetros de Búsqueda</th></tr>
                    <tr>
                        <td>
                            <span class="label">Referencia:</span>
                            <input class="textbox" type="text" name="ref" id="ref">
                            <span class="label">Pedimento:</span>
                            <input class="textbox" type="text" name="ped" id="ped">
                            <span class="label">Clave de Pedimento:</span>
                            <input class="textbox" type="text" name="clv" id="ped"><br>
                            <?php if($_SESSION["Numero"] == 0) {?>
                            <span class='label'>Cliente: </span>
                            <select class='selectpicker' data-show-subtext='true' data-live-search='true' name="Clientes"  id="Clientes">
                            </select>
                             <script> BuscarClientes();</script>
                            <?php }?>
                            <span class="label">Fecha Inicial:</span>
                            <input type="date" name="fec_ini" id="fec_ini">
                            <span class="label">Fecha Final:</span>
                            <input type="date" name="fec_fin" id="fec_fin">
                            
                            <input type="submit" onclick="BuscarPedimentos()" value="Buscar" class="btn">
                            <input type="hidden" id="cli" name="cli" value="<?php echo $_SESSION["Numero"]; ?>">
                        </td>
                    </tr>
                </table>
            </form>  
        </article>
    </section>
        <section class="resultado">
            <article>
                <table class='tablapedimentos' id="contenido">
                </table>
            </article>
        </section>
    </body>
</html>