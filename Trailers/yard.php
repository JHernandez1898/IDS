<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trailers IDS</title>
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/yard.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/yard.js"></script>
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
    <h1>Yard Management</h1>
    </section>
    <section>
        <article class="yardstorage">
            <table class="table">
            <tr>
                <th>Space</th>   
                <th>Trailer Company</th>
                <th>Trailer Number</th>
                <th>Plate Number</th>
                <th>Entry</th>
                <th>Days on yard</th>
                <th></th>
            </tr>
            <tbody id="campos">
            </tbody>
            </table>
        </article>
        <script>MostrarEstadiasYard();</script>
    </section>
</body>
</html>