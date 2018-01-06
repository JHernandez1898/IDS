<?php 
include("Template.php");
require("../conect.php");
date_default_timezone_set("America/Mexico_City");
$idCone =  conectarlocalmente();
$sql  = "SELECT * FROM traileractual ";
$query = mysqli_query($idCone,$sql);
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trailers</title>
<link href="../Recursos/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../Recursos/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
 <!-- Content -->
    <div class="container">

        <!-- Heading -->
        <div class="row">
          <div class="col-lg-12">
                <h1 class="page-header">Trailers
                    
            </h1>
               
            </div>
        </div>
        <!-- /.row -->

        <!-- Feature Row -->
        <div class="row">
        	<p>
        	  <article class="col-lg-9 active" >
           		<?php echo  $hoy = date("F j, Y, g:i a");  ?>
        	  </article>
              <article class="col-lg-2 active" >
               <form action="nuevaentrada.php" method="post">
        	    <input type="submit" name="submit" id="submit" value="Nueva entrada"> 
        	   </form>
        	  </article>
               <article class="col-lg-1 active" >
               <form action="reportesentradas.php">
        	    <input type="submit" name="submit" id="submit" value="Reportes"> 
        	   </form>
        	  </article>
       	  </p>
        	<p>&nbsp; </p>
          
            <article class="col-md-4 article-intro">
            
              <table width="1142" border="1">
                <tbody>
                  <tr>
                    <th width="107" scope="col">Truck Company</th>
                    <th width="70" scope="col">Truck Number</th>
                    <th width="49" scope="col">Driver Name</th>
                    <th width="49" scope="col">Driver id</th>
                    <th width="67" scope="col">Trailer Company</th>
                    <th width="90" scope="col">Trailer Number</th>
                    <th width="121" scope="col">Seal Number</th>
                    <th width="54" scope="col">LD MT</th>
                    <th width="111" scope="col">P/U Delivery drop</th>
                    <th width="79" scope="col">Time in </th>
                    <th width="107" scope="col">Time out</th>
                    <th width="162" scope="col"><p>Consignne</p>
                      (RDS, IDS etc.)</th>
                    <th width="107" scope="col"></th>
                  </tr>
                 
                  <?php while($F = mysqli_fetch_array($query)){
					
					$timeout =  $F["TIME_OUT"];
					$active = $F['ACTIVE'];
					$ref = $F["REF"];
					if($active == "1" ){
					?>  
                        <tr class="label-success">
                    <?php  
					}
					else{
						?>  <tr class="label-danger"><?php
					}?>    
                        <td><?php echo $F["T_COMPANY"];?></td>
                        <td><?php echo $F["T_NUMBER"];?></td>
                        <td><?php echo $F["D_NAME"];?></td>
                        <td><?php echo $F["DRIVER_ID"];?></td>
                        <td><?php echo $F["TR_COMPANY"];?></td>
                        <td><?php echo $F["TR_NUMBER"];?></td>
                        <td><?php echo $F['N_SEAL'] ?></td>
                        <td><?php echo $F["LD_MT"];?></td>
                        <td><?php echo $F["DELIVERY_D"];?></td>
                        <td><?php echo $F["TIME_IN"];?></td>
                        <td><?php 
                        if($timeout != "0"){
                            echo $F["TIME_OUT"];
                        }
                        else{ 
					
						?>
                       		<form method="post" action="nuevasalida.php">	
                        	<input type="hidden" name = "ref" value="<?php echo $ref?>"> 
                            <input type='submit' class='btn-warning' value= 'Salida'>
                            </form>
                            <?php
                        }
						?></td>
                    	<td><?php echo $F["CONSIGNNE"];?></td>
                     
                         
                         <form action="detalles.php" method="post">
                         <input type="hidden" name = "ref" value="<?php echo $ref?>">
                        <td><input type='submit' class='btn-default' value= 'Detalles'></td>
                        </form>
                        
				 </tr>
                </tbody>
              
				 <?php  }?>
              </table>
                
            </article>
    
        </div>
    </div>
</body>
</html>
