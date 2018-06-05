<!DOCTYPE html>
<html>
<head>
<?php
require 'head.php';
require 'credenciais.php';
require 'db.php';

?>

</head>


<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="http://bm4cop-org.umbler.net/mrm/home.php">home</a>
  
</nav>

<br>
<br>
<br>
<form class="form-control" action="#" method="post">
			<div class="container">
				<h3>Cadastro Novo Militar</h3>
				<div class="row">

					<div class="col-2">
						<div class="input-group mb-3">
 							 <div class="input-group-prepend">
    							<span class="input-group-text" id="basic-addon3">Graduação</span>
  							</div>
 						 		<input type="text" class="form-control" id="basic-url" name="graduacao" aria-describedby="basic-addon3">
						</div>
					</div>
						<br>
						<br>

					<div class="col-4">
							<div class="input-group mb-3">
  								<div class="input-group-prepend">
    								<span class="input-group-text" id="BAS">Nome</span>
 							 	</div>
  								<input type="text" class="form-control" id="BAS" aria-describedby="basic-addon3" name="nome">
							</div>
					</div>	
						<br>
						<br>

					<div class="col-4">
							<div class="input-group mb-3">
  								<div class="input-group-prepend">
    								<span class="input-group-text" id="BAS">MF</span>
 							 	</div>
  								<input type="text" class="form-control" id="BAS" aria-describedby="basic-addon3" name="mf">
							</div>
					</div>		

				</div>
					<div class="row">
						<div class="col-3">
							<div class="input-group mb-3">
  								<div class="input-group-prepend">
    								<span class="input-group-text" id="BAS">UBM</span>
 							 	</div>
  								<input type="text" class="form-control" id="BAS" aria-describedby="basic-addon3" name="ubm">
							</div>
						</div>
						<div class="col-3">
							<div class="input-group mb-3">
  								<div class="input-group-prepend">
    								<span class="input-group-text" id="BAS">Telefone</span>
 							 	</div>
  								<input type="text" class="form-control" id="BAS" aria-describedby="basic-addon3" name="telefone">
							</div>
						</div>
					</div>	

					
					<div class="row">	

					<div class="col-lg-2">
       				 <button type="submit" class="btn btn-default " name="pesquisar">Cadastrar</button>
     				</div>
					
					</div>

				</div>
			

			</div>
</form>


<br>
<div class="container">
<?php if(isset($_POST['pesquisar']) ){



$prefixo = $_POST['prefixo'];
$placa = $_POST['placa'];

$sql ="INSERT INTO viaturas(placa, prefixo) VALUES ('$placa','$prefixo')";
	if($conn->query($sql) === TRUE){
		echo "Cadasto realizado com sucesso";


	}	
} 


?>
</div>

<br>
<br>
<div class="container">
	<h3>Viaturas cadastradas</h3>
	<div class="row">
		 <div class="col-sm-12 text-right h2">
        <!-- <a class="btn btn-primary" href="http://bm4cop-org.umbler.net/cadastronovo.php"><i class="fa fa-plus"></i> Novo Material</a> -->
        <a class="btn btn-default" href="http://bm4cop-org.umbler.net/mrm/viatura/cadastro.php"><i class="fa fa-refresh"></i> Atualizar</a>
      </div>
	</div>

<?php

$sql =  "SELECT * FROM viaturas ";
$result =  mysqli_query($conn, $sql);

?>

<?php if (mysqli_num_rows($result)>0):  ?>

<table class="table table-bordered">
	<thead>
		<th>PREFIXO</th>
		<th>PLACA</th>
	</thead>
	
	<tbody>
<?php while ($row=mysqli_fetch_assoc($result)): ?> 
		<tr>
		<td><?php echo $row['prefixo']; ?> </td>	
		<td><?php echo $row['placa']; ?> </td>	

		</tr>
<?php endwhile; ?>

	</tbody>	
</table>
	


</div>

<?php endif ?>
<?php 
require 'footer.php';
?>
</body>
</html>