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
  <a class="navbar-brand" href="http://bm4cop-org.umbler.net/mrm/home.php">home</a>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href="http://bm4cop-org.umbler.net/mrm/logout.php "> <span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
</nav>

<br>

<br>
<br>
<div class="container">
	<h3>Militares cadastrados</h3>
	<div class="row">
		 <div class="col-sm-12 text-right h2">
        <!-- <a class="btn btn-primary" href="http://bm4cop-org.umbler.net/cadastronovo.php"><i class="fa fa-plus"></i> Novo Material</a> -->
        <a class="btn btn-default" href="http://bm4cop-org.umbler.net/mrm/viatura/editar.php"><i class="fa fa-refresh"></i> Atualizar</a>
      </div>
	</div>

<?php

$sql =  "SELECT * FROM viaturas ";
$result =  mysqli_query($conn, $sql);

?>

<?php if (mysqli_num_rows($result)>0):  ?>

<table class="table table-bordered">
	<thead>
		<th>Prefixo</th>
		<th>Placa</th>
		<th>Selecionar</th>
	</thead>
	
	<tbody>
<?php while ($row=mysqli_fetch_assoc($result)): ?> 
		<tr>
		<td><?php echo $row['prefixo'];  ?></td>	
		<td><?php echo $row['placa']; ?></td>
		
		<td>
			<a href="edit.php?id=<?php echo $row['cod_viatura']; ?>" button type="button" class="btn btn-default "><i class="fa fa-pencil"></i> Selecionar</a>


		</td>
		</tr>
<?php endwhile; ?>

	</tbody>	
</table>
	


</div>

<?php endif ?>

</body>
</html>