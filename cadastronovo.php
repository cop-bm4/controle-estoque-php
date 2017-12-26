<!DOCTYPE html>
<html>
<head>
  <title>cadastro material operacional</title>

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

  <meta name="viewport" content="width=device-width, initial-scale=1">
<!---->
  <!-- include bibliotecas bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
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
      
 <li><a href="#">Relatórios</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href=" http://mytestsite-com-br.umbler.net/logout.php "><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>


<div  class="container">
<div class="jumbotron">
<h1>SISCOMP</h1> 
    <p class="text-danger">Cadastro de Material Operacional </p> 
  </div>
  
</div>



<?php



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$stmt = $conn->prepare("INSERT INTO  materialoperacional(ubm, material, tipo, rp, nserie, situacao, ocorrencia, nome, rg)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param($ubm, $material, $tipo, $rp, $nserie, $situacao, $ocorrencia, $nome, $rg);
$ubm = "30 gbm";
$material = "capa";
$tipo = "2";
$rp="1234";
$nserie="123";
$situacao="operante";
$ocorrencia="deu prego";
$nome="vasco";
$rg="643687";
$stmt->execute();


$stmt->close();

$conn->close();
?>

</body>
</html>
