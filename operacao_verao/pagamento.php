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
  <a class="navbar-brand" href="http://bm4cop-org.umbler.net">home</a>
    <ul class="nav navbar-nav navbar-right">
     
    </ul>
</nav>

<br>
<br>
<br>


                            
		<div class="container">
			<h3>Novo pagamento</h3>

			<form class="form-horizontal" action="#" method="post">

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Pagador</label>
					<div class="col-sm-10">
						<input type="text" name="pagador" class="form-control" id="inputEmail3" placeholder="Responsável pelo pagamento">
					</div>
				</div>


				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Recebedor</label>
					<div class="col-sm-10">
						<input type="text" name="recebedor" class="form-control" id="inputEmail3" placeholder="Responsável pelo recebimento">
					</div>
				</div>
				

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Cargo do Recebedor</label>
					<div class="col-sm-10">
						<input type="text" name="cargo" class="form-control" id="inputEmail3" placeholder="Cargo do recebedor">
					</div>
				</div>
				

	
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Material</label>
					<div class="col-sm-4">
						<select class="form-control form-control-lg" name="cod_material">
							<option value="">     </option>
							<option value="0"> Óculos </option>
							<option value="2"> Short </option>
							<option value="3"> Camisa de GV</option>
						</select>


					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">RP</label>
					<div class="col-sm-4">
						<input type="text" name="rp" class="form-control" id="inputEmail3" placeholder="rp do Material">
					</div>
				</div>


				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Militar</label>
					<div class="col-sm-10">
						<input type="text" name="nome_militar" class="form-control" id="inputEmail3" placeholder="Militar que irá receber">
					</div>
				</div>

					
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">MF</label>
					<div class="col-sm-6">
						<input type="text" name="mf" class="form-control" id="inputEmail3" placeholder="MF do Militar">
					</div>
				</div>

				

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">UBM</label>
					<div class="col-sm-10">
						<input type="text" name="ubm" class="form-control" id="inputEmail3" placeholder="Unidade do Militar">
					</div>
				</div>

				


				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success" name="cadastrar">Emitir Documento </button>
					</div>
				</div>

			</form>

		</div>





<br>

<br>
<br>

</body>
</html>