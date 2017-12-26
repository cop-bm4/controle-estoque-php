<!DOCTYPE HTML>  

<html>
<head>

  <!--login -->
<?php  
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:home.php');
  }

$logado = $_SESSION['login'];
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
      <li ><a href="http://mytestsite-com-br.umbler.net/home.php">Home</a></li>
      <li class= "active" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="http://mytestsite-com-br.umbler.net/cadastro-material.php">Registro<span class="caret"></span></a>
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


<div class="container">
<div class="jumbotron">
<h1>SISCOMP</h1> 
    <p class="text-danger">Cadastro de Material Operacional </p> 
  </div>
  
</div>
<?php

$sql = "SELECT id, ubm, material, rp, nserie, situacao, ocorrencia, nome, rg, reg_date,situacao FROM materialoperacional";
$result = mysqli_query($conn, $sql);
?>


       
<table class="table table-bordered">
<thead>
  <tr>
    <th>ID</th>
    <th >Material</th>
    <th>RP</th>
    <th>Numero de Serie</th>
    <th>situacao</th>
    <th>Atualizado em</th>
    <th>Opções</th>
  </tr>
</thead>

<?php if(mysqli_num_rows ($result) > 0 ): ?>

 <?php while($row = mysqli_fetch_assoc($result)): ?> 
<tbody>
  <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['material']; ?></td>
    <td><?php echo $row['rp']; ?></td>
    <td><?php echo $row['nserie']?></td>
    <td><?php echo $row['situacao']; ?></td>
    <td><?php echo $row['reg_date']; ?></td>
    <td class="actions text-right">
      <a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
      <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
      <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>">
        <i class="fa fa-trash"></i> Excluir
      </a>
    </td>
  </tr>

  

</tbody>
</table>

<?php endwhile; ?>

<?php endif;?>








</body>

</html>
