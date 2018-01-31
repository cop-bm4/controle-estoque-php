<!DOCTYPE html>
<html>
<head>
	<title>Cdastrar Novo usuário</title>
<?php require "credenciais.php" ?>


	
		 <meta charset="utf-8">
  
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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://copbm4cbmpa-com-br.umbler.net/"> SISCOMP/bm4 </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active" ><a href="http://copbm4cbmpa-com-br.umbler.net/masterhome.php">Home</a></li>
     
     	<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="http://copbm4cbmpa-com-br.umbler.net/mastercadastro-material.php">Registro<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://copbm4cbmpa-com-br.umbler.net/mastercadastro-material.php">Material</a></li>
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
      
      <li><a href="http://copbm4cbmpa-com-br.umbler.net/logout.php "><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>


<div class="container">
	<form class="form-control" method="post" action="#">
		<div class="row">
			<div class="col-lg-4 ">
				<div class="input-group">
					<span class="input-group-addon">Login</span>
					<input type="text" name="login">
					
				</div>
				<p class="text text-mudet">Digite o Login</p>
			</div>
		</div>
			<div class="row">
			<div class="col-lg-4 ">
				<div class="input-group">
					<span class="input-group-addon">Senha</span>
					<input type="text" name="login">
					
				</div>
				<p class="text text-mudet">Digite o Senha</p>
			</div>
		</div>

	</form>


	
</div>




</body>
</html>