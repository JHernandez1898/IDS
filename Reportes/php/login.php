<?php 
require("../conect.php");
$idCone = conectarlocalmente();
$mensaje="";
session_start();

if (isset($_POST["usuario"]) && isset($_POST["pssword"])) 
{
	if (($_POST["usuario"]!='') && ($_POST["pssword"]!=''))
	{
		$txtNombre = $_POST["usuario"];
		$_SESSION["id"] = $_POST["usuario"];
		$txtPassword = $_POST["pssword"];
		$sql = "SELECT * FROM usuarios WHERE numero='$txtNombre' AND password=MD5('$txtPassword') AND estatus like '1'";
		$result = mysqli_query($idCone,$sql);
		$rows = mysqli_num_rows($result);
		if($rows == 1)
		{
			$_SESSION["User"] = 1;
            $_SESSION["Numero"] = $txtNombre;
            $mensaje = 1;	
		}
		else 
		{ 
		session_destroy();
		$mensaje=0;
		}
	} 
}
else{
    $mensaje =-1;
}
echo $mensaje;
?>