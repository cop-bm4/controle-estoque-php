<!DOCTYPE html>
<html>
<head>
<?php
require 'head.php';
require 'credenciais.php';

?>

</head>


<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="bm4cop-org.umbler.net/mrm/home.php">Home</a>
  
</nav>

<br>
<br>
<br>
<form class="form-control" action="#" method="post">
			<div class="container">
				<h3>Cadastro Nova Viatura</h3>
				<div class="row">
					<div class="col-4">
						<div class="input-group mb-3">
 							 <div class="input-group-prepend">
    							<span class="input-group-text" id="basic-addon3">Prefixo</span>
  							</div>
 						 		<input type="text" class="form-control" id="basic-url" name="prefixo" aria-describedby="basic-addon3">
						</div>
					</div>
						<br>
						<br>
					<div class="col-4">
							<div class="input-group mb-3">
  								<div class="input-group-prepend">
    								<span class="input-group-text" id="basic-addon3">Placa</span>
 							 	</div>
  								<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" nome="placa">
							</div>
					</div>	
					<div class="col-lg-2">
       				 <button type="submit" class="btn btn-default " name="pesquisar">Cadastrar</button>
     				 </div>
				</div>
			</div>
</form>


<br>
<?php if(isset($_POST['pesquisar']) ): ?>
<?php
require 'http://bm4cop-org.umbler.net/db.php';
$prefixo = $_POST['prefixo'];
$placa = $_POST['placa'];

$sql ="INSERT INTO viaturas(placa, prefixo) VALUES ('$placa','$prefixo')";

?>

<?php  if($conn->query($sql) === TRUE): ?>

<div class="container">
	<h3>Cadastro realizado com sucesso</h3>
	<br>
	<a href="http://bm4cop-org.umbler.net/mrm/viaturas/cadastro.php" class="btn btn-info" role="button">Novo </a>
</div>

<?php endif ?>
<?php endif ?>

<?php 
require 'footer.php';
?>
</body>
</html>