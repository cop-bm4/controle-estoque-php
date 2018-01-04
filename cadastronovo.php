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

 
<form action="cadastro.php" method="post" id="needs-validation" novalidate>
 <div class="container">
  <div class="p-3 mb-2 bg-info text-white"> <h3>1- Cadastro Material </h3></div>
  </div>
  <br>
  <div class="container">
  
    <div class="row">
      <div class="col-lg-4">
        <div class="input-group">
            <span class="input-group-addon">Material</span>
              <select class="form-control" data-live-search="true" name="material" required>
                <option data-tokens="Capacete" value="Capacete">Capacete </option>
                 <option data-tokens="Luva" value="Luva">Luva</option>
                 <option data-tokens="bala Clava" value="Bala Clava">Bala Clava</option>
              </select>
          </div> 
           <p id="passwordHelpBlock" class="form-text text-muted">
           Escolha o Material.</p>
        </div>
        
        <div class="col-lg-4">
          <div class="input-group">
            
                <span class="input-group-addon" id="inputGroup-sizing-default">R. Patrimônial</span>
            
               <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="rp">
          </div>
            <p id="passwordHelpBlock" class="form-text text-muted">
            Digite o número de R. Patrimônial do Material.
           </p>
        </div>
        <div class="col-lg-4">
          <div class="input-group">
            <span class="input-group-addon"  id="inputGroup-sizing-default" >N. Série</span>
            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="nserie" required>
            <div class="invalid-feedback">
          Please choose a username.
        </div>
          </div>
            <p id="passwordHelpBlock" class="form-text text-muted">
            Digite o Número de Série do Material .
           </p>
        
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
        <p id="passwordHelpBlock" class="form-text text-muted">
            Caso Inoperante, Clique para Registrar a Ocorrência.
          </p>
      </div>
    </div>
    <br>
 



    <div class="row">
      
     

      <div class="col-lg-6">
        <p>
          <a class="btn btn-default" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" name="ubm">
   
        Regitrar Ocorrência.
        </a>
    
        </p>
      </div>
    </div>
<div class="collapse" id="collapseExample">
    <div class="row">
       <div class="col-lg-6">   
      
        
        <div class="input-group">
          <span class="input-group-addon"> Ocorrência</span>
           <!-- <input type="text" class="form-control"  placeholder="Digite a Ocorrência" name="ocorrencia" > -->
            <textarea class="form-control" rows="5" id="comment" placeholder="Digite a Ocorrência" name="ocorrencia"></textarea>
        </div>
        </div>
        

        <div class="col-lg-6">
          
          <div class="input-group">
            <span class="input-group-addon"> Defeito</span>
            <textarea class="form-control" rows="5" id="Defeito" placeholder="Digite o Defeito" name="defeito"> </textarea>
          </div>
        </div>
      </div>
     </div>

    <div class="container">
      <div class="p-3 mb-2 bg-info text-white"> <h3>2 - Responsável pelo Preenchimento </h3></div>
    </div>
    <br>
    <div class="row">
      
      <div class="col-lg-4">
        <div class="input-group">
            
                <span class="input-group-addon" id="inputGroup-sizing-default">Nome</span>
            
               <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="João Victor" name="nome">
             
          </div>
              <p id="passwordHelpBlock" class="form-text text-muted">
            Digite o seu Nome Completo.
           </p>
      </div>
      
      <div class="col-lg-4">
         <div class="input-group">
            
                <span class="input-group-addon" id="inputGroup-sizing-default">RG</span>
            
               <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="rg">
          </div>
            <p id="passwordHelpBlock" class="form-text text-muted">
            Digite o seu RG.
           </p>
      </div>
   
      <div class="col-lg-4">
         <div class="input-group">
            
                <span class="input-group-addon" id="inputGroup-sizing-default">Cargo</span>
            
               <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="cargo">
        </div>
            <p id="passwordHelpBlock" class="form-text text-muted">
            Digite o seu Cargo.
           </p>
      </div>
    
    </div>

    <br>
<br>
<br>
    <div class="row">
      <div class="col-lg-1" >
        <button type="submit" class="btn btn-default btn-lg">Enviar</button>
      </div>
      <div class="col-lg-1">
      <a href="http://copbm4-com-br.umbler.net/cadastro-material.php" class="btn btn-default btn-lg active" role="button" aria-pressed="true">Voltar</a>
      </div>
    </div>
   
   </div>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';

  window.addEventListener('load', function() {
    var form = document.getElementById('needs-validation');
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  }, false);
})();
</script>

</body>
</html>
