<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de VTRS</title>
	<?php 
require "credenciais.php"


?>


<!--mod mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!---->
  <!-- include bibliotecas bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!---->
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
      <li ><a href="http://copbm4cbmpa-com-br.umbler.net/masterhome.php">Home</a></li>
      <li class= "active" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="http://copbm4cbmpa-com-br.umbler.net/mastercadastro-material.php">Registro<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://copbm4cbmpa-com-br.umbler.net/mastercadastro-material.php" >Material</a></li>
          <li><a href="http://copbm4cbmpa-com-br.umbler.net/mastercadastro-vtrs.php">VTRS</a></li>
                  <li><a href="http://copbm4cbmpa-com-br.umbler.net/mastercadastro-embarcacoes.php">Embarcações</a></li>
        </ul>
      </li>
      
<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Relatórios</a>
 <ul class="dropdown-menu">
                <li><a href="http://copbm4cbmpa-com-br.umbler.net/masterrelatorios.php"> Material</a></li>
                <li><a href="http://copbm4cbmpa-com-br.umbler.net/masterrelatoriosvtrs.php">Vtr's</a></li>
                <li><a href="http://copbm4cbmpa-com-br.umbler.net/masterrelatoriosembarcacoes.php">Embarcações</a></li>
                </ul>
              </li>  

    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href=" http://copbm4cbmpa-com-br.umbler.net/logout.php "><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>

<div class="container">
	<h2 class=" text-danger " align="center"> Cadastro de VTRS</h2>
 </div>


<form method="post" action="cadastro.php" id="needs-validation">
	<div class="container">
  <div class="p-3 mb-2 bg-info text-white"> <h3>1- Cadastro Material </h3></div>
  </div>

	<div class="container">
		<
		<div class="row">

			<div class="col-lg-4">
				<div class="input-group">
					<span class="input-group-addon">Prefixo</span>
					<input type="text" name="prefixo">
				</div>
		</div>
	</div>
	



</form>








</body>
</html>