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
    <div class="col-sm-8 text-left"> 
      <h1>Bienvenido</h1>
      <p></p>
      <hr>
      <h3></h3>
      <p></p>
    </div>
    <div class="col-sm-2 sidenav">
      
    </div>
  </div>
</div>
</body>
</html>
