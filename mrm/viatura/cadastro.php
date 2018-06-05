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
			<div class="container-fluid">
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

				</div>
			</div>
</form>



<?php
require 'http://bm4cop-org.umbler.net/db.php';
$prefixo = $_POST['prefixo'];
$placa = $_POST['placa'];






?>


<?php 
require 'footer.php';
?>
</body>
</html>