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
        <a class="btn btn-default" href="http://bm4cop-org.umbler.net/mrm/militar/excluir.php"><i class="fa fa-refresh"></i> Atualizar</a>
      </div>
	</div>

<?php

$sql =  "SELECT * FROM militar ";
$result =  mysqli_query($conn, $sql);

?>

<?php if (mysqli_num_rows($result)>0):  ?>

<table class="table table-bordered">
	<thead>
		<th>Graduação</th>
		<th>Nome</th>
		<th>Mf</th>
		<th>UBM</th>
		<th>Telefone</th>
		<th>Selecionar</th>
	</thead>
	
	<tbody>
<?php while ($row=mysqli_fetch_assoc($result)): ?> 
		<tr>

		<td><?php echo $row['graduacao']; ?> </td>	
		<td><?php echo $row['nome']; ?> </td>	
		<td><?php echo $row['mf']; ?> </td>
		<td><?php echo $row['ubm']; ?> </td>
		<td><?php echo $row['telefone']; ?> </td>
		<td>
					<div class="bs-example">
   				 <!-- Button HTML (to Trigger Modal) -->
   				 <input type="button" class="btn btn-primary launch-modal btn-group-justified" value="excluir">
   	 
  			  <!-- Modal HTML -->
   				 <div id="myModal" class="modal fade">
       				 <div class="modal-dialog">
           				 <div class="modal-content">
               				 <div class="modal-header">
                			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 </div>

                <div class="modal-body">
                    <p>Deseja concluir a missão?</p>
                    <p class="text-warning"><small>Se não Excluir, suas modificações não serão concluidas .</small></p>
                    <p class="text-info"><small><strong>Nota:</strong> Depois de Excluir não poderá mais editar tal Militar.</small></p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">FECHAR</button>
                          <a href="exclui.php?id=<?php echo $row['cod_militar']; ?>" button type="button" class="btn btn-default "><i class="fa fa-pencil"></i> Excluir</a>
                   <!-- <button type="button" class="btn btn-primary" >Savar</button> -->
                </div>
            </div>
        </div>
    </div>
</div>





		</td>
		</tr>
<?php endwhile; ?>

	</tbody>	
</table>
	


</div>

<?php endif ?>

</body>
</html>