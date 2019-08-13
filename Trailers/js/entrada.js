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

function getID(tabla,dato){
    
    var id = 0;
    $.ajax({
        url: 'php/ControladorEntrada.php',    
        type: 'POST',
        async:false,
        data: "funcion=getid&dato="+dato+"tabla="+tabla,
        success: function(response){
                id = response;
        }
     });
    return id;
}

function MostrarConsigna(){
        $.ajax({
        type:"POST",
        async:false,
        url: "php/ControladorConsigna.php",
        data: "funcion=MostrarConsigna"
    }).done(function(response){
            var val = eval(response);
            var html = "";
            for(i = 0;i<val.length;i++){
                html += "<option value = "+val[i][1]+">";
            }
            $("#consignas").html(html);
            
    });
}
function MostrarRegistroTrucks(){
     $.ajax({
            type: 'POST',
            async:false,
            url: 'php/ControladorTrailer.php',
            data: "funcion=Mostrar",
            success: function(response){
                
                var html="<td><span>Truck Number: </span><span>Company: </span><input type='text' name='truckcompany' id='truckcompany'  class='txt'><input type='button' onclick='RegistrarTruck()' class='registrar' value='Save'></td>";
                $("#registrotruck").html(html);
            }
     });
}

function RegistrarTruck(){
    var frm = new FormData();
    var trucknumber =  $("#trucknumber").val();
    var truckcompany =  $("#truckcompany").val();
    frm.append("trucknumber",trucknumber);
    frm.append("truckcompany",truckcompany);
    frm.append("funcion","RegistrarTruck")
        $.ajax({
            type: 'POST',
            url: 'php/ControladorTruck.php',
            data: frm,
            processData: false,  // tell jQuery not to process the data
            contentType: false,
            success: function(response){
                if(response==1){alert("Succesful")}
                MostrarTrucks();
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
            var html = "";
            for(i = 0;i<val.length;i++){
                html += "<option value='"+val[i][1]+"'>";
            }
            $("#trucks").html(html);
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
                
                var html="<td><span>First Name: </span><input type='text' name='drivername' id='drivername'  class='txt'></br><span>Last Name: </span><input type='text' name='driverlastname' id='driverlastname' class='txt'><input type='submit' onclick='RegistrarDriver()' class='registrar' value='Save'></td>";
                $("#registrardriver").html(html);
            }
     });
}
function RegistrarDriver(){
    var frm = new FormData();
    var driverid =  $("#driverid").val();
    var drivername =  $("#drivername").val();
    var driverlastname =  $("#driverlastname").val();
    frm.append("driverid",driverid);
    frm.append("drivername",drivername);
    frm.append("driverlastname",driverlastname);
    frm.append("funcion","RegistrarDriver")
        $.ajax({
            type: 'POST',
            url: 'php/ControladorDriver.php',
            data: frm,
            processData: false,  // tell jQuery not to process the data
            contentType: false,
            success: function(response){
                if(response==1){alert("Succesful")}
                MostrarDrivers();
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
            var html = "";
            for(i = 0;i<val.length;i++){
                html += "<option value = "+val[i][0]+">";
            }
            $("#drivers").html(html);
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
    var frm = new FormData();
    var tnumber  =  $("#tnumber").val();
    var compania =  $("#compania").val();
    frm.append("tnumber",tnumber);
    frm.append("compania",compania);
    frm.append("funcion","RegistrarTrailer")
        $.ajax({
            type: 'POST',
            url: 'php/ControladorTrailer.php',
            data: frm,
            processData: false,  // tell jQuery not to process the data
            contentType: false,
            success: function(response){
                if(response==1){alert("Succesful")}
                MostrarTrailers();
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
            var html = "";
            for(i = 0;i<val.length;i++){
                html += "<option value = "+val[i][1]+">";
            }
            $("#trailers").html(html);
    });
}
function MostrarRegistroTrailer(){
     $.ajax({
            type: 'POST',
            async:false,
            url: 'php/ControladorTrailer.php',
            data: "funcion=Mostrar",
            success: function(response){
                
                var html="<td><span>Company: </span><input type='text' name='tracompania' id='compania' class='txt'><input type='submit' onclick='RegistrarTrailer()' class='registrar' value='Save'> </td>";
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
