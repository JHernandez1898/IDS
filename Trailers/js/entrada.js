function MostrarDrivers(){
        $.ajax({
        type:"POST",
        async:false,
        url: "php/ControladorDrivers.php",
        data: "funcion=MostrarDrivers"
    }).done(function(response){
            var val = eval(response);
            var html = "<option value = '0'>Select One</option>";
            for(i = 0;i<val.length;i++){
                html += "<option value = "+val[i][0]+">"+val[i][1]+"</option>";
            }
            $("#driverid").html(html);
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
                var html="<td><form id='frmTrailer'><span>Trailer Number: </span> "+val[0][0]+"<br><br><span>Company: </span>"+val[0][1]+"</br> </td>";
                $("#campos").html(html);
            }
     });
}
