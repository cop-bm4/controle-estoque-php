<!DOCTYPE html>
<html>
<head>
	<title>Excluir</title>
	<link rel="stylesheet" type="text/css" href="http://copbm4-com-br.umbler.net/estilo.css"/>
	 <meta charset="utf-8">
  
<!--mod mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!---->
  <!-- include bibliotecas bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   
   color: black;
   text-align: center;
  font-size: 10px;
}
</style>
<?php

require 'credenciais.php';
require 'db.php';
	
$id = $_GET['id'];

?>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> SISCOMP </a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="http://copbm4-com-br.umbler.net/home.php">Home</a></li>
      <li class= "active" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="http://copbm4-com-br.umbler.net/cadastro-material.php">Registro<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://copbm4-com-br.umbler.net/cadastro-material.php" >Material</a></li>
          <li><a href="#">VTRS</a></li>
          <li><a href="#">Embarcações</a></li>
        </ul>
      </li>
      
 <li><a href="http://copbm4-com-br.umbler.net/relatorios.php">Relatórios</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href=" http://copbm4-com-br.umbler.net/logout.php "><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>




<?php
$sql = "SELECT id, ubm, material, rp, nserie, situacao, ocorrencia, nome, rg, defeito, reg_date, cargo FROM materialoperacional where id=$id ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>
<div class="container">
  <div class="jumbotron">
  
    <br>
 	 <div class="row">
    <div class="col-lg-12">
   
    <p class="lead"><strong>Material:</strong> <?php echo $row['material']; ?>      <strong> R. Patrimônial: </strong> <?php echo $row['rp']; ?>      <strong> N. Série: </strong> <?php echo $row['nserie'];?> <strong>UBM: </strong> <?php echo $row['ubm']; ?> </p>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <p class="lead"><strong>Situação: </strong> <?php echo $row['situacao']; ?> </p> 
    </div>
   </div> 

    <?php if (!$row['ocorrencia']==NULL): ?>
    <div class="row">
    <div class="col-lg-12"> 
    <p class="lead"><strong>Defeito: </strong> <?php echo $row['defeito'];  ?> </p>
         
    <p class="lead"><strong>Ocorrência: </strong> <?php echo $row['ocorrencia']; ?> </p>     
    </div>      
   </div>  
   
  <?php endif; ?>

<br>
  
  <div class="row">
    <div class="col-lg-12">
      <p class="lead"> <strong> Preenchido por: </strong> <?php echo $row['cargo']; echo " "; echo $row['nome'];  ?> <strong> Em: </strong> <?php echo $row['reg_date']; ?>

      </p>
    </div>
  </div>

  </div>
 </div>
  
<form action="#" method="post">
<div class="container">
	<p class="lead" >VOCÊ RELAMENTE DESEJA EXCLUIR O ITEM ACIMA ?</p>
	
  <button align="center" type="submit" class="btn btn-danger btn-lg" value="sim" name="butao"> Sim </button>
  <a href="http://copbm4-com-br.umbler.net/cadastro-material.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Voltar</a>
</div>

</form>



<?php 

$aux = $_POST['butao'];
if ($aux == 'sim') {

$sql = "SELECT id, ubm, material, rp, nserie, situacao, ocorrencia, nome, rg, defeito, reg_date, cargo FROM materialoperacional where id=$id ";


$sql = "DELETE FROM materialoperacional WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro excluido com sucesso";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
header('location:http://copbm4-com-br.umbler.net/cadastro-material.php');
}

 ?>


  
 <div class="footer">
  <p>© 2018 BM4/COP CBM-PA  V.C João Luz </p>
</div>
</body>
</html>





