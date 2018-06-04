<!DOCTYPE html>
<html>
<head>
<?php 
require 'head.php';
require "credenciais.php";
 ?>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">MRM</a>
  
</nav>



<div class="container">
	<div class="row"> 
		<!-- div missao -->
		<div class="col-sm-4">
			<div class="alert alert-danger" role="alert">
				<h3><strong>Missões</strong></h3>

			</div>
		</div>

		
		<!-- div militar -->
		<div class="col-sm-4">
			<div class="alert alert-danger"  role="alert">
				<h3 ><strong>Militar</strong></h3>			
			</div>
		</div>


		<!-- div viaturas -->
		<div class="col-sm-4">
			<div class="alert alert-danger"  role="alert">
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