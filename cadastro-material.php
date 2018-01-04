<!DOCTYPE HTML>  

<html>
<head>

  <!--login -->
<?php 
require "credenciais.php"

$ubm = $_SESSION['ubm'];


?>
<title>Controle de Material Operacional</title>


<!--mod mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!---->
  <!-- include bibliotecas bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!---->

</head>


<body>  
<!-- Banco de dados conect-->
<?php
require "db.php"; 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
echo "Não foi possível conectar ao banco de dados";
} 
?>
<!--conec -->

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
      
 <li><a href="#">Relatórios</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href=" http://copbm4-com-br.umbler.net/logout.php "><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>



   

<div class="row">
   
    <div class="col-sm-10 text-right h2">
        <a class="btn btn-primary" href="http://copbm4-com-br.umbler.net/cadastronovo.php"><i class="fa fa-plus"></i> Novo Material</a>
        <a class="btn btn-default" href="http://copbm4-com-br.umbler.net/cadastro-material.php"><i class="fa fa-refresh"></i> Atualizar</a>
      </div>
  </div>

<?php
$sql = "SELECT id, ubm, material, rp, nserie, situacao, ocorrencia, nome, rg, reg_date FROM materialoperacional WHERE 'ubm' =' $ubm' ";
$result = mysqli_query($conn, $sql);
?>

<div class="container" >
   <?php if(mysqli_num_rows ($result) > 0 ): ?>    
<table class="table table-bordered">
<thead>
  <tr>
  
    <th align="center" >Material</th>
    <th>R. Patrimônial</th>
    <th>Número de Série</th>
    <th>Situação</th>
    <th>Atualizado em</th>
    <th align="center" >        Opções      </th>
  </tr>
</thead>


<tbody>
 <?php while($row = mysqli_fetch_assoc($result)): ?> 

  <tr>
    
    <td><?php echo $row['material']; ?></td>
    <td><?php echo $row['rp']; ?></td>
    <td><?php echo $row['nserie']?></td>
    <td><?php echo $row['situacao']; ?></td>
    <td><?php echo $row['reg_date']; ?></td>
    <td class="actions text-right">
      <a href="view.php?id=<?php echo $row['id']; ?>"button type="button" class="btn btn-default"><i class="fa fa-eye"></i> Visualizar</a>
      <a href="edit.php?id=<?php echo $row['id']; ?>" button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Editar</a>
      <a href="#" button type="button" class="btn btn-default" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $row['id']; ?>">
        <i class="fa fa-trash"></i> Excluir
      </a>
    </td>
  </tr>

  



<?php endwhile; ?>
</tbody>
</table>
<?php endif;?>

</div>






</body>

</html>