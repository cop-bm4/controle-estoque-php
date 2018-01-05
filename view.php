
<!DOCTYPE html>
<html>
<head>

<?php
/*require 'credenciais.php';*/
require 'db.php';


?>
	<title>Visualizar</title>


	 <meta charset="utf-8">
  
<!--mod mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!---->
  <!-- include bibliotecas bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      
 <li><a href="#">Relatórios</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href=" http://copbm4-com-br.umbler.net/logout.php "><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>

<?php 
$id = $_GET['id'];
echo "id .$id. ";

?>

<?php
$sql = "SELECT id, ubm, material, rp, nserie, situacao, ocorrencia, nome, rg, defeito, reg_date, cargo FROM materialoperacional where id=$id ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo $row['id'];
echo $row['ubm'];
echo $row['material'];
echo $row['rp'];
echo $row['nserie'];
echo $row['situacao'];
echo $row['ocorrencia']; 
echo $row['nome'];
echo $row['rg'];
echo $row['defeito'];
echo $row['reg_date'];
echo $row['cargo'];


?>

 <div class="container">
 	 <dl class="row">
     <dt class="col-sm-2"> Material: </dt>
     <dd class="col-sm-1"><?php echo $row['material']; ?></dd>
     <dt class="col-sm-2">R. Patrimônial: </dt>
     <dd class="col-sm-1"><?php echo $row['rp'] ?></dd>
   
   </dl>
 </div>




</body>
</html>


