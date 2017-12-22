<!DOCTYPE html>
<html>
<head>
	<title>CONTROLE DE MATERIAL</title>

<!-- banco de dados-->
	<?php
require "/home/mytestsite.com.br/public/db.php"; 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
echo "Não foi possível conectar ao banco de dados";
} 


?>
	<!--mod mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!---->
  <!-- include bibliotecas bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!---->

<!--menu-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> SISCOMP </a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="http://mytestsite-com-br.umbler.net/home.php">Home</a></li>
      <li class= "active" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="http://mytestsite-com-br.umbler.net/cadastro-material.php">Cadastro<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://mytestsite-com-br.umbler.net/cadastro-material.php" >Material</a></li>
          <li><a href="#">VTRS</a></li>
          <li><a href="#">Embarcações</a></li>
        </ul>
      </li>
      <li><a href="#">Registro de Ocorrências</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href=" http://mytestsite-com-br.umbler.net/logout.php "><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>
<!---->


<!--tabela -->
<div class="row">				<div class="col-sm-6">					<h2>Material</h2>				</div>				<div class="col-sm-6 text-right h2">			    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Registro</a>			    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>			    </div>			</div>
</head>

<body>

<!--conec -->

</body>
</html>