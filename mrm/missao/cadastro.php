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
			
			<form class="form-horizontal" action="#" method="POST">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Evento</label>
					<div class="col-sm-10">
						<input type="text" name="evento" class="form-control" id="inputEmail3" placeholder="Evento">
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
					<label for="inputPassword3" class="col-sm-2 control-label">Militar</label>
					<div class="col-sm-offset-2 col-sm-6">
						<select class="form-control">
						<?php
						$sql = "SELECT nome, graduacao FROM militar";
						$result = mysqli_query($conn, $sql);	
							
						?>	
						

						</select>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success" name="cadastrar">Cadastrar</button>
					</div>
				</div>
			</form>
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