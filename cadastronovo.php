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
<div class="jumbotron">
<h1>SISCOMP</h1> 
    <p class="text-danger">Cadastro de Material Operacional </p> 
  </div>
  
</div>

<form action="cadastro.php" method="post">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="input-group">
          <span class="input-group-addon">Material</span>
            <input id="msg" type="text" class="form-control" name="material" placeholder="Nome">
          </div>
          
          <div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="selec">Material</label>
              </div>
              <select class="custom-select" data-live-search="true" name="teste" id="selec">
                <option data-tokens="hotdog" value="hot Dog">Hot Dog, Fries and a Soda</option>
                 <option data-tokens="mustard" value="Burger">Burger, Shake and a Smile</option>
                 <option data-tokens="frosting" value="Sugar">Sugar, Spice and all things nice</option>
              </select>

               </div> 


          </div>
      </div>
    </div>
  </div>
</form>



</body>
</html>
