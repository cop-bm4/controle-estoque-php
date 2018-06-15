<!DOCTYPE html>
<html>
<head>
<?php
require 'head.php';
require 'credenciais.php';
require 'db.php';
$id=$_GET['id'];
$sql_consulta = "SELECT * FROM militar WHERE cod_militar = '$id' ";
$result_s= mysqli_query($conn, $sql_consulta);
$row_consulta = mysqli_fetch_assoc($result_s);

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
				<h3>Militar</h3>
				<div class="row">

					<div class="col-4">
						<div class="input-group mb-3">
 							 <div class="input-group-prepend">
    							<span class="input-group-text" id="basic-addon3">Graduação</span>
  							</div>
 						 		<input type="text" class="form-control" id="basic-url" name="graduacao" aria-describedby="basic-addon3" value="<?php echo $row_consulta['graduacao']; ?>">
						</div>
					</div>
						<br>
						<br>

					<div class="col-4">
							<div class="input-group mb-3">
  								<div class="input-group-prepend">
    								<span class="input-group-text" id="BAS">Nome</span>
 							 	</div>
  								<input type="text" class="form-control" id="BAS" aria-describedby="basic-addon3" name="nome" value="<?php echo $row_consulta['nome']; ?>">
							</div>
					</div>	
						<br>
						<br>

					<div class="col-4">
							<div class="input-group mb-3">
  								<div class="input-group-prepend">
    								<span class="input-group-text" id="BAS">MF</span>
 							 	</div>
  								<input type="text" class="form-control" id="BAS" aria-describedby="basic-addon3" name="mf" value="<?php echo $row_consulta['mf']; ?>">
							</div>
					</div>		

				</div>
					<div class="row">
						<div class="col-3">
							<div class="input-group mb-3">
  								<div class="input-group-prepend">
    								<span class="input-group-text" id="BAS">UBM</span>
 							 	</div>
  								<input type="text" class="form-control" id="BAS" aria-describedby="basic-addon3" name="ubm" value="<?php echo $row_consulta['ubm']; ?>">
							</div>
						</div>
						<div class="col-3">
							<div class="input-group mb-3">
  								<div class="input-group-prepend">
    								<span class="input-group-text" id="BAS">Telefone</span>
 							 	</div>
  								<input type="text" class="form-control" id="BAS" aria-describedby="basic-addon3" name="telefone" value="<?php echo $row_consulta['telefone']; ?>">
							</div>
						</div>
					</div>	

					
					<div class="row">	

					<div class="col-lg-2">
       				 <button type="submit" class="btn btn-default " name="pesquisar">Atualizar</button>
     				</div>
					
					</div>

				</div>
			

			</div>
</form>


<br>
<div class="container">
<?php if(isset($_POST['pesquisar']) ){



$nome = $_POST['nome'];
$ubm = $_POST['ubm'];
$graduacao = $_POST['graduacao'];
$mf = $_POST['mf'];
$telefone = $_POST['telefone'];

$sql ="UPDATE militar SET nome= '$nome', ubm='$ubm', graduacao= '$graduacao',mf='$mf', telefone='$telefone' WHERE cod_militar='$id' ";
	if($conn->query($sql) === TRUE){
		echo "Atualizado com sucesso";


	}	
} 


?>
</div>

<br>
<br>

</body>
</html>