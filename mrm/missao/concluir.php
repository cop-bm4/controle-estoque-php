<!DOCTYPE html>
<html>
<head>
	
<?php
require 'head.php';
require 'credenciais.php';
require 'db.php';

?>
<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(".launch-modal").click(function(){
		$("#myModal").modal({
			backdrop: 'static'
		});
	}); 
});
</script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>

</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="http://bm4cop-org.umbler.net/mrm/home.php">home</a>
  
</nav>

<?php $sql="SELECT * FROM missao WHERE situacao='aberto'";
	  $result = mysqli_query($conn,$sql);
	  
?>
<?php if ($result>0):  ?>


	
<div class="container">
	<table class="table table-bordered">
		<thead>
			<th>MRM</th>
			<th>EVENTO</th>
			<th>SELECIONAR</th>	
		</thead>
		<tbody>
<?php while ($row = mysqli_fetch_assoc($result)) :?>
		<td><p class="align-items-center"><?php echo $row['cod_missao']; ?></p></td>
		<td><p class="align-items-center"><?php echo $row['evento']; ?> </p></td>	
		<td> 
				
			
				<div class="bs-example">
   				 <!-- Button HTML (to Trigger Modal) -->
   				 <input type="button" class="btn btn-sm btn-primary launch-modal" value="Concluir">
   	 
  			  <!-- Modal HTML -->
   				 <div id="myModal" class="modal fade">
       				 <div class="modal-dialog">
           				 <div class="modal-content">
               				 <div class="modal-header">
                			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 </div>

                <div class="modal-body">
                    <p>Deseja concluir a missão?</p>
                    <p class="text-warning"><small>Se não salvar, suas modificações não serão concluidas.</small></p>
                    <p class="text-info"><small><strong>Nota:</strong> Depois de salvo não poderá mais editar tal evento.</small></p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">FECHAR</button>
                          <a href="att.php?id=<?php echo $row['cod_missao']; ?>" button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Salvar</a>
                   <!-- <button type="button" class="btn btn-primary" >Savar</button> -->
                </div>
            </div>
        </div>
    </div>
</div>


			
		</td>
			
		</tbody>
	</table>	
	
<?php endwhile; ?>

</div>

<!-- modal -->



<!-- modal -->

<?php endif;?>





</body>
</html>