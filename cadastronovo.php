<!DOCTYPE html>
<html>
<head>
  <title>cadastro material operacional</title>

    <!--login -->



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
     
      <li><a href="http://copbm4-com-br.umbler.net/logout.php "><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>



<div class="container">


   <h2 class="text-danger" align="center"> Cadastro de Novo Material  </h2> 
  
  
</div>

<form action="cadastro.php" method="post">
  <div class="container">
   
    <div class="row">
      <div class="col-lg-4">
        <div class="input-group">
            <span class="input-group-addon">Material</span>
              <select class="form-control" data-live-search="true" name="material">
                <option data-tokens="Capacete" value="Capacete">Capacete </option>
                 <option data-tokens="Luva" value="Luva">Luva</option>
                 <option data-tokens="bala Clava" value="Bala Clava">Bala Clava</option>
              </select>
          </div> 
        </div>
        
        <div class="col-lg-4">
          <div class="input-group">
            
                <span class="input-group-addon" id="inputGroup-sizing-default">R. Patrimônial</span>
            
               <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="rp">
          </div>
        
        </div>
        <div class="col-lg-4">
          <div class="input-group">
            <span class="input-group-addon"  id="inputGroup-sizing-default" >N. Série</span>
            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="nserie">
          </div>
        </div>

      </div>
    
   <br>
  
  
    <div class="row">
      <div class="col-lg-4">
        <div class="input-group"> 
          <span class="input-group-addon">Situação</span>
            <select class="form-control" data-live-search="true" name="situacao">
              <option data-tokens="operacional" value="Operacional">Operacional</option>
              <option data-tokens="Inoperante" value="Inoperante">Inoperante</option>
            </select>
     
        </div>
      </div>
    </div>
    <br>
 

<!--
    <div class="row">
      <div class="col-lg-8">
        <div class="input-group">
          <span class="input-group-addon"> Ocorrência</span>
            <input type="text" class="form-control"  placeholder="Caso Inoperante, digite a Ocorrência" name="ocorrencia" >
        </div>
      </div>
    </div>   
-->

    <div class="row">
      <div class="col-lg-4">
        <p>
          <a class="btn btn-default" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" name="ubm">
   
        Regitrar Ocorrência.
        </a>
  
        </p>
      <div class="collapse" id="collapseExample">
        <div class="input-group">
          <span class="input-group-addon"> Ocorrência</span>
            <input type="text" class="form-control"  placeholder="Digite a Ocorrência" name="ocorrencia" >
      </div>
      </div>
        </div>



    </div>
<br>
    <div class="col-lg-8">
   <button type="submit" class="btn btn-default">Enviar</button>
    </div>
   
   </div>
</form>



</body>
</html>
