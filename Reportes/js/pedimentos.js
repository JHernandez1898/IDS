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
                    
                    
                    html +="<tr><td>"+(i+1)+"</td><td>"+val[i][0]+"</td> <td>"+val[i][1]+"</td> <td>"+val[i][2]+"</td><td>"+val[i][3]+"</td> <td>"+val[i][4]+"</td> <td>"+val[i][5]+"</td><td>"+val[i][6]+"</td><td>";
                    var ref = " ";
                   
                    var  doc =fileExists(val[i][0]+".pdf");   
                    if(doc[0] == 1)html+="<a href='Anexos/PEDIMENTO/"+val[i][0]+".pdf'?><img title='Pedimento' src='img/pdf.png'></a>";
                    if(doc[1]== 1)html+="<a href='Anexos/FACTURA/"+val[i][0]+".pdf'?><img title='Factura' src='img/factura.png'></a>";
                    if(doc[2] == 1)html+="<a href='Anexos/CUENTAS MEXICANAS/"+val[i][0]+".pdf'?><img title='Cuentas Mexicanas' src='img/mex.png'></a>";
                    if(doc[3] == 1) html+="<a href='Anexos/CUENTAS AMERICANAS/"+val[i][0]+".pdf'?><img title='Cuentas Americanas' src='img/usa.png'></a>";
                    if(doc[4] == 1)html+="<a href='Anexos/HOJA DE CALCULO/"+val[i][0]+".pdf'?><img title='Cuentas Americanas' src='img/excel.png'></a>";
                    html+="</td></tr>";
                 }
                html+="</tbody>";
                $("#contenido").html(html);
            }
        });
    });
}
function fileExists(name) {
var doc ;
$.ajax({
        async: false,
        type: "POST",
		url: "php/BuscarDocumentos.php",
        data: "name="+name,
        success: function(response){
            doc = eval(response);
        }
    });
    return doc;
}

                            