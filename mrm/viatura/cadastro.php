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


<form class="form-control" action="#" method="post">
			<div class="container-fluid">
				<div class="row">
					<div class="col-4">
						<div class="input-group">
							<span class="input-group-addon" id="inputGroup-sizing-default">Prefixo</span>
							<input type="text" name="prefixo" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
						</div>
					</div>
						<br>
						<br>
					<div class="col-4">
						<div class="input-group">
							<span class="input-group-addon" id="inputGroup-sizing-default">Placa</span>
							<input type="text" name="placa" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
						</div>

					</div>	

				</div>
			</div>
</form>



<?php
require '/public/db.php';
$prefixo = $_POST['prefixo'];
$placa = $_POST['placa'];






?>


<?php 
require 'footer.php';
?>
</body>
</html>