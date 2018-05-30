<!DOCTYPE html>
<html>
<head>
	<title>login MRM</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="http://bm4cop-org.umbler.net/mrm/mrm.php">MRM</a>
  <ul>
    <li><a href="http://bm4cop-org.umbler.net/mrm/login.php" class="text-white">Login</a></li>
  </ul>
</nav>


<div class="jumbotron text-center">
  <h1>BM4</h1>
  <h2>Mapa de Registro de Missão.</h2>
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

  </div>
</form>





<div class="footer">
  <p>© 2018 BM4/COP   </p>
</div>
</body>
</html>