<!DOCTYPE html>
<html>
<head>

<?php
require 'credenciais.php';
require 'db.php';
$id = $_GET['id'];


?>

	<title>Atualizar</title>
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


</head>
<body>


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


<?php
$sql = "SELECT id, ubm, material, rp, nserie, situacao, ocorrencia, nome, rg, defeito, reg_date, cargo,marca, observacoes FROM materialoperacional where id=$id ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<form action="#" method="post" name="att">
 <div class="container">
  <div class="p-3 mb-2 bg-info text-white"> <h3>1- Atualizar Material </h3></div>
  </div>
  <br>
  <div class="container">
 
    <div class="row">
      <div class="col-lg-4">
        <div class="input-group">
            <span class="input-group-addon">Material</span>
              <input type="text" class="form-control" name="material" value="<?php echo $row['material'] ?> "  disabled>
          </div> 
           <p id="passwordHelpBlock" class="form-text text-muted">
            Material.</p>
        </div>
        
        <div class="col-lg-4">
          
          <div class="input-group">
            
                <span class="input-group-addon" id="inputGroup-sizing-default">R. Patrimônial</span>
            
               <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="rp" value="<?php echo $row['rp']; ?>" >
          </div>
            
        </div>
        <div class="col-lg-4">
          <div class="input-group">
            <span class="input-group-addon"  id="inputGroup-sizing-default" >N. Série</span>
            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="nserie" value="<?php echo $row['nserie']; ?>" id="validationCustom01" >
           
          </div>
            
        
        </div>

      </div>
    <div class="row">
       <div class="col-lg-4">
         <div class="input-group">
           <span class="input-group-addon">Marca</span>
           <input type="text"  class="form-control" arial-label="Default" aria-describelby="inputGroup-sizing-default" name="marca" value="<?php echo $row['marca'] ?>" >
         </div>
   
       </div> 
  
      </div>
      	
  <br>
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
            <textarea  class="form-control" rows="5" id="comment" placeholder="Digite a Ocorrência" name="ocorrencia" value="<?php echo $row['ocorrencia']; ?>  "></textarea>
         </div>
        </div>
        

        <div class="col-lg-6">
          
          <div class="input-group">
            <span class="input-group-addon"> Defeito</span>
            <textarea class="form-control" rows="5" id="Defeito" placeholder=" Digite o Defeito" name="defeito" value="<?php echo $row['defeito']; ?>"></textarea>
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
            
               <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="cargo" required="">
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
      <div class="col-lg-2" >
        <button type="submit" class="btn btn-default btn-lg">Atualizar</button>
      </div>
      <div class="col-lg-1">
      <a href="http://copbm4cbmpa-com-br.umbler.net/cadastro-material.php" class="btn btn-default btn-lg active" role="button" aria-pressed="true">Voltar</a>
      </div>
    </div>
   
   </div>
</form>
<div class="container">
	<div class="row">
		<div class="col-lg-5">
			<?php

 if(isset($_POST['rp'])){

$nome = $_POST['nome'];
$ocorrencia =$_POST['ocorrencia'];
$rp = $_POST['rp'];
$nserie = $_POST['nserie'];
$situacao = $_POST['situacao'];
$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cargo = $_POST['cargo'];
$defeito = $_POST['defeito'];
$observacoes= $_POST['observacoes'];
$marca=$_POST['marca'];

$sql = " UPDATE materialoperacional SET nome='$nome', rg='$rg', rp='$rp', nserie='$nserie', situacao='$situacao', ocorrencia='$ocorrencia', cargo='$cargo', defeito='$defeito', marca='$marca', observacoes='$observacoes' WHERE id='$id'";

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