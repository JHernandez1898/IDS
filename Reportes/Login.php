<?php
session_start();

require("conect.php");
$idCone = conectarlocalmente();
$mensaje="";
if (isset($_POST["txtUsuario"]) && isset($_POST["txtPassword"])) 
{
	if (($_POST["txtUsuario"]!='') && ($_POST["txtPassword"]!=''))
	{
		$txtNombre = $_POST["txtUsuario"];
		$_SESSION["id"] = $_POST["txtUsuario"];
		$txtPassword = $_POST["txtPassword"];
		$sql = "SELECT * FROM usuarios WHERE numero='$txtNombre' AND password=MD5('$txtPassword') AND estatus like '1'";
		$result = mysqli_query($idCone,$sql);
		$rows = mysqli_num_rows($result);
		if($rows == 1)
		{
			$_SESSION["User"] = 1;
			header('Location: index.php');
			$mensaje ="";
		}
		else 
		{ 
		session_destroy();
		$mensaje="Informacion incorrecta!!!"; 
		}
	} 
	
}
 ?>
<link rel="stylesheet" href="Recursos/logibncss.css">
  <script src="Recursos/loginjs.js"></script>
	<body bgcolor="#1F3ECF">
		<div  class="login-page">
			<div class="font">
				<center> <img src="Recursos/logo.PNG" width="100" height="100" ><br>
					<font size="+1">International Dispatch Services. Inc</font><center>
			</div>
			<div class="form">
	
			<form class="login-form" action="login.php" method="post">
				<input type="text" placeholder="username" name="txtUsuario"/>
				<input type="password" placeholder="password" name="txtPassword"/>
				<div class="info"><input type="submit" value="login"></div>
				<p class="message">Si no cuenta con su usuario y contraseña favor de solicitarlo al Correo info@indisein.com y nos pondremos en contacto.<br>

				Se le olvido su usuario o contraseña solicítela al mismo correo mencionado. 	<br>
				
				</p>
				<font bgcolor ="red">
				<?php echo $mensaje ?></font>
			
			</form>
			</div>			
		</div>
	</body>