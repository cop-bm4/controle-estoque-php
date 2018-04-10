<!DOCTYPE html>
<html>
<head>
	<title>Relatórios de VTR'S</title>


	<?php
	require 'db.php';
	require 'credenciais.php';
$ubmss = $_SESSION['ubm'];
	?>
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
        <a class="navbar-brand" href="#"> SISCOMP </a>
      </div>
      <ul class="nav navbar-nav">
        <li ><a href="http://copbm4cbmpa-com-br.umbler.net/home.php">Home</a></li>
        <li  class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="http://copbm4cbmpa-com-br.umbler.net/cadastro-material.php">Registro</a>
          <ul class="dropdown-menu">
            <li><a href="http://copbm4cbmpa-com-br.umbler.net/cadastro-material.php" >Material</a></li>
    <li><a href="http://copbm4cbmpa-com-br.umbler.net/cadastro-vtrs.php">VTRS</a></li>
                    <li><a href="http://copbm4cbmpa-com-br.umbler.net/cadastro-embarcacoes.php">Embarcações</a></li>
          </ul>
        </li>
        
  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" > <span class="cared">Relatórios</span></a>
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






<div class="container">

<table class="table table-bordered">
				 <thead>
                      <tr>
                    
                        <th>VIATURA</th>
                        <th>SITUAÇÃO</th>
                        <th>DEFEITO</th>
                        
                      </tr>

                    </thead>
                    <tbody>
                    <?php

                    $sql = "SELECT prefixo, situacao, placa, ubm, defeito FROM materialoperacional WHERE ubm='$ubmss' and prefixo!='' and material='' ";
					           $result= mysqli_query($conn, $sql);
					
					             $n= mysqli_num_rows($result);
                    ?>

                    <?php while ($row = mysqli_fetch_assoc($result)):  ?> 

                    <tr>
                
                    	<th><?php  echo $row['prefixo']; ?></th>
                    	<th><?php echo $row['situacao']; ?></th>
                      <th><?php echo $row['defeito'] ?></th>

                    </tr>	
                    	

                   <?php endwhile; ?>
                   </tbody>

				</table>
    Total: <?php echo $n; ?>

</div>

</body>

</html>