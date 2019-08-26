function MostrarEstadiasYard(){
    $.ajax({
        url:"php/ControladorEstadia.php",
        type:"POST",
        data: "funcion=MostrarEstadiasYard",
        success: function(response){
            var val = eval(response);
            var html="";
            for(i= 0;i<val.length;i++){
                html += "<tr><td>"+val[i][2]+"</td><td>"+val[i][3]+"</td><td>"+val[i][4]+"</td><td>"+val[i][5]+"</td><td>"+val[i][6]+"</td><td>"+val[i][7]+" days</td><td> <input type='button' value='Log Out' onclick='RegistrarSalida("+val[i][0]+","+val[i][1]+")'></td></tr>";
            }
            $("#campos").html(html);
        }
        
    });
}
function RegistrarSalida(identrada,idestadia){
    var frm =  new FormData();
    frm.append("identrada",identrada);
    frm.append("idestadia",idestadia);
    frm.append("funcion","RegistrarSalida");
    $.ajax({
        url:"php/ControladorSalida.php",
        type:"POST",
        data: frm,
        processData: false, 
        contentType: false,
        success:function(response){
            alert("Log out successful");
            location.href ="storage.php";  
           
        }
    })
}

function MostrarEstadiasDock(){
    $.ajax({
        url:"php/ControladorEstadia.php",
        type:"POST",
        data: "funcion=MostrarEstadiasDock",
        success: function(response){
            var val = eval(response);
            var html="";
            for(i= 0;i<val.length;i++){
                html += "<tr><td>"+val[i][2]+"</td><td>"+val[i][3]+"</td><td>"+val[i][4]+"</td><td>"+val[i][5]+"</td><td>"+val[i][6]+"</td><td>"+val[i][7]+" days</td><td> <input type='button' value='Log Out' onclick='RegistrarSalida("+val[i][0]+","+val[i][1]+")'></td></tr>";
            }
            $("#campos").html(html);
        }
        
    });
}