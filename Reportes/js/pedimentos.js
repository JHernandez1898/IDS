function BuscarPedimentos(){
$("#frmBusqueda").submit(function(e){
    e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'php/Pedimentos.php',
            data:  $("#frmBusqueda").serialize(),
            success: function(response)
            {
                $("#contenido").html(" ");
                var val = eval(response);
              
                var html = " <tbody><tr><th>N°</th><th>Refererencia</th><th>Pedimento</th><th>Fecha</th><th>Cliente</th><th>Proveedor</th><th>Impo/Expo</th><th>Regimen </th><th>Anexo</th></tr>";
      
                for(i = 0;i<val.length;i++) {
                    html +="<tr><td>"+(i+1)+"</td><td>"+val[i][0]+"</td> <td>"+val[i][1]+"</td> <td>"+val[i][2]+"</td><td>"+val[i][3]+"</td> <td>"+val[i][4]+"</td> <td>"+val[i][5]+"</td><td>"+val[i][6]+"</td> <td><a href='Anexos/PEDIMENTO/"+val[i][0]+".pdf'?>"+val[i][0]+"</a></td></tr>";
                 }
                html+="</tbody>";
                $("#contenido").html(html);
            }
        });
    });
}
                            