<?php 

$date = date("Y-m-d");
$fecnum =  strtotime($date);
$sql = "SELECT * FROM date";
$query = mysqli_query($idCone,$sql);
$ayer;
if($F =  mysqli_fetch_array($query)){
	$ayer = $F["fecnum"];
		
}
if(!($ayer == $fecnum)){
	$sqlx  ="SELECT *  FROM traileractual";
	$query  = mysqli_query($idCone,$sqlx);
	while($F = mysqli_fetch_array($query)){
		$ref = $F["REF"];
		$trailecr = $F["T_COMPANY"];
		$tnumber= $F["T_NUMBER"];
		$dname = $F["D_NAME"];
		$driverid = $F["DRIVER_ID"];
		$trcompany = $F["TR_COMPANY"];
		$trnumber = $F["TR_NUMBER"];
		$nseal = $F["N_SEAL"];
		$ld = $F["LD_MT"];
		$delivery = $F["DELIVERY_ID"];
		$timein = $F["TIME_IN"];
		$timeout = $F["TIME_OUT"];
		$consigne = $F["CONSIGNNE"];
		$fec = $F["FECNUM"];
		$waiting = $F["WAITING"];
		$active = $F["ACTIVE"];
		$sqltrailer = "INSERT INTO trailerhistorico VALUES ('$ref','$trailecr','$tnumber','$dname','$driverid','$trcompany','$trnumber','$nseal','$ld','$delivery','$timein','$timeout','$consigne','$fec','$active','$query')";
		$querytrailer = mysqli_query($idCone,$sqltrailer);
		if($query){
			echo "exito";
		}else{
			echo "fail";
		}

		
	}
	$delete = "DELETE FROM traileractual WHERE ACTIVE LIKE '0'";
	$QUERYDELETE = mysqli_query($idCone,$delete);
	if($QUERYDELETE){
		echo "exito";
	}else{
		echo "fail";
	}
	$sqlfec = "DELETE FROM date";
	$queryfec =mysqli_query($idCone,$sqlfec);
	if($queryfec){
		$sqlnuevo  ="INSERT INTO date VALUES ('$date')";
		$querynuevo = mysqli_query($idCone,$queryfec);
		if($querynuevo){
			echo "exito";
		}
	}
}
?>