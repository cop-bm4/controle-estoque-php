<!DOCTYPE HTML>  

<html>
<head>

<title>Controle de Material Operacional</title>

	<link rel="stylesheet" type="text/css" href="estilo.css"/>
<!--login -->
<?php  
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.php');
	}

$logado = $_SESSION['login'];
?>

</head>


<body>  
<!-- Banco de dados conect-->
<?php

require "db.php"; 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

?>
<!--conec -->

	

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://mytestsite-com-br.umbler.net/"> SISCOMP </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://mytestsite-com-br.umbler.net/">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="http://mytestsite-com-br.umbler.net/login.html"><span class="glyphicon glyphicon-user"></span> Login</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="jumbotron">
    <h1>SISCOMP</h1> 
    <p class="text-danger">Sistema de controle de material operacional</p> 

  </div>



<h1>Controle de Material Operacional</h1>


<form method="post" action="forms.php">  

ABAFADOR INCÊNDIO <input type=text name="quantidade"><br> 

<select name="situacao">

<option value=Operante>Operante</option>

<option value=Inoperante>Inoperante</option>

</select><BR><BR>

  <input type="submit" name="submit" value="Enviar">  

</form>

</body>

</html>
