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
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">

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
			<!-- data-->

			<div class="row">
						<div class="col-4">

							<div class="input-group mb-3">
 							 
 							 <div class="input-group-prepend">
    							<span class="input-group-text" id="basic-addon3">Data e Hora</span>
  							</div>
 						 		<div class="input-group date data_formato" data-date-format="dd/mm/yyyy HH:ii:ss">
							<input type="text" class="form-control" name="data" placeholder="Data da visita">
								</div>


						</div>		
					</div>

					<div class="col-4">
						
					</div>
				</div>
			</div>		
		</div>



			</div>
		</div>


</form>





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