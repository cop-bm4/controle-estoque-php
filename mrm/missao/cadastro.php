<!DOCTYPE html>
<html>
<head>


<?php
require 'head.php';
require 'credenciais.php';
require 'db.php';

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="css/bootstrap-datepicker.css" rel="stylesheet"/>
		<script src="js/bootstrap-datepicker.min.js"></script> 
		<script src="js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>

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
			<h3>Cadastrar Nova Missão</h3>
			<br>
			<div class="row">
				<div class="col-12">
					<div class="input-group mb-3">
 							 <div class="input-group-prepend">
    							<span class="input-group-text" id="basic-addon3">Evento</span>
  							</div>
 						 		<input type="text" class="form-control" id="basic-url" name="evento" aria-describedby="basic-addon3">
						</div>
					</div>
			</div>
			<br>
			<br>
			<div class="row">
				<div class="col-12">
					<div class="input-group mb-3">
 							 <div class="input-group-prepend">
    							<span class="input-group-text" id="basic-addon3">Localização</span>
  							</div>
 						 		<input type="text" class="form-control" id="basic-url" name="localizacao" aria-describedby="basic-addon3">
						</div>
					</div>
			</div>
			<br>
			<br>
			<!-- data-->

			 <div class="form-group">
					<label class="col-sm-2 control-label">Data</label>
					<div class="col-sm-10">
						<div class="input-group date">
							<input type="text" class="form-control" id="exemplo" >
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-th"></span>
							</div>
						</div>

					</div>
				  </div>



			</div>
		</div>


</form>


<script type="text/javascript">
			$('#exemplo').datepicker({	
				format: "dd/mm/yyyy",	
				language: "pt-BR",
				startDate: '+0d',
			});
		</script>
</body>
</html>