<?php
session_start();
$_SESSION["User"] = null;
?>
<html>
    <title>Reportes IDS</title>
    <head>
        <link rel="stylesheet" href="css/login.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/login.js"></script>
    </head>
    <body>
        <header>
            <nav>
                <ul>   
                    <li class="logo" ><a href="../index.html" ><img class="imglogo" src="img/logo.png"></a></li>
                    <li>Reportes</li>
                    <li>Empleados</li>
                    <li>Visitas</li>
                    <li>Trailers</li>
                </ul>
            </nav>
        </header>
        <br><br><br>
        <br><br><br>
        <section>
            <article class="tarjeta">
                <span class="Titulo">Bienvenido</span>
                <form id="frmLogin" method="post">
                    <input type="text" class="txtbx" placeholder="Usuario" name="usuario"/><br>
                    <input type="password" class="txtbx"  placeholder="Contraseña" name="pssword"/><br>
                    <input type="submit" onclick="IniciarSesion()" class="btn" value="Entrar">
                    <p class="menregistro">¿No tiene contraseña?,<a href ="solicitarcontraseña.php">Solicitela aquí</a></p>
                    <p class="menregistro"><a href="restablecercontraseña.php">¿Olvido su contraseña?</a></p>
                </form>
                <p class="alert" id="error"></p>
            </article>
    </section>
    </body>
</html>