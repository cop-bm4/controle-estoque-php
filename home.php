<!DOCTYPE html>
<html>


<head>

	<!--login -->
<?php  
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:home.php');
	}

$logado = $_SESSION['login'];
?>


	<title>Home</title>
		 <meta charset="utf-8">
  
<!--mod mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!---->
  <!-- include bibliotecas bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!---->
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://mytestsite-com-br.umbler.net/"> SISCOMP </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active" ><a href="http://mytestsite-com-br.umbler.net/home.php">Home</a></li>
      <li  ><a href="http://mytestsite-com-br.umbler.net/cadastro-material.php">Cadastro de Material</a></li>
      <li><a href="#">Cadastro de Ocorrências</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href=" http://mytestsite-com-br.umbler.net/logout.php "><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="jumbotron">
    <h1>SISCOMP</h1> 
    <p class="text-danger">Sistema de controle de material operacional</p> 
</div>
  </div>


<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Cadastro de Material</h3>
      	
<div class="thumbnail">
      <a href="http://mytestsite-com-br.umbler.net/cadastro-material.php">
        <img src="http://mytestsite-com-br.umbler.net/vetorcadastrarocorrencia.jpg" class="img-rounded" alt="cadastro-material" width="304" height="236">
        <div class="caption">
        
        </div>
      </a>
    </div>

      
    </div>
    <div class="col-sm-4">
      <h3>Registor de Ocorrências</h3>
      
    </div>
    

    <div class="col-sm-4">
      <h3>Relatórios</h3> 


    </div>
  </div>
</div>




</body>




</html>