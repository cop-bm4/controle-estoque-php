<!DOCTYPE html>
<html>
<head>
	<?php 
	require 'credenciais.php';
	require 'db.php';
	require 'head.php';

	$id = $_GET['id'];
	$sql_consulta = " SELECT * FROM viatura WHERE cod_viatura='$id' ";
	$result_viatura = mysqli_query($conn, $sql_consulta);
	$row_viatura =  mysqli_fetch_assoc($result_viatura);


	?>

</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="http://bm4cop-org.umbler.net/mrm/home.php">home</a>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href="http://bm4cop-org.umbler.net/mrm/logout.php "> <span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
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
    								<span class="input-group-text" id="BAS">Placa</span>
 							 	</div>
  								<input type="text" class="form-control" id="BAS" aria-describedby="basic-addon3" name="placa">
							</div>
					</div>	
					<div class="col-lg-2">
       				 <button type="submit" class="btn btn-default " name="pesquisar">Cadastrar</button>
     				 </div>
				</div>
			</div>
</form>






</body>
</html>