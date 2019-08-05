
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
    form.append("funcion","RegistrarEntrada");
    
    $.ajax({
        url: 'php/ControladorEntrada.php',    
        type: 'POST',
        data: form,
        processData: false,  // tell jQuery not to process the data
        contentType: false,
        success: function(response){
                location.href = "storage.php";
            }
     });
}

function MostrarRegistroConsigna(){
     $.ajax({
            type: 'POST',
            async:false,
            url: 'php/ControladorTrailer.php',
            data: "funcion=Mostrar",
            success: function(response){
                
                var html="<td><form id='frmConsigna'><span>Descripción: </span><input type='text' name='consigna' id='consigna'  class='txt'><input type='hidden' name='funcion' value='RegistrarConsigna'><input type='submit' onclick='RegistrarConsigna()' class='registrar' value='Save'></form> </td>";
                $("#registrarconsigna").html(html);
            }
     });
}
function RegistrarConsigna(){
        $.ajax({
            type: 'POST',
            url: 'php/ControladorConsigna.php',
            data: $("#frmConsigna").serialize(),
            success: function(response){
                MostrarConsigna();
            }
     });    
 }
function MostrarConsigna(){
        $.ajax({
        type:"POST",
        async:false,
        url: "php/ControladorConsigna.php",
        data: "funcion=MostrarConsigna"
    }).done(function(response){
            var val = eval(response);
            var html = "<option value = '0'>Select One</option>";
            for(i = 0;i<val.length;i++){
                html += "<option value = "+val[i][0]+">"+val[i][1]+"</option>";
            }
            $("#consigna").html(html);
            
    });
}

function MostrarRegistroTrucks(){
     $.ajax({
            type: 'POST',
            async:false,
            url: 'php/ControladorTrailer.php',
            data: "funcion=Mostrar",
            success: function(response){
                
                var html="<td><form id='frmTruck'><span>Truck Number: </span><input type='text' name='trucknmb' id='trucknmb'  class='txt'></br><span>Company: </span><input type='text' name='truckcompany' id='truckcompany'  class='txt'></br><input type='hidden' name='funcion' value='RegistrarTruck'><input type='submit' onclick='RegistrarTruck()' class='registrar' value='Save'>  </form> </td>";
                $("#registrotruck").html(html);
            }
     });
}
function RegistrarTruck(){
        $.ajax({
            type: 'POST',
            async:false,
            url: 'php/ControladorTruck.php',
            data: $("#frmTruck").serialize(),
            success: function(response){
            }
     });    
 }
function MostrarTrucks(){
        $.ajax({
        type:"POST",
        async:false,
        url: "php/ControladorTruck.php",
        data: "funcion=MostrarTrucks"
    }).done(function(response){
            var val = eval(response);
            var html = "<option value = '0'>Select One</option>";
            for(i = 0;i<val.length;i++){
                html += "<option value = "+val[i][0]+">"+val[i][1]+"</option>";
            }
            $("#trucknumber").html(html);
    });
}
function MostrarTruck(){
    var  seleccionado = $("#trucknumber").val();
    $.ajax({
            type: 'POST',
            async:false,
            url: 'php/ControladorTruck.php',
            data: "funcion=MostrarTruck&trucknumber="+seleccionado,
            success: function(response){
                var val =  eval(response);
                var html="<td><strong>Company: </strong>"+val[0][0]+"</br> </td>";
                $("#registrotruck").html(html);
            }
     });
}

function MostrarRegistroDrivers(){
     $.ajax({
            type: 'POST',
            async:false,
            url: 'php/ControladorTrailer.php',
            data: "funcion=Mostrar",
            success: function(response){
                
                var html="<td><form id='frmDriver'><span>Driver ID: </span><input type='text' name='driverid' id='driverid'  class='txt'></br><span>Name: </span><input type='text' name='drivername' id='drivername'  class='txt'></br><span>Last Name: </span><input type='text' name='driverlastname' id='driverlastname' class='txt'><input type='hidden' name='funcion' value='RegistrarDriver'><input type='submit' onclick='RegistrarDriver()' class='registrar' value='Save'>  </form> </td>";
                $("#registrardriver").html(html);
            }
     });
}
function RegistrarDriver(){
        $.ajax({
            type: 'POST',
            async:false,
            url: 'php/ControladorDriver.php',
            data: $("#frmDriver").serialize(),
            success: function(response){
            }
     });    
 }
function MostrarDrivers(){
        $.ajax({
        type:"POST",
        async:false,
        url: "php/ControladorDriver.php",
        data: "funcion=MostrarDrivers"
    }).done(function(response){
            var val = eval(response);
            var html = "<option value = '0'>Select One</option>";
            for(i = 0;i<val.length;i++){
                html += "<option value = "+val[i][0]+">"+val[i][0]+"</option>";
            }
            $("#driverid").html(html);
    });
}
function MostrarDriver(){
    var  seleccionado = $("#driverid").val();
    $.ajax({
            type: 'POST',
            async:false,
            url: 'php/ControladorDriver.php',
            data: "funcion=MostrarDriver&driverid="+seleccionado,
            success: function(response){
                var val =  eval(response);
                var html="<td><strong>Name: </strong>"+val[0][0]+"</br> </td>";
                $("#registrardriver").html(html);
            }
     });
}

function RegistrarTrailer(){
        $.ajax({
            type: 'POST',
            async:false,
            url: 'php/ControladorTrailer.php',
            data: $("#frmTrailer").serialize(),
            success: function(response){
            }
     });    
 }
function MostrarTrailers(){
        $.ajax({
        type:"POST",
        async:false,
        url: "php/ControladorTrailer.php",
        data: "funcion=MostrarTrailers"
    }).done(function(response){
            var val = eval(response);
            var html = "<option value = '0'>Select One</option>";
            for(i = 0;i<val.length;i++){
                html += "<option value = "+val[i][0]+">"+val[i][1]+"</option>";
            }
            $("#tnumber").html(html);
    });
}
function MostrarRegistroTrailer(){
     $.ajax({
            type: 'POST',
            async:false,
            url: 'php/ControladorTrailer.php',
            data: "funcion=Mostrar",
            success: function(response){
                
                var html="<td><form id='frmTrailer'><span>Trailer Number: </span><input type='text' name='tranumber' id='tnumber'  class='txt'></br><span>Company: </span><input type='text' name='tracompania' id='compania' class='txt'><input type='hidden' name='funcion' value='RegistrarTrailer'><input type='submit' onclick='RegistrarTrailer()' class='registrar' value='Save'>  </form> </td>";
                $("#campos").html(html);
            }
     });
}
function MostrarTrailer(){
    var  seleccionado = $("#tnumber").val();
    $.ajax({
            type: 'POST',
            async:false,
            url: 'php/ControladorTrailer.php',
            data: "funcion=MostrarTrailer&idtra="+seleccionado,
            success: function(response){
                var val =  eval(response);
                var html="<td><strong>Company: </strong>"+val[0][1]+"</br> </td>";
                $("#campos").html(html);
            }
     });
}
