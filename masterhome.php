<!DOCTYPE html>
<html>


<head>

	<!--login -->
<?php require "credenciais.php" ?>


	<title>Home</title>
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
      <a class="navbar-brand" href="http://bm4cop-org.umbler.net/"> SISCOMP/bm4 </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active" ><a href="http://bm4cop-org.umbler.net/masterhome.php">Home</a></li>
     
     	<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="http://bm4cop-org.umbler.net/mastercadastro-material.php">Registro<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://bm4cop-org.umbler.net/mastercadastro-material.php">Material</a></li>
        <li><a href="http://bm4cop-org.umbler.net/mastercadastro-vtrs.php">VTRS</a></li>
                  <li><a href="http://bm4cop-org.umbler.net/mastercadastro-embarcacoes.php">Embarcações</a></li>
        </ul>
      </li>



  


            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Relatórios</a>
                <ul class="dropdown-menu">
                <li><a href="http://bm4cop-org.umbler.net/masterrelatorios.php"> Material</a></li>
                <li><a href="http://bm4cop-org.umbler.net/masterrelatoriosvtrs.php">Vtr's</a></li>
                <li><a href="http://bm4cop-org.umbler.net/masterrelatoriosembarcacoes.php">Embarcações</a></li>
                </ul>
              </li>  

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="http://bm4cop-org.umbler.net/mudarsenha.php"><span class="glyphicon glyphicon-lock">Mudar Senha</span></a></li>
      <li> <a href="http://bm4cop-org.umbler.net/cadastrarusuarios.php"><span class="glyphicon glyphicon-plus"> </span> <span class="glyphicon glyphicon-user"></span></a> Novo Usuário</li>
      <li><a href="http://bm4cop-org.umbler.net/logout.php "><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="jumbotron">
    <h1>SISCOMP/bm4</h1> 
    <p class="text-danger">Sistema de Controle de Material Operacional e Viaturas</p> 
</div>
  </div>


<div class="container">
  <div class="row">
    <div class="col-sm-4">
      
      	
<div class="thumbnail">
      <a href="http://bm4cop-org.umbler.net/mastercadastro-material.php">
       
        <div class="caption">
        <h3 align="center">        Material </h3>
        </div>
      </a>
    </div>

      
    </div>
    <div class="col-sm-4">

      <div class="thumbnail">
      <a href="http://bm4cop-org.umbler.net/mastercadastro-vtrs.php">
       
        <div class="caption">
        <h3 align="center">        VTRS </h3>
        </div>
      </a>
    </div>
      
    </div>
    

    <div class="col-sm-4">
     <div class="thumbnail">
      <a href="http://bm4cop-org.umbler.net/mastercadastro-embarcacoes.php">
       
        <div class="caption">
        <h3 align="center">        EMBARCAÇÕES </h3>
        </div>
      </a>
    </div>
      

    </div>
  </div>
</div>


<div class="footer">
  <p>© 2018 BM4/COP CBM-PA  V.C João Luz </p>
</div>

</body>




</html>