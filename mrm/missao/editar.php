<!DOCTYPE html>
<html>
<head>
	<?php 
	require 'head.php';
	require 'db.php';
	require 'credenciais';
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
		<td>SELECIONAR</td>
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
        <td> <a href="edit.php?id=<?php echo $row['cod_missao']; ?>" button type="button" class="btn btn-default "><i class="fa fa-pencil"></i> Selecionar</a></td>
		</tr>
<?php endwhile; ?>

	</tbody>	
</table>
	
<?php endif; ?>

</div>






</body>
</html>