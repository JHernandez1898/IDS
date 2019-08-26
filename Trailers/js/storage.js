function MostrarEntradas(){
    $.ajax({
        url:"php/ControladorEntrada.php",
        type:"POST",
        data: "funcion=MostrarEntradas",
        success: function(response){
            var val = eval(response);
            var html="";
            for(i= 0;i<val.length;i++){
                html += "<tr><td id='n'><input type='hidden' value='RegistrarEstadia' id='funcion"+i+"' name='funcion"+i+"'><input type='hidden' name='identrada' value='"+val[i][0]+"' id='identrada"+i+"'>"+(i+1)+"</td><td id='tcompany"+i+"'>"+val[i][2]+"</td><td id='tnumber"+i+"'>"+val[i][1]+"</td><td><input type='text' class='input' id='platenumber"+i+"' name='platenumber'></td><td><input type='text' class='input' id='state"+i+"' name='state'></td><td><select id='placement"+i+"' class='input' name='placement'><option value='Yard'>Yard</option><option value='Dock'>Dock</option></select></td><td><input type='number' class='input' name='space' id='space"+i+"'></td><td><input type='button' onclick ='RegistrarEstadia("+i+")' value='Registrar'></td></tr>";
            }
            $("#info").html(html);
        }
        
    });
}
MostrarEntradas();
function RegistrarEstadia(n){
    var funcion  = $("#funcion"+n).val();
    var identrada = $("#identrada"+n).val();
    var platenumber = $("#platenumber"+n).val();
    var placement = $("#placement"+n).val();
    var state = $("#state"+n).val();
    var space = $("#space"+n).val();
    var frm =  new FormData();
    frm.append("funcion",funcion);
    frm.append("identrada",identrada);
    frm.append("platenumber",platenumber);
    frm.append("placement",placement);
    frm.append("state",state);
    frm.append("space",space);
    
     $.ajax({
        url:"php/ControladorEstadia.php",
        type:"POST",
        data:frm,
        processData: false,  // tell jQuery not to process the data
        contentType: false,
        success: function(response){
            alert(response);
            location.href ="storage.php";
             
        }
     });
}

    
   