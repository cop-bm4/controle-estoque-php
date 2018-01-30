<!DOCTYPE html>
<html>
<head>
	<title>Atualização de Embarcações</title>
	 <!--login -->
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
<?php 
$id = $_GET['id'];


?>
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

$sql = "SELECT embarcacao, casco, motor, situacao, ocorrencia, defeito, observacoes FROM materialoperacional WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="container">
   <div class="container">
  <div class="p-3 mb-2 bg-info text-white"> <h3>1- Atualizar Embarcação </h3></div>
  </div>
		<form method="post" action="#" id="needs-validation" enctype="multipart/form-data">
			<div class="row">

		<!-- <div class="col-lg-3">
            <div class="input-group">
              	<span class="input-group-addon" id="in">UBM</span>
              <select class="form-control" data-live-search="true" name="ubm" required>
              
<option data-tokens="1 GBM" value="1 GBM">  1 GBM </option>
<option data-tokens="2 GBM" value="2 GBM">  2 GBM </option>
<option data-tokens="3 GBM" value="3 GBM">  3 GBM </option>
<option data-tokens="4 GBM" value="4 GBM">  4 GBM </option>
<option data-tokens="5 GBM" value="5 GBM">  5 GBM </option>
<option data-tokens="6 GBM" value="6 GBM">  6 GBM </option>
<option data-tokens="7 GBM" value="7 GBM">  7 GBM </option>
<option data-tokens="8 GBM" value="8 GBM">  8 GBM </option>
<option data-tokens="9 GBM" value="9 GBM">  9 GBM </option>
<option data-tokens="10 GBM" value="10 GBM">  10 GBM  </option>
<option data-tokens="11 GBM" value="11 GBM">  11 GBM  </option>
<option data-tokens="12 GBM" value="12 GBM">  12 GBM  </option>
<option data-tokens="13 GBM" value="13 GBM">  13 GBM  </option>
<option data-tokens="14 GBM" value="14 GBM">  14 GBM  </option>
<option data-tokens="15 GBM" value="15 GBM">  15 GBM  </option>
<option data-tokens="16 GBM" value="16 GBM">  16 GBM  </option>
<option data-tokens="17 GBM" value="17 GBM">  17 GBM  </option>
<option data-tokens="18 GBM" value="18 GBM">  18 GBM  </option>
<option data-tokens="19 GBM" value="19 GBM">  19 GBM  </option>
<option data-tokens="20 GBM" value="20 GBM">  20 GBM  </option>
<option data-tokens="21 GBM" value="21 GBM">  21 GBM  </option>
<option data-tokens="22 GBM" value="22 GBM">  22 GBM  </option>
<option data-tokens="23 GBM" value="23 GBM">  23 GBM  </option>
<option data-tokens="24 GBM" value="24 GBM">  24 GBM  </option>
<option data-tokens="25 GBM" value="25 GBM">  25 GBM  </option>
<option data-tokens="26 GBM" value="26 GBM">  26 GBM  </option>
<option data-tokens="27 GBM" value="27 GBM">  27 GBM  </option>
<option data-tokens="28 GBM" value="28 GBM">  28 GBM  </option>
<option data-tokens="29 GBM" value="29 GBM">  29 GBM  </option>
<option data-tokens="30 GBM" value="30 GBM">  30 GBM  </option>
<option data-tokens="1 GPA" value="1 GPA">  1 GPA </option>
<option data-tokens="1 GBS" value="1 GBS">  1 GBS </option>
<option data-tokens="1 GMAF" value="1 GMAF">  1 GMAF  </option>
                 
              </select>
            </div>
            <p class="form-text text-muted">Escolha a UBM.</p>
          </div> -->
         <div class="col-lg-4">
         	<div class="input-group">
         		<span class="input-group-addon">Embarcação</span>
         		<input type="text" name="embarcacoes" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Embarcação" required value="<?php echo $row['embarcacao']; ?>" disabled>
         	</div>
			<p class="form-text text-muted">Digite a Embarcação.</p>         	
         </div>

         <div class="col-lg-4">
         	<div class="input-group">
         		<span class="input-group-addon">Casco</span>
         		<input type="text" name="casco" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Casco" value="<?php echo $row['casco']; ?>"  required disabled>
         		
         	</div>
         	<p class="form-text text-muted">Digite o Casco</p>
         </div> 

	</div>

	<div class="row">
		<div class="col-lg-8">
			<div class="input-group">
				<span class="input-group-addon">Motor - Marca/Potência</span>
				<input type="text" name="motor" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Motor" value="<?php echo $row['motor'] ?>" disabled>
				
			</div>
			<p class="form-text text-muted">Digite o Motor - Marca/Potência.</p>
			
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
     <br>
      <div class="row">
        <div class="col-lg-5">
          <div class="input-group">
            <span class="input-group-addon">Imagens </span>  
            <input class="form-control" type="file" name="imagens">  
          </div>
          <p class="form-text text-muted">Enviar foto atualizada do material.</p>
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
 
    <div class="row">
      <div class="col-lg-1" >
        <button type="submit" class="btn btn-default btn-lg" name="btt">Enviar</button>
      </div>
      <div class="col-lg-1">
      <a href="http://copbm4cbmpa-com-br.umbler.net/mastercadastro-embarcacoes.php" class="btn btn-default btn-lg active" role="button" aria-pressed="true">Voltar</a>
      </div>
    </div>
   
	</div>


</form>


</div>


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

$embarcacao= $_POST['embarcacao'];
$casco = $_POST['casco'];
$motor = $_POST['motor'];



$sql = " UPDATE materialoperacional SET nome='$nome', rg='$rg',  situacao='$situacao', ocorrencia='$ocorrencia', cargo='$cargo', defeito='$defeito', observacoes='$observacoes', casco='$casco', motor='$motor'  WHERE id='$id'";

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


</body>
</html>