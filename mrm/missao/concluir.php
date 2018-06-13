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

<?php $sql ?>


<!-- modal -->

<div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
    <input type="button" class="btn btn-lg btn-primary launch-modal" value="Concluir?">
    
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
                    <button type="button" class="btn btn-primary">Savar</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- modal -->







</body>
</html>