<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trailers IDS</title>
    <link href="css/estilo.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/entrada.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    <script src="js/entrada.js"></script>
</head>
<body>
   <header>
       <nav class="menubar">
            <ul>   
                <li><a href="../index.html"><img class="menuico" src="img/regresar.png"></a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="entrada.php" >Log In</a></li>
                <li><a href="storage.php" >Storage</a></li>
                <li><a href="yard.php" >Yard</a></li>
                <li><a href="dock.php" >Dock</a></li>
                <li><a href="reportes.php" >Reports</a></li>
            </ul>
       </nav>
    </header>
    <section class="headliner">
    <h1 class="titulo">Register Entry</h1>
    </section>
    <section class="formulario">
         <!-- Truck-->
        <article class="articulo">
        <table class="tablaform">
            <tr>
                <th><img src="img/uno.png"><span>Truck Information</span></th>
            </tr>
            <tr>
                <td>
                    <span>Truck number: </span>
                    <select class='selectpicker' data-show-subtext='true' data-live-search='true' id="trucknumber" name="trucknumber"  class="select" onchange="MostrarTruck()">
                    </select>
                    <script>MostrarTrucks()</script>
                    <button onclick="MostrarRegistroTrucks()" class="btnRegistro">New</button>
                </td>
            </tr>
            <tr id="registrotruck">
            </tr>
        </table>
        </article>
       
        <!--Drivers-->
        <article class="articulo">
        <table class="tablaform">
            <tr>
                <th><img src="img/dos.png"><span>Driver Information</span></th>
            </tr>
            <tr>
                <td>
                    <span>Driver ID: </span><br>
                    <select class='selectpicker' data-show-subtext='true' data-live-search='true' id="driverid" name="driverid" class="select" onchange="MostrarDriver()">
                    </select>
                    <script>MostrarDrivers()</script>
                    <button onclick="MostrarRegistroDrivers()" class="btnRegistro">New</button>
                </td>
            </tr>
            <tr id="registrardriver">
            </tr>
        </table>
        </article>
        <!-- Trailer-->
        <article class="articulo">
        <table class="tablaform">
            <tr>
                <th><img src="img/tres.png"><span>Trailer Information</span></th>
            </tr>
            <tr>
                <td>
                    <span>Trailer Number: </span>
                    <select class='selectpicker' data-show-subtext='true' data-live-search='true' id="tnumber" name="tnumber"  onchange="MostrarTrailer()" class="select">
                    </select>
                    <script>MostrarTrailers()</script>
                    <button onclick="MostrarRegistroTrailer()" class="btnRegistro">New</button>
                </td>
            </tr>
            <tr id="campos">
            </tr>
        </table>
        </article>
        <!--Consignación-->
         <article class="articulo">
        <table class="tablaform">
            <tr>
                <th><img src="img/4.png"><span>Consignment Information</span></th>
            </tr>
            <tr>
                <td>
                    <span>Consignment: </span>
                    <select class='selectpicker' data-show-subtext='true' data-live-search='true' id="consigna" name="consigna"  class="select">
                    </select>
                    <script>MostrarConsigna()</script>
                    <button onclick="MostrarRegistroConsigna()" class="btnRegistro">New</button>
                </td>
            </tr>
            <tr id="registrarconsigna">
            </tr>
        </table>
        </article>
        <!--General-->
         <article class="articulo">
        <table class="tablageneral">
            <tr>
                <th><img src="img/cinco.png"><span>General</span></th>
            </tr>
            <tr>
                <td>
                    <span class="lbl">Seal Number: </span>
                    <input type="text" class="input" id="sealnumber" name="sealnumber">
                    <span class="lbl">LD/MT: </span>
                    <select class='selectpicker' name = "LDMT" id = "LDMT" data-show-subtext = 'true' data-live-search='true'>
                    <option value="MT">MT</option>
                    <option value="LD">LD</option>
                    </select><br>
                    <span class="lbl">Type: </span>
                    <select class='selectpicker' name="tipo" id = "tipo" data-show-subtext='true' data-live-search='true'>
                    <option value="P/U">P/U</option>
                    <option value="DELIVERY">DELIVERY</option>
                    <option value="DROP">DROP</option>
                    </select>
                    <span class="lbl">Hour: </span>
                    <input type="time" class="input" name="hora" id="hora">
                    <button onclick="RegistrarEntrada()" class="btnRegistro">Register Entry</button>
                </td>
            </tr>
        </table>
        </article>
    </section>
</body>
</html>