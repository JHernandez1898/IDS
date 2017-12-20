<?php


ini_set('max_execution_time', 300);?>

<!DOCTYPE html>
<html lang="en"><head>
  <title>Empleados IDS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Recursos/bootstrap.min.css">
  <script src="Recursos/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
		
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #40AFDD;
      color: black;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
		  background-color:#2D8DF1
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<center>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="Index.php"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       <li class="active"><a href="#">&nbsp;</a></li>
        <li class="active"><a href="#">&nbsp;</a></li>
        <li class="active"><a href="index.php">Inicio</a></li>
        <li class="active"><a href="#">&nbsp;</a></li>
        <li class="active"><a href="registro.php">Registrar Empleado</a></li>
         <li class="active"><a href="#">&nbsp;</a></li>
        <li class="active"><a href="Entrada.php">Entrada</a></li>
         <li class="active"><a href="#">&nbsp;</a></li>
        <li class="active"><a href="Salida.php">Salida</a></li>
         <li class="active"><a href="#">&nbsp;</a></li>
        <li class="active"><a href="historial.php">Historial</a></li>
         <li class="active"><a href="#">&nbsp;</a></li>
        <li class="active"><a href="reimprimirgafet.php">Imprimir gafet</a></li>
         <li class="active"><a href="#">&nbsp;</a></li>
         <li class="active"><a href="#">&nbsp;</a></li>
         <li class="active"><a href="#">&nbsp;</a></li>
         <li class="active"><a href="#">&nbsp;</a></li>
         <li class="active"><a href="#">&nbsp;</a></li>
         <li class="active"><a href="#">&nbsp;</a></li>
         <li class="active"><a href="#">&nbsp;</a></li>
         <li class="active"><a href="#">&nbsp;</a></li>
         <li class="active"><a href="#">&nbsp;</a></li>
         <li class="active"><a href="#">&nbsp;</a></li>
         <li class="active"><a href="#">&nbsp;</a></li>
         <li class="active"><a href="#">&nbsp;</a></li>
        <li class="active"><?php  ?><a href="login.php">Salir</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
      </ul>
    </div>
  </div>
  
</nav>

<center>
