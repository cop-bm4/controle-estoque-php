<!DOCTYPE html>
<html>
<head>
	<title>CONTROLE DE MATERIAL</title>

<!-- banco de dados-->
	<?php
require "/home/mytestsite.com.br/public/databaseconsulta.php"; 
require "function.php";

// Check connection



?>
	<!--mod mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!---->
  <!-- include bibliotecas bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!---->

<!--menu-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> SISCOMP </a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="http://mytestsite-com-br.umbler.net/home.php">Home</a></li>
      <li class= "active" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="http://mytestsite-com-br.umbler.net/cadastro-material.php">Cadastro<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://mytestsite-com-br.umbler.net/cadastro-material.php" >Material</a></li>
          <li><a href="#">VTRS</a></li>
          <li><a href="#">Embarcações</a></li>
        </ul>
      </li>
      <li><a href="#">Registro de Ocorrências</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href=" http://mytestsite-com-br.umbler.net/logout.php "><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>
<!---->


<!--tabela -->
<div class="row">				<div class="col-sm-6">					<h2>Material</h2>				</div>				<div class="col-sm-6 text-right h2">			    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Registro</a>			    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>			    </div>			</div>
</head>

<body>


<?php if (!empty($_SESSION['message'])) : ?>			<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>				<?php echo $_SESSION['message']; ?>			</div>			<?php clear_messages(); ?>		<?php endif; ?>		
<hr>		
<table class="table table-hover">		<thead>			<tr>				<th>ID</th>				<th width="30%">Nome</th>				<th>CPF/CNPJ</th>				<th>Telefone</th>				<th>Atualizado em</th>				<th>Opções</th>			</tr>		</thead>		<tbody>		<?php if ($MaterialOp) : ?>		<?php foreach ($MaterialOp as $customer) : ?>			<tr>				<td><?php echo $customer['id']; ?></td>				<td><?php echo $customer['name']; ?></td>				<td><?php echo $customer['cpf_cnpj']; ?></td>				<td>00 0000-0000</td>				<td><?php echo $customer['modified']; ?></td>				<td class="actions text-right">					<a href="view.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>					<a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>					<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>">						<i class="fa fa-trash"></i> Excluir					</a>				</td>			</tr>		<?php endforeach; ?>		<?php else : ?>			<tr>				<td colspan="6">Nenhum registro encontrado.</td>			</tr>		<?php endif; ?>		</tbody>		</table>




<!--conec -->

</body>
</html>