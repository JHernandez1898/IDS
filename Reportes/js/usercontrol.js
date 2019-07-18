function MostrarUsuarios(){
    $.ajax({
        type: "POST",
        async: true,
        url: "php/Usuarios.php",
        data: "funcion=MostrarUsuarios",
        success: function(response){
            var val = eval(response);
            var html;
            for(i = 0;i<val.length;i++) {
                html+="<tr><td>"+(i+1)+"</td><td>"+val[i][0]+"</td><td>"+val[i][1]+"</td><td>"+val[i][2]+"</td><td>"+val[i][3]+"</td><td><input type='button' onclick='ElegirUsuario("+val[i][2]+")' class='btnEditar'></td></tr>"
            }
            $("#contenido").html(html);
        }
    });
}
function ElegirUsuario(numero){
    $.ajax({
        type:"POST",
        url:"php/Usuarios.php",
        data:"funcion=ElegirUsuario&numero="+numero,
        success: function(response){
            var val=  eval(response);
            $("#nombre").val(val[0][0]);
            $("#pass").val("");
            $("#num").val(val[0][2]);
            $("#numeroviejo").val(val[0][2]);
        }
    });
    
}
function ModificarUsuario(){
    $("#frmUsuarios").submit(function(e){
    e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'php/Usuarios.php',
            data:  $("#frmUsuarios").serialize(),
            success: function(response)
            {
               if(response == 1)$("#mensaje").html("La contraseña fue cambiada correctamente");
                else $("#mensaje").html(response);
                MostrarUsuarios();
               
            }
        });
    });
}