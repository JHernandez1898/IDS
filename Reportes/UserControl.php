<!doctype html5>
<?php session_start(); ?>
<html>
    <title>Control de Usuarios</title>
    <head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/control.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/pedimentos.js"></script>
        <script type="text/javascript" src="js/usercontrol.js"></script>
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
                <h1>Control de Usuarios</h1>
                <span>Control de los usuarios de reportes</span>
            </div>
        </header>
        <section class="usuarios">
            <div class="scrolltable">
            <table id="tablausuarios" class="tablausuarios">
                <tr>
                <th>N°</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Número</th>
                <th>Estado</th>
                <th></th>
                </tr>
                <tbody id="contenido">
                </tbody>
                <script>MostrarUsuarios();</script>
            </table>
            </div>
        </section>
        <section class="editarusuarios">
            <table class="tablaedicion">
                <tr>
                    <th> Configuración de Usuario    </th>
                </tr>
                <tr>
                    <td>
                    <form id = "frmUsuarios">
                        <span class="lbl">Nombre:</span><br>
                        <input type="text" name="nombre" id="nombre" class="txt"><br>
                        <span class="lbl">Contraseña:</span><br>
                        <input type="text" name="pass" id="pass" class="txt"><br>
                        <span class="lbl">Número:</span><br>
                        <input type="text" name="num" id="num" class="txt"><br>
                        <span class="lbl">Estado:</span><br>
                        <select id="estatus" name="estatus">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                        </select>
                        <input type="submit" class="botoneditar" onclick="ModificarUsuario()" id="btnEdicion" value="Guardar">
                        <input type="hidden" id="numeroviejo" name="numeroviejo">
                        <input type="hidden" value="ModificarUsuario" name="funcion">
                        </form>
                        <span id="mensaje"></span>
                    </td>
                </tr>
            </table>
        </section>
    </body>
</html>