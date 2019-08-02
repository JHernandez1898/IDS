

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html>
	<div center> <img src="../Recursos/Imagenes/logo.PNG" width="50" height="50" ><br> 
    </div>
<head>

    <title>Consultas rapidas de SOIA</title>

    <meta http-equiv="X-UA-Compatible" content="IE=8" />
    <link href="css/styles_2016.css" type="text/css" rel="stylesheet" />
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="css/animate.css" type="text/css" rel="stylesheet" />
    <script src="js/jquery-1.12.4.js" type="text/javascript"></script>
    <script src="js/bootstrap-notify.min.js" type="text/javascript"></script>
    <script language="javascript" type="text/javascript">
        function BusquedaVIN() {
            var objDiv;
            objDiv = document.getElementById('rblPatente');
            if (objDiv != null) {
                objDiv.checked = false;
            }

            var objDiv2;
            objDiv2 = document.getElementById('rblPatenteNuevo');
            if (objDiv2 != null) {
                objDiv2.checked = false;
            }

            //            Habilita('txtVIN');
            //Deshabilita('cmdBuscar');
            //Deshabilita('cmdLimpiar');
            //Habilita('btnBuscarVIN');
            //OcultaFiltrosPatente();
            //MuestraFiltrosVIN();
        }

        function BusquedaPatente() {
            var objDiv;
            objDiv = document.getElementById('rblVIN');
            if (objDiv != null) {
                objDiv.checked = false;
            }
            var objDiv2;
            objDiv2 = document.getElementById('rblPatenteNuevo');
            if (objDiv2 != null) {
                objDiv2.checked = false;
            }
            //            Deshabilita('txtVIN');
            //Habilita('cmdBuscar');
            //Habilita('cmdLimpiar');
            //Deshabilita('btnBuscarVIN');
            //MuestraFiltrosPatente();
            //OcultaFiltrosVIN();
        }

        function BusquedaPatenteNuevo() {
            var objDiv;
            objDiv = document.getElementById('rblVIN');
            if (objDiv != null) {
                objDiv.checked = false;
            }

            var objDiv2;
            objDiv2 = document.getElementById('rblPatente');
            if (objDiv2 != null) {
                objDiv2.checked = false;
            }
            //            Deshabilita('txtVIN');
            //Habilita('cmdBuscar');
            //Habilita('cmdLimpiar');
            //Deshabilita('btnBuscarVIN');
            //MuestraFiltrosPatente();
            //OcultaFiltrosVIN();
        }

        //        function OcultaFiltrosVIN() {
        //            Oculta('lblVIN');
        //            Oculta('txtVIN');
        //            //Oculta('btnBuscarVIN');
        //        }

        //        function MuestraFiltrosVIN() {
        //            Muestra('lblVIN');
        //            Muestra('txtVIN');
        //            //Muestra('btnBuscarVIN');
        //        }

        //        function OcultaFiltrosPatente() {
        //            //Oculta('lblAduana');
        //            //Oculta('cmbAduanas');
        //            //Oculta('lblEtPatente');
        //            //Oculta('txtPatente');
        //            //Oculta('Label1');
        //            //Oculta('txtDocumento');
        //            //Oculta('cmdBuscar');
        //            //Oculta('lblEtPeriodo1');
        //            //Oculta('lblPeriodo1');
        //            //Oculta('lblEtPeriodo2');
        //            //Oculta('lblPeriodo2');
        //            //Oculta('lblFecAct');
        //            //Oculta('cmdLimpiar');
        //        }

        //        function MuestraFiltrosPatente() {
        //            //Muestra('lblAduana');
        //            //Muestra('cmbAduanas');
        //            //Muestra('lblEtPatente');
        //            //Muestra('txtPatente');
        //            //Muestra('Label1');
        //            //Muestra('txtDocumento');
        //            //Muestra('cmdBuscar');
        //            //Muestra('lblEtPeriodo1');
        //            //Muestra('lblPeriodo1');
        //            //Muestra('lblEtPeriodo2');
        //            //Muestra('lblPeriodo2');
        //            //Muestra('lblFecAct');
        //            //Muestra('cmdLimpiar');
        //        }
    </script>
    <style type="text/css">
        .style1
        {
            height: 37px;
        }
        .style2
        {
            height: 102px;
        }
    </style>
</head>
<body background="img2016/oia_fondo.gif">

	<form name="ConsultaGrl_01" method="post" action="oia_consultarap_cep.aspx" id="ConsultaGrl_01" onclick="">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTE1MDI0ODgxNQ9kFgJmD2QWIgIHDw8WAh4EVGV4dAUDODAwZGQCGQ8QDxYGHg1EYXRhVGV4dEZpZWxkBQtEZXNjcmlwY2lvbh4ORGF0YVZhbHVlRmllbGQFDENsYXZlX2FkdWFuYR4LXyFEYXRhQm91bmRnZBAVMwEtDkFDQVBVTENPLCBHUk8uJkFEVUFOQSBWSVJUVUFMIFBBUkEgUFJFVkFMSURBRE9SRVMgQ1BOKEFFUk9QVUVSVE8gSU5URVJOQUwuIENELiBERSBNRVhJQ08sIEQuRi4RQUdVQSBQUklFVEEsIFNPTi4UQUdVQVNDQUxJRU5URVMsIEFHUy4QQUxUQU1JUkEsIFRBTVBTLg9DQU5DVU4sIFEuIFJPTy4QQ0QuIEFDVU5BLCBDT0FILhNDRC4gQ0FNQVJHTywgVEFNUFMuFUNELiBERUwgQ0FSTUVOLCBDQU1QLhJDRC4gSElEQUxHTywgQ0hJUy4RQ0QuIEpVQVJFWiwgQ0hJSC4ZQ0QuIE1JR1VFTCBBTEVNQU4sIFRBTVBTLhNDRC4gUkVZTk9TQSwgVEFNUFMuEENISUhVQUhVQSwgQ0hJSC4TQ09BVFpBQ09BTENPUywgVkVSLg5DT0xPTUJJQSwgTi5MLglET1MgQk9DQVMORU5TRU5BREEsIEIuQy4RR1VBREFMQUpBUkEsIEpBTC4PR1VBTkFKVUFUTywgR1RPDUdVQVlNQVMsIFNPTi4OTEEgUEFaLCBCLkMuUy4WTEFaQVJPIENBUkRFTkFTLCBNSUNILhBNQU5aQU5JTExPLCBDT0wuEE1BVEFNT1JPUyxUQU1QUy4OTUFaQVRMQU4sIFNJTi4OTUVYSUNBTEksIEIuQy4GTUVYSUNPD01PTlRFUlJFWSwgTi5MLgpOQUNPLCBTT04uDU5PR0FMRVMsIFNPTi4UTlVFVk8gTEFSRURPLCBUQU1QUy4OT0pJTkFHQSwgQ0hJSC4VUElFRFJBUyBORUdSQVMsIENPQUguDlBST0dSRVNPLCBZVUMuDFBVRUJMQSwgUFVFLhVQVUVSVE8gUEFMT01BUywgQ0hJSC4PUVVFUkVUQVJPLCBRUk8uEVNBTElOQSBDUlVaLCBPQVguG1NBTiBMVUlTIFJJTyBDT0xPUkFETywgU09OLg1TT05PWVRBLCBTT04uGlNVQlRFTklFTlRFIExPUEVaLCBRLiBST08uD1RBTVBJQ08sIFRBTVBTLgxURUNBVEUsIEIuQy4NVElKVUFOQSwgQi5DLgxUT0xVQ0EsIE1FWC4OVE9SUkVPTiwgQ09BSC4MVFVYUEFOLCBWRVIuDlZFUkFDUlVaLCBWRVIuFTMDLTEwAjEwBDY2NjADNDcwAjIwAzczMAM4MTADNTMwAzQ0MAM4MjACNjADMzcwAjcwAzM0MAMzMDADNjcwAjgwAzgwMAM4MzADMTEwAzQ4MAM4NDADMTIwAzE0MAM1MTADMTYwAzE3MAMxODADMTkwAzIwMAM1MjADMjIwAzIzMAMyNDADMjUwAzI3MAMyODADNzUwAzI2MAM2NDADMzEwAzMzMAM1MDACNTADMzgwAzM5MAM0MDADNjUwAzQ2MAM0MjADNDMwFCsDM2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2RkAi8PEGQPFgxmAgECAgIDAgQCBQIGAgcCCAIJAgoCCxYMEAUEMjAwNwUEMjAwN2cQBQQyMDA4BQQyMDA4ZxAFBDIwMDkFBDIwMDlnEAUEMjAxMAUEMjAxMGcQBQQyMDExBQQyMDExZxAFBDIwMTIFBDIwMTJnEAUEMjAxMwUEMjAxM2cQBQQyMDE0BQQyMDE0ZxAFBDIwMTUFBDIwMTVnEAUEMjAxNgUEMjAxNmcQBQQyMDE3BQQyMDE3ZxAFBDIwMTgFBDIwMThnZGQCMw8PFgQfAAUwSU5GT1JNQUNJT04gQUNUVUFMSVpBREEgQUw6ICAyOC8wNS8yMDE4IDE3OjIxOjE4HgdWaXNpYmxlZ2RkAjUPDxYEHwAFCjI4LzA1LzIwMTgfBGdkZAI3Dw8WBB8ABQoyNi8xMS8yMDA5HwRnZGQCPQ8PFgIfBGdkZAJBDw8WAh8ABSBVc3RlZCBlcyBlbCB2aXNpdGFudGU6IDU4MDM4NzYyM2RkAkMPDxYCHwBlZGQCRw8PFgIfBGdkZAJJDzwrAAsBAA8WDB4JUGFnZUNvdW50AgEeDVNlbGVjdGVkSW5kZXgC/////w8eCERhdGFLZXlzFgAeEEN1cnJlbnRQYWdlSW5kZXhmHgtfIUl0ZW1Db3VudAIBHhVfIURhdGFTb3VyY2VJdGVtQ291bnQCAWQWAmYPZBYCAgEPZBYWZg9kFgJmDw8WAh8ABQc4MDAwMjg4ZGQCAQ8PFgIfAAUEMzE2M2RkAgIPDxYCHwAFC0RFU0FEVUFOQURPZGQCAw8PFgIfAAUTMjAxOC0wNC0wMyAxNjowNzo1N2RkAgQPDxYCHwAFBiZuYnNwO2RkAgUPDxYCHwAFATBkZAIGDw8WAh8ABQEwZGQCBw8PFgIfAAUBMGRkAggPDxYCHwAFBzgwMDAyODhkZAIJD2QWAmYPDxYCHwAFRjxpbWcgc3JjPSJpbWFnZXNcdGVtcGxhdGVcbmF2X21hc3Rlci5naWYiIGhlaWdodD0xNSB3aWR0aD0xNSBib3JkZXI9MD5kZAIKDw8WAh8ABQM4MDBkZAJLDw8WBB8ABRYgVE9UQUwgREUgUkVHSVNUUk9TOiAxHwRnZGQCTw88KwALAQAPFg4fBQIBHwYC/////w8fBxYAHwhmHwRoHwlmHwpmZGQCUQ8PFgIfBGhkZAJTDzwrAAsBAA8WAh8GAv////8PZGQCVw88KwALAQAPFgwfBWYfBgL/////Dx8HFgAfBGgfCQL/////Dx8KAv////8PZGQCYQ8PFgIfBGdkZBgBBR5fX0NvbnRyb2xzUmVxdWlyZVBvc3RCYWNrS2V5X18WBgUHaW1nTWVudQUKcmJsUGF0ZW50ZQUGcmJsVklOBQZyYmxWSU4FD3JibFBhdGVudGVOdWV2bwUPcmJsUGF0ZW50ZU51ZXZvPXCynWtogklhNWFD2F4LpaVCKGs=" />

<script type="text/javascript">
<!--
var theForm = document.forms['ConsultaGrl_01'];
if (!theForm) {
    theForm = document.ConsultaGrl_01;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
// -->
</script>


<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWUgKM0MuIDwLQvYIGArHEnfQNAqOF/qMKAurP/MgLAorE5fcNAqKF/qMKAo/ElfQNAp7EnfQNAonElfQNAorE6fcNAp7EkfQNAqaF/qMKAovE5fcNAqWF/qMKAovE6fcNAovEmfQNAojE5fcNArSF/qMKAp7EmfQNAp7ElfQNAoXEnfQNAorEufQNAp7E6fcNAoXEkfQNAoXE6fcNAonEnfQNAoXE4fcNAoXE5fcNAoXEufQNAoXEvfQNAoTEmfQNAonEkfQNAoTEkfQNAoTElfQNAoTE6fcNAoTE7fcNAoTE5fcNAoTEufQNAo/E7fcNAoTE4fcNAojE6fcNAovEnfQNAovElfQNAonEmfQNAqeF/qMKAovEufQNAovEvfQNAorEmfQNAojE7fcNAorE4fcNAorEkfQNAorElfQNAp6W7PoIAseR/L4BAqiLrL0NAs2WwakIAvDngboKAvDnrdMMAvDnmbYEApveq68DApvel/IIApveg9UBApve77gJApve24MOApvex+YHApves8oMApven60EApvey8UGAoPX1Y4OAvaFr90GAvCYpPQJAqXYhmECpNiGYQKn2IZhAqbYhmECodiGYQLqlaPzCwKf+9r5CQLv4aLGCQLw4aLGCQKOltdRs6JglmS55J/VgcbobHQXKYEMBBs=" />
    
    <a href="#" onclick="javascript:window.open('oia_consultaVistante.aspx?ser=1', 'pop1win', 'toolbar=no scrollbars=yes,width=500,height=300')">
        <span id="lblversionConsulta" style="color:White;background-color:Transparent;border-width:0px;font-family:Arial Narrow;font-size:Smaller;font-weight:bold;height:17px;width:258px;z-index: 107; left: 971px; position: absolute;
            top: 9px">v2.1.1</span>
    </a>
    <div id="pnlEncabezado" style="border-color:Transparent;height:98px;width:1002px;background-image:url(img2016/oia_encabezado.jpg);z-index: 101; left: -1px; position: absolute;
        top: -3px">
	
    
</div>
    
    
    <input type="image" name="imgMenu" id="imgMenu" tabindex="13" title="Regresa a pantalla de inicio" src="img2016\oia_homebtn.gif" border="0" style="width:22px;z-index: 104; left: 934px; position: absolute;
        top: 96px; height: 22px;" />
    
    <img id="imgLinea" src="img2016/oia_sombra.gif" border="0" style="border-color:Transparent;height:4px;width:1003px;z-index: 106; left: 0px; position: absolute; top: 92px" />
    <img id="imgLinea1" src="img2016/oia_sombra.gif" border="0" style="border-color:Transparent;height:4px;width:1003px;z-index: 106; left: -3px; position: absolute; top: 124px" />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span id="lblNomModulo" class="Titulo" style="background-color:Transparent;font-weight:bold;height:16px;width:314px;z-index: 118; left: 112px; top: 35px">CONSULTA RÁPIDA DE PEDIMENTO ESPECÍFICO</span>
    
    <br />
    <br />
    <br />
    <br />
    <span id="lblNombUsuario" class="titulo" style="background-color:Transparent;font-weight:bold;height:19px;z-index: 109; left: 16px; position: absolute;
        top: 99px; right: 606px; width: 579px;">CONSULTA RÁPIDA POR PEDIMENTO, VIN o CONTENEDOR ESPECÍFICO</span>
    <br />
    <br />
    <select name="cmbAduanas" id="cmbAduanas" tabindex="4" class="campos" style="z-index: 114; left: 179px; position: absolute;
        top: 150px; height: 22px; width: 350px;">
	<option value="-10">-</option>
	<option value="10">ACAPULCO, GRO.</option>
	<option value="6660">ADUANA VIRTUAL PARA PREVALIDADORES CPN</option>
	<option value="470">AEROPUERTO INTERNAL. CD. DE MEXICO, D.F.</option>
	<option value="20">AGUA PRIETA, SON.</option>
	<option value="730">AGUASCALIENTES, AGS.</option>
	<option value="810">ALTAMIRA, TAMPS.</option>
	<option value="530">CANCUN, Q. ROO.</option>
	<option value="440">CD. ACUNA, COAH.</option>
	<option value="820">CD. CAMARGO, TAMPS.</option>
	<option value="60">CD. DEL CARMEN, CAMP.</option>
	<option value="370">CD. HIDALGO, CHIS.</option>
	<option value="70">CD. JUAREZ, CHIH.</option>
	<option value="340">CD. MIGUEL ALEMAN, TAMPS.</option>
	<option value="300">CD. REYNOSA, TAMPS.</option>
	<option value="670">CHIHUAHUA, CHIH.</option>
	<option value="80">COATZACOALCOS, VER.</option>
	<option selected="selected" value="800">COLOMBIA, N.L.</option>
	<option value="830">DOS BOCAS</option>
	<option value="110">ENSENADA, B.C.</option>
	<option value="480">GUADALAJARA, JAL.</option>
	<option value="840">GUANAJUATO, GTO</option>
	<option value="120">GUAYMAS, SON.</option>
	<option value="140">LA PAZ, B.C.S.</option>
	<option value="510">LAZARO CARDENAS, MICH.</option>
	<option value="160">MANZANILLO, COL.</option>
	<option value="170">MATAMOROS,TAMPS.</option>
	<option value="180">MAZATLAN, SIN.</option>
	<option value="190">MEXICALI, B.C.</option>
	<option value="200">MEXICO</option>
	<option value="520">MONTERREY, N.L.</option>
	<option value="220">NACO, SON.</option>
	<option value="230">NOGALES, SON.</option>
	<option value="240">NUEVO LAREDO, TAMPS.</option>
	<option value="250">OJINAGA, CHIH.</option>
	<option value="270">PIEDRAS NEGRAS, COAH.</option>
	<option value="280">PROGRESO, YUC.</option>
	<option value="750">PUEBLA, PUE.</option>
	<option value="260">PUERTO PALOMAS, CHIH.</option>
	<option value="640">QUERETARO, QRO.</option>
	<option value="310">SALINA CRUZ, OAX.</option>
	<option value="330">SAN LUIS RIO COLORADO, SON.</option>
	<option value="500">SONOYTA, SON.</option>
	<option value="50">SUBTENIENTE LOPEZ, Q. ROO.</option>
	<option value="380">TAMPICO, TAMPS.</option>
	<option value="390">TECATE, B.C.</option>
	<option value="400">TIJUANA, B.C.</option>
	<option value="650">TOLUCA, MEX.</option>
	<option value="460">TORREON, COAH.</option>
	<option value="420">TUXPAN, VER.</option>
	<option value="430">VERACRUZ, VER.</option>

</select>


        <span id="lblEtPatente" class="etiquetas3" style="background-color:Transparent;border-width:0px;border-style:Ridge;width:120px;Z-INDEX: 115; LEFT: 561px; POSITION: absolute; TOP: 131px; bottom: 120px; ">Patente:</span>


    <input name="txtPatente" type="text" id="txtPatente" class="campos" style="z-index: 116; left: 559px; width: 93px;
        position: absolute; top: 150px; height: 22px; right: 603px;" tabindex="5" maxlength="4" size="6" value="3163" />
   <span id="Label1" class="etiquetas3" style="background-color:Transparent;border-width:0px;width:144px;z-index: 117; position: absolute; top: 132px; left: 718px;">Documento:</span>
   <span id="Label2" class="etiquetas3" style="background-color:Transparent;border-width:0px;width:144px;z-index: 117; position: absolute; top: 183px; left: 562px;">Tipo Operación:</span>
    <input name="txtDocumento" type="text" id="txtDocumento" class="campos" style="z-index: 118; width: 121px;
        position: absolute; top: 151px; height: 22px; left: 719px;" tabindex="6" maxlength="7" size="14" value="8000288" />

    <span id="Label4" class="etiquetas3" style="background-color:Transparent;border-width:0px;width:90px;z-index: 115; left: 719px; position: absolute; top: 183px; bottom: 74px; right: 446px; height: 19px;">Contenedor:</span>

    <input name="txtContenedor" type="text" id="txtContenedor" class="campos" style="z-index: 116; left: 719px; width: 125px;
        position: absolute; top: 203px; height: 22px" tabindex="9" maxlength="20" size="6" />
     <span id="lblEtAduana" class="etiquetas3" style="background-color:Transparent;border-width:0px;width:40px;z-index: 128; left: 178px; position: absolute;
        top: 133px">Aduana:</span>

    <span class="etiquetas2" title="Consultar por pedimento específico, debe proporcionar aduana, patente, documento y año de pedimento " style="z-index: 110; left: 15px; position: absolute;
        top: 147px; right: 1136px; bottom: 556px; width: 155px;"><input id="rblPatente" type="radio" name="tpoConsulta" value="rblPatente" checked="checked" onclick="BusquedaPatente();" tabindex="1" /><label for="rblPatente">Por pedimento</label></span>
    <br />

        <span id="lblEtVin" class="etiquetas3" style="background-color:Transparent;border-width:0px;z-index: 127; left: 323px; position: absolute; top: 183px; height: 15px; width: 33px; right: 845px;">VIN:</span>

    <select name="cmbAnios" id="cmbAnios" tabindex="7" class="campos" style="width:96px;z-index: 132; left: 178px; position: absolute;
        top: 204px; height: 21px;">
	<option value="2007">2007</option>
	<option value="2008">2008</option>
	<option value="2009">2009</option>
	<option value="2010">2010</option>
	<option value="2011">2011</option>
	<option value="2012">2012</option>
	<option value="2013">2013</option>
	<option value="2014">2014</option>
	<option value="2015">2015</option>
	<option value="2016">2016</option>
	<option value="2017">2017</option>
	<option selected="selected" value="2018">2018</option>

</select>

    <br />
    <span class="etiquetas2" title="Consultar por número de VIN, debe proporcionar año del pedimento y número de VIN" style="z-index: 111; left: 16px; position: absolute;
        top: 177px; width: 116px;"><input id="rblVIN" type="radio" name="tpoConsulta" value="rblVIN" onclick="BusquedaVIN();" tabindex="2" /><label for="rblVIN">Por VIN</label></span>
    <span id="lblFecAct" class="etiquetas3" style="background-color:#EEEEEE;border-color:#EEEEEE;border-width:1px;border-style:Ridge;font-weight:normal;z-index: 120; left: 3px; position: absolute; top: 322px;
        width: 996px; margin-top: 0px; height: 25px; right: 358px; bottom: 320px;">INFORMACION ACTUALIZADA AL:  28/05/2018 17:21:18</span>
    <span id="lblPeriodo2" class="etiquetas3" style="border-width:1px;border-style:None;height:22px;z-index: 121; left: 852px; position: absolute;
        top: 322px; width: 134px;">28/05/2018</span>
    <span id="lblPeriodo1" class="etiquetas3" style="border-width:1px;border-style:None;z-index: 123; left: 617px; position: absolute;
        top: 322px; height: 22px; width: 115px; right: 625px;">26/11/2009</span>
    
    <span class="etiquetas2" title="Consultar por número de contenedor, debe proporcionar aduana, número de contenedor y año del pedimento (si aplica)" left="774px" style="z-index: 110; left: 16px; position: absolute;
        top: 207px; width: 153px;"><input id="rblPatenteNuevo" type="radio" name="tpoConsulta" value="rblPatenteNuevo" onclick="BusquedaPatenteNuevo();" tabindex="3" /><label for="rblPatenteNuevo">Por contenedor</label></span>
    <br />
    <span id="lblEtPeriodo1" class="etiquetas3" style="background-color:#EEEEEE;border-width:1px;border-style:Ridge;font-weight:normal;z-index: 124; left: 461px; position: absolute;
        top: 324px; width: 132px;">DISPONIBLE DEL:</span>
    <input type="submit" name="cmdBuscar" value="Buscar" id="cmdBuscar" tabindex="10" title="Buscar información" class="botones" style="font-weight:normal;width:120px;z-index: 119; left: 862px; position: absolute;
        top: 150px; height: 28px; bottom: 153px;" />
    <br />
    <a href="#" onclick="javascript:window.open('oia_consultaVistante.aspx?ser=1', 'pop1win', 'toolbar=no scrollbars=yes,width=500,height=300')">
        <span id="lblAccesos" class="etiquetas3" style="background-color:Transparent;border-width:0px;font-weight:normal;height:17px;width:258px;z-index: 107; position: absolute;
            top: 99px; left: 665px;">Usted es el visitante: 580387623</span>
    </a>
    

     <span id="Label5" class="etiquetas3" style="background-color:Transparent;border-width:0px;z-index: 131; left: 178px; position: absolute; height: 16px; top: 184px; width: 163px; bottom: 522px; right: 983px;">Año del Pedimento: </span>


    <table id="tbConsultaRaida" style="z-index: 113; left: 3px; position: absolute; top: 338px;  margin-bottom: 0px;"
        cellspacing="0" cellpadding="0" width="998" border="0">
        <tr>
            <td> 
             <br />
                 <span id="lblTitPedimento" class="titulo1" style="font-weight:normal;height:22px;width:100%;">CONSULTA DE SITUACIÓN DE PEDIMENTOS</span>
                <table cellspacing="0" cellpadding="3" rules="rows" bordercolor="#339933" border="1" id="grdPedimentos" style="background-color:White;border-color:#339933;border-width:1px;border-style:None;font-family:Arial Narrow;font-size:Smaller;width:100%;border-collapse:collapse;">
	<tr align="center" style="color:#F7F7F7;background-color:#007836;font-family:Arial Narrow;font-size:8pt;font-weight:bold;">
		<td nowrap="nowrap" style="width:30px;">DOCUMENTO</td><td>PATENTE</td><td><a href="javascript:__doPostBack(&#39;grdPedimentos$_ctl1$_ctl0&#39;,&#39;&#39;)" style="color:#F7F7F7;">ESTADO</a></td><td><a href="javascript:__doPostBack(&#39;grdPedimentos$_ctl1$_ctl1&#39;,&#39;&#39;)" style="color:#F7F7F7;">FECHA</a></td><td>BANCO</td><td><a href="javascript:__doPostBack(&#39;grdPedimentos$_ctl1$_ctl2&#39;,&#39;&#39;)" style="color:#F7F7F7;">SECUENCIA</a></td><td><a href="javascript:__doPostBack(&#39;grdPedimentos$_ctl1$_ctl3&#39;,&#39;&#39;)" style="color:#F7F7F7;">NUMERO DE OPERACION</a></td><td><a href="javascript:__doPostBack(&#39;grdPedimentos$_ctl1$_ctl4&#39;,&#39;&#39;)" style="color:#F7F7F7;">FACTURA</a></td>
	</tr><tr align="center" style="color:threeddarkshadow;background-color:#F7F7F7;font-family:Arial;font-size:9pt;height:10px;">
		<td class="gridLink" align="center"><a href="javascript:__doPostBack(&#39;grdPedimentos$_ctl2$_ctl0&#39;,&#39;&#39;)" style="color:threeddarkshadow;">8000288</a></td><td>3163</td><td align="left">DESADUANADO</td><td>2018-04-03 16:07:57</td><td>&nbsp;</td><td>0</td><td>0</td><td>0</td>
	</tr>
</table>
                <span id="lblEtRegistrosS" class="etiquetas2a" style="background-color:#EEEEEE;border-width:1px;border-style:solid;font-weight:normal;height:21px;width:230px;"> TOTAL DE REGISTROS: 1</span>
                        <br />
                        </td>
        </tr>
        <tr>
            <td class="style1" style="height: 34px">
            <br />
            
                
                
                <br />
            </td>
        </tr>
        <tr>
            <td class="style2">
            <br />
                
                          </td>
        </tr>
        

      
    </table>

    <table

    id="tbConsultaRapidaC" style="z-index: 113; left: 3px; position: absolute; top: 228px;  margin-bottom: 0px;"
        cellspacing="0" cellpadding="0" width="998" border="0" >
      <tr>
            <td><br />
            
                     
                
            </td>
        </tr></table>


    <input name="txtVIN" type="text" maxlength="19" id="txtVIN" tabindex="8" class="campos" style="height:22px;z-index: 125; left: 320px; position: absolute; top: 203px; width: 205px; right: 676px;" />

                                         <select name="cmbTpoOperacion" id="cmbTpoOperacion" tabindex="2" class="campos" style="z-index: 114; left: 558px; position: absolute;
        top: 202px; height: 22px; width: 135px;">
	<option selected="selected" value="0">Importaci&#243;n</option>
	<option value="1">Exportaci&#243;n</option>

</select>
    <input type="submit" name="cmdLimpiar" value="Limpiar" id="cmdLimpiar" tabindex="11" title="Limpiar información de la pantalla" class="botones" style="width:120px;z-index: 126; left: 862px; position: absolute;
        top: 185px; height: 28px;" />
    <span id="lblEtPeriodo2" class="etiquetas3" style="border-width:1px;border-style:None;font-weight:normal;width:40px;z-index: 133; left: 767px; position: absolute;
        top: 322px; height: 22px; right: 550px;">AL:</span>
    </form>
</body>
</html>
