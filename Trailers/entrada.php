<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trailers IDS</title>
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/entrada.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/entrada.js"></script>

</head>
<body>
   <header>
       <nav class="menubar">
           <img class="menuicon" src="img/menu.png">
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
                <td id="datostruck">
                    <span>Truck #: </span><br>
                    <datalist id='trucks'>
                    </datalist>
                    <input type="text" list ="trucks" name="trucknumber" id="trucknumber" onchange="MostrarTruck()">
                    <script>MostrarTrucks()</script>
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
                <td id="datosdriver">
                    <span>Driver ID: </span><br>
                     <datalist id='drivers'>
                    </datalist>
                     <input type="text" list ="drivers" id="driverid" name="driverid" onchange="MostrarDriver()">
                    <script>MostrarDrivers()</script>
                    
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
                <td id="datostrailer">
                    <span>Trailer #: </span><br>
                    <datalist id='trailers'>
                    </datalist>
                    <input type="text" list ="trailers" id="tnumber" name="tnumber"  onchange="MostrarTrailer()" class="select">
                    <script>MostrarTrailers()</script>
                    
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
                <th><img src="img/4.png"><span>Consignment</span></th>
            </tr>
            <tr>
                <td>
                    <datalist id='consignas'>
                    </datalist>
                    <span>Consigment: </span><br>
                    <input type="text" list ="consignas" id="consigna" name="consigna"  class="select">
                    <script>MostrarConsigna()</script>

                </td>
            </tr>
            <tr id="registrarconsigna">
            </tr>
        </table>
        </article><br>
        <!--General-->
         <article class="articulo">
        <table class="tablageneral">
            <tr>
                <th><img src="img/cinco.png"><span>General</span></th>
            </tr>
            <tr>
                <td>
                    <span class="lbl">Seal Number: </span>
                    <input type="text" class="control" id="sealnumber" name="sealnumber">
                    <span class="lbl">LD/MT: </span>
                    <select name = "LDMT" id = "LDMT"  class="control">
                    <option value="MT">MT</option>
                    <option value="LD">LD</option>
                    </select>
                    <span class="lbl">Type: </span>
                    <select name="tipo" id = "tipo"  class="control">
                    <option value="P/U">P/U</option>
                    <option value="DELIVERY">DELIVERY</option>
                    <option value="DROP">DROP</option>
                    </select>
                     <button onclick="RegistrarEntrada()" class="btnCompleto">Register Entry</button>
                </td>
            </tr>
        </table>
        </article>
        <article class="articulo">
        <table class="tablageneral">
            <tr>
                <th><span>Images</span></th>
            </tr>
            <tr>
                <td>
                    
                    <div class="upload-btn-wrapper">
                    <button class="btn"><img id='img1' src="img/a%C3%B1adirimagen.png" width="170" height="170"></button>
                    <input type="file" name="file1" id="file1"  />
                    </div>
                    <div class="upload-btn-wrapper">
                    <button class="btn"><img id='img2' src="img/a%C3%B1adirimagen.png" width="170" height="170"></button>
                    <input type="file"  name="file2" id="file2" capture="camera" />
                    </div>
                    <div class="upload-btn-wrapper">
                    <button class="btn"><img id='img3' src="img/a%C3%B1adirimagen.png" width="170" height="170"></button>
                    <input type="file"  name="file3" id="file3"  capture="camera" />
                    </div>
                    <div class="upload-btn-wrapper">
                    <button class="btn"><img id='img4' src="img/a%C3%B1adirimagen.png" width="170" height="170"></button>
                    <input type="file"  name="file4" id="file4"  capture="camera"/>
                    </div>
                    <div class="upload-btn-wrapper">
                    <button class="btn"><img id='img5' src="img/a%C3%B1adirimagen.png" width="170" height="170"></button>
                    <input type="file"  name="file5" id="file5"   capture="camera" />
                    </div>
                </td>
            </tr>
        </table>
        </article>
      
    </section>
     
    
       <script>
           

document.getElementById("file1").onchange = function(e) {
  let reader = new FileReader();
  reader.readAsDataURL(e.target.files[0]);
  reader.onload = function(){
      $('#img1').attr("src",reader.result);
  };
}

document.getElementById("file2").onchange = function(e) {
  let reader = new FileReader();
  reader.readAsDataURL(e.target.files[0]);
  reader.onload = function(){
      $('#img2').attr("src",reader.result);
  };
}
document.getElementById("file3").onchange = function(e) {
  let reader = new FileReader();
  reader.readAsDataURL(e.target.files[0]);
  reader.onload = function(){
      $('#img3').attr("src",reader.result);
  };
}
document.getElementById("file4").onchange = function(e) {
  let reader = new FileReader();
  reader.readAsDataURL(e.target.files[0]);
  reader.onload = function(){
      $('#img4').attr("src",reader.result);
  };
}
document.getElementById("file5").onchange = function(e) {
  let reader = new FileReader();
  reader.readAsDataURL(e.target.files[0]);
  reader.onload = function(){
      $('#img5').attr("src",reader.result);
  };
}
function RegistrarEntrada(){
    var trailernumber = $("#tnumber").val();
    var driverid  = $("#driverid").val();
    var trucknumber = $("#trucknumber").val();
    var consigna = $("#consigna").val();
    var sealnumber = $("#sealnumber").val();
    var LDMT = $("#LDMT").val();
    var tipo = $("#tipo").val();
    var hora = $("#hora").val();
    var form = new FormData();
    form.append("tnumber",trailernumber);
    form.append("driverid",driverid);
    form.append("trucknumber",trucknumber);
    form.append("consigna",consigna);
    form.append("sealnumber",sealnumber);
    form.append("LDMT",LDMT);
    form.append("tipo",tipo);
    form.append("hora",hora);
    form.append("img1",$("#file1")[0].files[0]);
    form.append("img2",$("#file2")[0].files[0]);
    form.append("img3",$("#file3")[0].files[0]);
    form.append("img4",$("#file4")[0].files[0]);
    form.append("img5",$("#file5")[0].files[0]);
    form.append("funcion","RegistrarEntrada");
    
    $.ajax({
        url: 'php/ControladorEntrada.php',    
        type: 'POST',
        data: form,
        processData: false,  // tell jQuery not to process the data
        contentType: false,
        success: function(response){
                if(response == "11"){
                    alert("Succesful");
                    location.href=  "storage.php";
                }
            }
     });
}   
</script>
</body>
</html>