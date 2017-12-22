<!DOCTYPE html>
<html>
<head>
	<title>CONTROLE DE MATERIAL</title>
	<!--mod mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!---->
  <!-- include bibliotecas bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!---->
<div class="row">				<div class="col-sm-6">					<h2>Clientes</h2>				</div>				<div class="col-sm-6 text-right h2">			    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Cliente</a>			    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>			    </div>			</div>
</head>

<body>
<?php
require "/home/mytestsite.com.br/public/db.php"; 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
echo "Não foi possível conectar ao banco de dados";
} 


?>
<!--conec -->
oi
</body>
</html>