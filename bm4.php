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
      <a class="navbar-brand" href="http://copbm4cbmpa-com-br.umbler.net/"> SISCOMP </a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="http://copbm4cbmpa-com-br.umbler.net/logout.php "><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="jumbotron">
    <h1>SISCOMP</h1> 
    <p class="text-danger">Sistema de controle de material operacional</p> 
</div>
  </div>


<div class="container">
  <div class="row">
    <div class="col-sm-4">
      
      	
<div class="thumbnail">
      <a href="http://copbm4cbmpa-com-br.umbler.net/mastercadastro-materialbm4.php">
        <img src="http://copbm4cbmpa-com-br.umbler.net/vetorcadastrarocorrencia.jpg" class="img-rounded" alt="cadastro-material" width="304" height="236">
        <div class="caption">
        <h3 align="center">        Material BM4</h3>
        </div>
      </a>
    </div>

      
    </div>
    <div class="col-sm-4">

      <div class="thumbnail">
      <a href="http://copbm4cbmpa-com-br.umbler.net/mastercadastro-vtrsbm4.php">
        <img src="http://copbm4cbmpa-com-br.umbler.net/vetorcadastrarocorrencia.jpg" class="img-rounded" alt="cadastro-material" width="304" height="236">
        <div class="caption">
        <h3 align="center">        VTRS BM4 </h3>
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

