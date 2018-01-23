<!DOCTYPE html>
<html>
<head>
  <title>Atualizar</title>
  <?php 
require "credenciais.php";
$id = $_GET['id'];

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

<?php 
$sql ="SELECT  id, prefixo, placa, renavam, chassi, modelo, origem, ano_fab, licenciamento, ubm FROM materialoperacional WHERE id=$id ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>
<div class="container">
  <h2 class=" text-danger " align="center"> Cadastro de Nova VTR</h2>
 </div>


<form method="post" action="#" id="needs-validation">
  <div class="container">
  <div class="p-3 mb-2 bg-info text-white"> <h3>1- Cadastro VTR </h3></div>
  </div>

  <div class="container">
    
    <div class="row">
       

      <div class="col-lg-3">
        <div class="input-group">
          <span class="input-group-addon" id="inputGroup-sizing-default">Prefixo</span>
          <input type="text" name="prefixo" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['prefixo'] ?>" disabled>
        </div>
         <p class="form-text text-muted">Digite o Prefixo.</p>
    </div>
  
      <div class="col-lg-3">
        <div class="input-group">
          <span class="input-group-addon" id="inputGroup-sizing-default">Placa</span>
          <input type="text" name="placa" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['placa'] ?>" disabled>
        </div>  
        <p class="form-text text-muted">Digite a Placa.</p>
      </div>

      <div class="col-lg-4">
        <div class="input-group">
          <span class="input-group-addon" id="inputGroup-sizing-default">Renavam</span>
          <input type="text" name="renavam" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['renavam'] ?>" disabled>
        </div>
        <p class="form-text text-muted"> Digite o Renavam</p>
      </div>

  </div>
  <br>

  <div class="row">

       <div class="col-lg-2">
        <div class="input-group">
          <span class="input-group-addon" id="inputGroup-sizing-default">Ano/Fab</span>
          <input type="text" name="ano_fab" class="form-control" arial-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['ano_fab'] ?>" disabled>
        </div>
        <p class="form-text text-muted">Ano de Fabricação.</p>
      </div>
  
    <div class="col-lg-3">
      <div class="input-group">
        <span class="input-group-addon" id="inputGroup-sizing-default"> Chassi</span>
        <input type="text" name="chassi" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['chassi'] ?>" disabled>
        
      </div>
      <p class="form-text text-muted">Dgite o Chassi.</p>
    </div>

    
      

      <div class="col-lg-3">
        <div class="input-group">
          <span class="input-group-addon" id="inputGroup-sizing-default">Origem</span>
          <input type="text" name="origem" class="form-control" arial-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['origem'] ?>" disabled>
        </div>
        <p class="form-text text-muted">Digite a Origem</p>
      </div>


      <div class="col-lg-4">
        <div class="input-group">
          <span class="input-group-addon" id="inputGroup-sizing-default">Modelo</span>
          <input type="text" name="modelo" class="form-control" arial-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['modelo'] ?>" disabled>
          
        </div>
        <p class="form-text text-muted">Digite o Modelo.</p>
      </div>

      
    
  </div>
  <br>

  <div class="row">
    <div class="col-lg-3">
      <div class="input-group">
        <span class="input-group-addon" id="inputGroup-sizing-default">Licenciamento</span>
        <input type="text" name="licenciamento" class="form-control" arial-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $row['licenciamento']?>" disabled>
        
      </div>
      <p class="form-text text-muted">Digite o Ano de Licenciamento </p>
    </div>
  </div>
  <div class="row">
      <div class="col-lg-4">
        <div class="input-group"> 
          <span class="input-group-addon">Situação</span>
            <select class="form-control" data-live-search="true" name="situacao" required>
              <option data-tokens="operacional" value="Operante">Operante</option>
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
          <a class="btn btn-default" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" >
   
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
            <textarea class="form-control" rows="5" id="Defeito" placeholder=" Digite o Defeito" name="defeito"></textarea>
          </div>
        </div>
      </div>
     </div>
     <br>
     <div class="row">
      <div class="col-lg-6">
        <p>
          <a class="btn btn-default" data-toggle="collapse" href="#collapseobservacoes" role="button" aria-expanded="false" aria-controls="collapseobservacoes">
            Registrar observações.
          </a>
        </p>
      </div>  
     </div>
     

     <div class="collapse" id="collapseobservacoes">
     <div class="row">
             <div class="col-lg-6">
        <div class="input-group">
          <span class="input-group-addon">Observações</span>
       
          <textarea class="form-control" rows="4" placeholder="Digite observações, se houver." name="observacoes" ></textarea>
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
            
               <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Nome" name="nome" required>
             
          </div>
              <p id="passwordHelpBlock" class="form-text text-muted">
            Digite o seu Nome Completo.
           </p>
      </div>
      
      <div class="col-lg-4">
         <div class="input-group">
            
                <span class="input-group-addon" id="inputGroup-sizing-default">RG</span>
            
               <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="rg" name="rg" required="">
          </div>
            <p id="passwordHelpBlock" class="form-text text-muted">
            Digite o seu RG.
           </p>
      </div>
   
      <div class="col-lg-4">
         <div class="input-group">
            
                <span class="input-group-addon" id="inputGroup-sizing-default">Cargo</span>
            
               <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="cargo" required="Informe seu cargo">
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
        <button type="submit" class="btn btn-default btn-lg" name="btt">Enviar</button>
      </div>
      <div class="col-lg-1">
      <a href="http://copbm4cbmpa-com-br.umbler.net/cadastro-vtrs.php" class="btn btn-default btn-lg active" role="button" aria-pressed="true">Voltar</a>
      </div>
    </div>
   
   </div>






  </div>



</form>



<div class="container">
  <div class="row">
    <div class="col-lg-5">
      <?php

 if(isset($_POST['btt'])){

$nome = $_POST['nome'];
$ocorrencia =$_POST['ocorrencia'];

$situacao = $_POST['situacao'];
$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cargo = $_POST['cargo'];
$defeito = $_POST['defeito'];
$observacoes= $_POST['observacoes'];

$marca=$_POST['marca'];

$prefixo=$_POST['prefixo'];
$placa=$_POST['placa'];
$renavam=$_POST['renavam'];
$chassi=$_POST['chassi'];
$modelo=$_POST['modelo'];
$origem=$_POST['origem'];
$ano_fab=$_POST['licenciamento'];





$sql = " UPDATE materialoperacional SET nome='$nome', rg='$rg',  situacao='$situacao', ocorrencia='$ocorrencia', cargo='$cargo', defeito='$defeito', observacoes='$observacoes'  WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Atualização feita com sucesso";

    
    
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
  }



?>

    </div>
  </div>
</div>


<div class="footer">
  <p>© 2018 BM4/COP  CBM-PA V.C João Luz </p>
</div>


</body>
</html>