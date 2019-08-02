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
		$sql = "SELECT * FROM usuarios WHERE nombre='$txtNombre' AND password=MD5('$txtPassword') AND estatus = '1'";
		$result = mysqli_query($idCone,$sql);
		$rows = mysqli_num_rows($result);
		if($rows == 1)
		{
            if($F = mysqli_fetch_array($result)) {
                $_SESSION["permiso"] = $F["permisos"];
                $_SESSION["Numero"] = $F["numero"];
            }
			$_SESSION["User"] = 1;
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