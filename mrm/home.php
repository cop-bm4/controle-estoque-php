<!DOCTYPE html>
<html>
<head>
<title>Novo</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php 

require 'credenciais.php';
 ?>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">MRM</a>
  
</nav>

<br>
<br>
<br>

<div class="container">
	<div class="row"> 
		<!-- div missao -->
		<div class="col-sm-4">
			<div class="alert alert-danger" role="alert">
				<h3><strong>Missões</strong></h3>
				<button type="button" class="btn btn-success" class="gl"></button>
						
			</div>
		</div>

		
		<!-- div militar -->
		<div class="col-sm-4">
			<div class="alert alert-success"  role="alert">
				<h3 ><strong>Militar</strong></h3>			
			</div>
		</div>


		<!-- div viaturas -->
		<div class="col-sm-4">
			<div class="alert alert-success"  role="alert">
				<h3 ><strong>Viaturas</strong></h3>
			</div>
		</div>




	</div>
</div>







<?php
require 'footer.php';
?>
</body>
</html>