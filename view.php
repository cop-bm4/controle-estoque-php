
<!DOCTYPE html>
<html>

<head>
<?php
require 'credenciais.php';
require 'db.php';


?>
	<title>Visualizar</title>

<link rel="stylesheet" type="text/css" href="http://copbm4cbmpa-com-br.umbler.net/estilo.css"/>
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
   font-size: 12px;
}
</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> SISCOMP </a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="http://copbm4cbmpa-com-br.umbler.net/home.php">Home</a></li>
      <li class= "active" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="http://copbm4cbmpa-com-br.umbler.net/cadastro-material.php">Registro<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://copbm4cbmpa-com-br.umbler.net/cadastro-material.php" >Material</a></li>
          <li><a href="http://copbm4cbmpa-com-br.umbler.net/cadastro-vtrs.php">VTRS</a></li>
          <li><a href="http://copbm4cbmpa-com-br.umbler.net/cadastro-embarcacoes.php">Embarcações</a></li>
        </ul>
      </li>
      
 <li class="dropdown">
      					<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Relatórios</a>
      				 <ul class="dropdown-menu">
                <li><a href="http://copbm4cbmpa-com-br.umbler.net/relatorios.php"> Material</a></li>
                <li><a href="http://copbm4cbmpa-com-br.umbler.net/relatoriosvtrs.php">Vtr's</a></li>
                <li><a href="http://copbm4cbmpa-com-br.umbler.net/relatoriosembarcacoes.php">Embarcações</a></li>
                </ul>
      				</li>	 

    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href=" http://copbm4cbmpa-com-br.umbler.net/logout.php "><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>

<?php 
$id = $_GET['id'];


?>

<?php
$sql = "SELECT id, ubm, material, rp, nserie, situacao, ocorrencia, nome, rg, defeito, reg_date, cargo, marca,observacoes FROM materialoperacional where id=$id ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>
<div class="container">
  <div class="jumbotron">
  <h2>Visualizaçâo Detalhada do Material</h2>    
    <br>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">#</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">UBM:</th>
      <th><?php echo $row['ubm']; ?></th>
    </tr>
    <tr>
      <th scope="row"> Material:</th>
      <td><?php echo $row['material']; ?> </td>
    
    </tr>
    <tr>
      <th scope="row">R. Patrimônial:</th>
      <td><?php echo $row['rp']; ?></td>
      
    </tr>
    <tr>
      <th scope="row">N.Série</th>
      <td><?php echo $row['nserie'];?></td>
      
    </tr>

    <tr>
      <th scope="row">Marca:</th>
      <td><?php echo $row['marca']; ?></td>
    </tr>

    <tr>
      <th scope="row">Situação:</th>
      <td><?php echo $row['situacao']; ?></td>
    </tr>
  <?php if (!$row['ocorrencia']==NULL): ?>
    <tr>
      <th scope="row">Ocorrência:</th>
      <td><?php echo $row['ocorrencia']; ?></td>
    </tr>
  <?php endif; ?>
    <?php if(!$row['defeito']==NULL): ?>
    <tr>
      <th scope="row">Defeito:</th>
      <td><?php echo $row['defeito'];  ?></td>
    </tr>
  
<?php endif;?>
   <?php if (!$row['observacoes']==NULL): ?>

    <tr>
      <th scope="row">Observações</th>
      <td><?php echo $row['observacoes']; ?></td>
    </tr>

   <?php endif ?>



  </tbody>
</table>
      
  <div class="row">
    <div class="col-lg-12">
      <p > <strong> Preenchido por: </strong> <?php echo $row['cargo']; echo " "; echo $row['nome'];  ?> <strong> Em: </strong> <?php echo $row['reg_date']; ?>

      </p>
    </div>
  </div>

  </div>

  <a href="http://copbm4cbmpa-com-br.umbler.net/cadastro-material.php"  button type="button" class="btn btn-default btn-lg"  class="">Voltar</a>
 </div>
  
 <div class="footer">
  <p>© 2018 BM4/COP  CBM-PA V.C João Luz </p>
</div>
</body>
</html>


