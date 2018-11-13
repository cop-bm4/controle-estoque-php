<!DOCTYPE html>
<html>
<head>
<?php 
require 'head.php';
require 'credenciais.php';
require 'db.php';
 ?>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="http://bm4cop-org.umbler.net/mrm/mrm.php">MRM</a>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href="http://bm4cop-org.umbler.net/mrm/logout.php "> <span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
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
				

					 <a href="/mrm/missao/cadastro.php" class="btn btn-success btn-lg" class="text-center"><span class="glyphicon glyphicon-plus"></span> Nova </a><a href="/mrm/missao/editar.php" class="btn btn-info btn-lg" class="text-center">
         				 <span class="glyphicon glyphicon-pencil"></span> Editar </a><a href="/mrm/missao/concluir.php" class="btn btn-danger btn-lg" class="text-center">
         				 <span class="glyphicon glyphicon-ok-circle"></span> ok </a>		
						
			</div>
		</div>

		
		<!-- div militar -->
		<div class="col-sm-4">
			<div class="alert alert-success"  role="alert">
				<h3 ><strong>Militar</strong></h3>		

					 <a href="/mrm/militar/cadastro.php" class="btn btn-success btn-lg" class="text-center"><span class="glyphicon glyphicon-plus"></span> Novo </a><a href="/mrm/militar/editar.php" class="btn btn-info btn-lg" class="text-center">
         				 <span class="glyphicon glyphicon-pencil"></span> Editar </a><a href="/mrm/militar/excluir.php" class="btn btn-danger btn-lg" class="text-center">
         				 <span class="glyphicon glyphicon-trash"></span> Excluir </a>			
			</div>
		</div>


		<!-- div viaturas -->
		<div class="col-sm-4">
			<div class="alert alert-success"  role="alert">
				<h3 ><strong>Viaturas</strong></h3>
					 <a href="/mrm/viatura/cadastro.php" class="btn btn-success btn-lg" class="text-center"><span class="glyphicon glyphicon-plus"></span> Nova </a><a href="#" class="btn btn-info btn-lg" class="text-center">
         				 <span class="glyphicon glyphicon-pencil"></span> Editar </a><a href="#" class="btn btn-danger btn-lg" class="text-center">
         				 <span class="glyphicon glyphicon-trash"></span> Excluir </a>			 
			</div>
		</div>




	</div>
</div>

<div class="container-fluid">
	
	<h3>Missões Cadastradas</h3>
	<div class="row">
		 <div class="col-sm-12 text-right h2">
        <!-- <a class="btn btn-primary" href="http://bm4cop-org.umbler.net/cadastronovo.php"><i class="fa fa-plus"></i> Novo Material</a> -->
        <a class="btn btn-default" href="http://bm4cop-org.umbler.net/mrm/home.php"><i class="fa fa-refresh"></i> Atualizar</a>
      </div>
	</div>

<?php

$sql =  "SELECT * FROM missao ORDER BY cod_missao DESC";
$result =  mysqli_query($conn, $sql);

?>

<?php if (mysqli_num_rows($result)>0):  ?>

<table class="table table-bordered">
	<thead>
		<th>MRM</th>
		<th>EVENTO</th>
		<th>ORIGEM</th>
		<th>DESTINO</th>
		<th>CONDUTOR</th>
		<th>REFERENCIA</th>
		<th>SITUAÇÃO</th>
	</thead>
	
	<tbody>
<?php while ($row=mysqli_fetch_assoc($result)): ?> 
		<tr>
		<td><?php echo $row['cod_missao'] ?></td>
		<td><?php echo $row['evento']; ?> </td>	
		<td><?php echo $row['localizacao']; ?> </td>	
		<td><?php echo $row['destino']; ?> </td>
		<td><?php 
                $n_militar_condutor = $row['cod_militar_condutor'];   
                $sql_militar = "SELECT nome,graduacao,cod_militar FROM militar WHERE cod_militar='$n_militar_condutor'"; 
                $result_militar=mysqli_query($conn, $sql_militar);
                $row_militar=mysqli_fetch_assoc($result_militar);
                echo " ".$row_militar['graduacao']." ".$row_militar['nome']; 
                ?> </td>
        <td><?php echo $row['referencia']; ?></td>        
        <td><?php echo $row['situacao']; ?></td>
		</tr>
<?php endwhile; ?>

	</tbody>	
</table>
	
<?php endif; ?>

</div>





<?php
/* require 'footer.php';
*/
?> 

</body>
</html>