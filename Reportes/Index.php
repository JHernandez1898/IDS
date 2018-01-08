<?php
session_start();
if (!isset($_SESSION['User']))  header('Location: Login.php'); 
include ("Recursos/Template.php");
echo $_SESSION["id"];
$id = $_SESSION["id"];
$_SESSION["idped"] = $id;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>IDS</title>
 <link href="../Recursos/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
 <body>
 <div class="container">
 	<div class="row">
    	<h1 class="page-header">Bienvenido</h1>
    </div>
 </div>
 </body>
</html>
