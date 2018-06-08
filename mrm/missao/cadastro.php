<!DOCTYPE html>
<html>
<head>


<?php
require 'head.php';
require 'credenciais.php';
require 'db.php';

?>
<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="http://bm4cop-org.umbler.net/mrm/home.php">home</a>
  
</nav>
<br>
<br>
<br>


		<div class="container">
			<h3>Cadastrar Nova Missão</h3>

			<form class="form-horizontal" action="up.php" method="post">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Evento</label>
					<div class="col-sm-10">
						<input type="text" name="evento" class="form-control" id="inputEmail3" placeholder="Evento">
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Localização</label>
					<div class="col-sm-10">
						<input type="text" name="localizacao" class="form-control" id="inputEmail3" placeholder="Localização">
					</div>
				</div>


				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Data e Hora</label>
					<div class="col-sm-4">
						<div class="input-group date data_formato" data-date-format="dd/mm/yyyy HH:ii:ss">
							<input type="text" class="form-control" name="data" placeholder="Data e Hora do Evento">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-th"></span>
							</span>
						</div> 
					</div>
				</div>
	
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Militar - Condutor</label>
					<div class="col-sm-4">
						<select class="form-control form-control-lg" name="cod_militar_condutor">
							<option value="">     </option>
						<?php
						$sql = "SELECT cod_militar,nome, graduacao FROM militar";
						$result = mysqli_query($conn, $sql);	

						?>	
						<?php if (mysqli_num_rows($result)>0): ?>


						<?php while($row_militar=mysqli_fetch_assoc($result)):?>

						<option value="<?php echo $row_militar['cod_militar'];?>"><?php echo $row_militar['graduacao']." ". $row_militar['nome']; ?></option>

						<?php endwhile; ?>	
						
						</select>

					<?php  endif; ?>

					</div>
				</div>


				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Militar - Auxliar</label>
					<div class="col-sm-4">
						<select class="form-control form-control-lg" name="cod_militar_auxiliar">
							<option value="">     </option>
						<?php
						$sql = "SELECT cod_militar,nome, graduacao FROM militar";
						$result = mysqli_query($conn, $sql);	

						?>	
						<?php if (mysqli_num_rows($result)>0): ?>


						<?php while($row_militar=mysqli_fetch_assoc($result)):?>

						<option value="<?php echo $row_militar['cod_militar'];?>"><?php echo $row_militar['graduacao']." ". $row_militar['nome']; ?></option>

						<?php endwhile; ?>	
						
						</select>

					<?php  endif; ?>

					</div>
				</div>


				
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Viatura</label>
					<div class="col-sm-4">
						<select class="form-control form-control-lg" name="cod_viaturas">
							<option value="">     </option>
						<?php

						$sql_viatura = "SELECT cod_viaturas,prefixo FROM viaturas";
						$result_viatura = mysqli_query($conn, $sql_viatura);	

						?>	
						<?php if (mysqli_num_rows($result_viatura)>0): ?>


						<?php while($row_viatura=mysqli_fetch_assoc($result_viatura)):?>

						<option value="<?php echo $row_viatura['cod_viaturas'];?>"><?php echo $row_viatura['prefixo']; ?></option>

						<?php endwhile; ?>	
						
						</select>

					<?php  endif; ?>

					</div>
				</div>
					
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Solicitante</label>
					<div class="col-sm-6">
						<input type="text" name="solicitante" class="form-control" id="inputEmail3" placeholder="Nome do Responsável pela solicitação.">
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Telefone</label>
					<div class="col-sm-4">
						<input type="text" name="telefone" class="form-control" id="inputEmail3" placeholder="Telefone para Contato">
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Observações</label>
					<div class="col-sm-10">
						<input type="text" name="observacao" class="form-control" id="inputEmail3" placeholder="Observações">
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Referencia</label>
					<div class="col-sm-10">
						<input type="text" name="referencia" class="form-control" id="inputEmail3" placeholder="Referencia da Missão.">
					</div>
				</div>


			<br>


				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success" name="cadastrar">Cadastrar </button>
					</div>
				</div>

			</form>

		</div>


		<div class="container">
			
			<?php if (isset($_POST['cadastrar'])){

			$evento = $_POST['evento'];
			$localizacao =  $_POST['localizacao'];
			$cod_militar_auxiliar = $_POST['cod_militar_auxiliar'];
			$cod_militar_condutor = $_POST['cod_militar_condutor'];
			$viatura = $_POST['viatura'];
			$solicitante = $_POST['solicitante'];
			$telefone = $_POST['telefone'];
			$observacao = $_POST['observacao'];
			$referencia = $_POST['referencia'];
			$data = $_POST['data'];
			$data = explode(" ", $data);
			list($date, $hora) = $data;
			$data_sem_barra = array_reverse(explode("/", $date));
			$data_sem_barra = implode("-", $data_sem_barra);
			$data_sem_barra = $data_sem_barra . " " . $hora;

			require 'db.php';
			$sql_cad = "INSERT INTO missao(evento,localizacao,cod_militar_auxiliar,cod_militar_condutor, viatura, solicitante,telefone, observacao,referencia,data) VALUES('$evento','$localizacao','$cod_militar_auxiliar','$cod_militar_condutor','$viatura','$solicitante','$telefone','$observacao','$referencia','$data_sem_barra')";
			if($conn->query($sql_cad) === TRUE){
		echo "Cadasto realizado com sucesso";


	}	



			} 
			?>
			


		</div>






		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-datetimepicker.min.js"></script>
		<script src="js/locales/bootstrap-datetimepicker.pt-BR.js"></script>
		<script type="text/javascript">
			$('.data_formato').datetimepicker({
				weekStart: 1,
				todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                forceParse: 0,
                showMeridian: 1,
                language: "pt-BR",
                //startDate: '+0d'
			});
		</script>

</body>
</html>