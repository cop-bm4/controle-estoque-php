<!DOCTYPE html>
	<html>




		<head>
			<title>Relatorio VTRS</title>

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

			<?php
			require 'db.php';
			require 'credenciais.php';
			?>

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
	


	   </body>





</html>