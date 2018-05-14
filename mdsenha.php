;<!DOCTYPE html>
<html>
<head>
	<title>Mudar Senha</title>
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
      <a class="navbar-brand" href="http://bm4cop-org.umbler.net/"> SISCOMP/bm4 </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active" ><a href="http://bm4cop-org.umbler.net/home.php">Home</a></li>
     
     	<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="http://bm4cop-org.umbler.net/cadastro-material.php">Registro<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://bm4cop-org.umbler.net/cadastro-material.php">Material</a></li>
        <li><a href="http://bm4cop-org.umbler.net/cadastro-vtrs.php">VTRS</a></li>
                  <li><a href="http://bm4cop-org.umbler.net/cadastro-embarcacoes.php">Embarcações</a></li>
        </ul>
      </li>



  


            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Relatórios</a>
                <ul class="dropdown-menu">
                <li><a href="http://bm4cop-org.umbler.net/relatorios.php"> Material</a></li>
                <li><a href="http://bm4cop-org.umbler.net/relatoriosvtrs.php">Vtr's</a></li>
                <li><a href="http://bm4cop-org.umbler.net/relatoriosembarcacoes.php">Embarcações</a></li>
                </ul>
              </li>  

    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="http://bm4cop-org.umbler.net/logout.php "><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div> 
</nav>

<div class="container">
<h2>Mudar Senha.</h2>
<form method="post" class="input-group" action="#" id="formlogin" name="formlogin">

  <div class="input-group input-group-lg">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="senha" type="password" class="form-control" name="senha" placeholder="senha" required>
  </div>
  <p class="form-text text-muted">Digite a  Nova Senha.</p>
  <br>
   <div class="input-group input-group-lg">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="senha" type="password" class="form-control" name="senha2" placeholder="Repita a Senha" required>
  </div>
  <p class="form-text text-muted">Repita a Senha.</p>
  <br>
<div class="row">
	<div class="col-lg-4">
		<input name="btt" type="submit" class="btn  btn-lg" value="Atualizar"  />

		
	</div>
	<div class="col-lg-6">
		<a  href="home.php" button type="button" class="btn btn-default btn-lg" >	Voltar</a>
	</div>
		
</div>
  
  
</form>



<?php

if (isset($_POST['btt'])) {
	


if ($_POST['senha']==$_POST['senha2']) {
	$senha=$_POST['senha'];
	$login=$_SESSION['login'];
	

$sql = " UPDATE materialoperacional SET senha='$senha'  WHERE login='$login'";

if ($conn->query($sql) === TRUE) {
    echo "Senha atualizada com sucesso.";
    

   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "Não foi possível atualziar a senha. Por favor, tente novamente.";
}

$conn->close();





}
else{
	echo "As senhas não conferem, por favor tente novamente.";
}
}



?>
</div>







<div class="footer">
  <p>© 2018 BM4/COP CBM-PA  V.C João Luz </p>
</div>


</body>
</html>