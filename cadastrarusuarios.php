<!DOCTYPE html>
<html>
<head>
	<title>Cdastrar Novo usuário</title>
<?php require "credenciais.php"; 
		require "db.php";
?>


	
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
<h2>Cadastro de novo usuário.</h2>
<form method="post" class="input-group" action="#" id="formlogin" name="formlogin">

 <div class="input-group input-group-lg">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="login" type="text" class="form-control" name="login" placeholder="login" required>
  </div>
  <p class="form-text text-muted">Digite o Login.</p>
  <br>

 <div class="input-group input-group-lg">
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
<option data-tokens="CFAE" value="CFAE">  CFAE  </option>    
<option data-tokens="BM4" value="BM4">BM4</option>
            
         </select>
        </div>
      <p class="form-text text-muted">Escolha a UBM.</p>
        



  <div class="input-group input-group-lg">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="senha" type="password" class="form-control" name="senha" placeholder="senha" required>
  </div>
  <p class="form-text text-muted">Digite a Senha.</p>
  <br>
   <div class="input-group input-group-lg">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="senha" type="password" class="form-control" name="senha2" placeholder="Repita a Senha" required>
  </div>
  <p class="form-text text-muted">Repita a Senha.</p>
  <br>
<div class="row">
	<div class="col-lg-4">
		<input name="btt" type="submit" class="btn  btn-lg" value="Cadastrar"  />

		
	</div>
	<div class="col-lg-6">
		<a  href="masterhome.php" button type="button" class="btn btn-default btn-lg" >	Voltar</a>
	</div>
		
</div>
  
  
</form>



<?php

if (isset($_POST['btt'])) {
	


if ($_POST['senha']==$_POST['senha2']) {
	$senha=$_POST['senha'];
	$login=$_POST['login'];
	$ubm=$_POST['ubm'];

$sql = "INSERT INTO materialoperacional(ubm, login, senha ) VALUES ( '$ubm', '$login', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro Realizado com sucesso.";
    

   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "Não foi possível realizar o cadastro. Por favor, tente novamente.";
}

$conn->close();





}
else{
	echo "As senhas não conferem, por favor tente novamente.";
}
}



?>


</div>

	





</body>
</html>