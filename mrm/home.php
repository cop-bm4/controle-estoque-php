<!DOCTYPE html>
<html>
<head>
<?php 
require 'head.php';
require 'credenciais.php';
 ?>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
			<div class="alert alert-success" role="alert">
				<h3><strong>Missões</strong></h3>
				 <a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-pencil"></span> Plus 
        </a>
						
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