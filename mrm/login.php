<!DOCTYPE html>
<html>
<head>
	<title>login MRM</title>
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
   background-color: black;
   color: white;
   text-align: center;
}
</style>


</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://bm4cop-org.umbler.net/mrm/mrm.php"> MRM </a>
    </div>
    <ul class="nav navbar-nav">
     
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
    </ul>
  </div>
</nav>

<div class="container">
  <div class="jumbotron">
    <h1>MRM</h1> 
    <p class="text-danger">Mapa de Registro de Missões</p> 

  </div>
</div>


  
<div class="container">
	<form method="post" class="input-group" action="validalogin.php" id="formlogin" name="formlogin">

 		<div class="input-group input-group-lg">
    		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    			<input id="login" type="text" class="form-control" name="login" placeholder="login">
  		</div>
  		
  		<div class="input-group input-group-lg">
    		<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    			<input id="senha" type="password" class="form-control" name="senha" placeholder="senha">
  		</div>
  
 		 <input type="submit" class="btn  btn-lg" value="LOGAR "  />
	</form>

</div>








<div class="footer">
  <p>© 2018 BM4/COP   </p>
</div>
</body>
</html>