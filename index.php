
<!DOCTYPE html>
<html>
<head>
	<title>Login siscomp</title>
	 <meta charset="utf-8">
  
<!--mod mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!---->
  <!-- include bibliotecas bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!---->

</head>
<body>

<div class="container">
  <div class="jumbotron">
    <h2>SISCOMP</h1> 
    <p class="text-danger">Sistema de controle de material operacional</p> 
  </div>
  


<form method="post" action="validalogin.php" id="formlogin" name="formlogin" >

<fieldset id="fie">

<legend>LOGIN</legend><br />

<label>NOME: </label>

<input type="text" name="login" id="login"  /><br />

<label>SENHA :</label>

<input type="password" name="senha" id="senha" /><br />

<input type="submit" class="btn  btn-lg" value="LOGAR	"  />

</fieldset>

</form>
</body>
</html>

