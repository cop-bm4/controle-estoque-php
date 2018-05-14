<!DOCTYPE html>
<html>
<head>
  <title>cautelas bm4</title>
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
<?php
$id= $_GET['id'];

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
      <li><a href="http://bm4cop-org.umbler.net/mastercadastro-materialbm4.php"> VOLTAR</a></li>
</nav>

<div class="container">
    <form method="post" action="#">
      <div class="row">
      <div class="col-lg-8">
            <div class="input-group">
              <span class="input-group-addon" id="in">Cautela</span>
              <select class="form-control" data-live-search="true" name="cautelado" required>
              

                  <option data-tokens="BM4" value=" Na BM4"> Na BM4</option>   
             <option data-tokens="1 GBM" value="Para o 1 GBM">  1 GBM </option>

<option data-tokens="2 GBM" value="Para o 2 GBM">  2 GBM </option>
<option data-tokens="3 GBM" value="Para o 3 GBM">  3 GBM </option>
<option data-tokens="4 GBM" value="Para o 4 GBM">  4 GBM </option>
<option data-tokens="5 GBM" value="Para o 5 GBM">  5 GBM </option>
<option data-tokens="6 GBM" value="Para o 6 GBM">  6 GBM </option>
<option data-tokens="7 GBM" value="Para o 7 GBM">  7 GBM </option>
<option data-tokens="8 GBM" value="Para o 8 GBM">  8 GBM </option>
<option data-tokens="9 GBM" value="Para o 9 GBM">  9 GBM </option>
<option data-tokens="10 GBM" value="Para o 10 GBM">  10 GBM  </option>
<option data-tokens="11 GBM" value="Para o 11 GBM">  11 GBM  </option>
<option data-tokens="12 GBM" value="Para o 12 GBM">  12 GBM  </option>
<option data-tokens="13 GBM" value="Para o 13 GBM">  13 GBM  </option>
<option data-tokens="14 GBM" value="Para o 14 GBM">  14 GBM  </option>
<option data-tokens="15 GBM" value="Para o 15 GBM">  15 GBM  </option>
<option data-tokens="16 GBM" value="Para o 16 GBM">  16 GBM  </option>
<option data-tokens="17 GBM" value="Para o 17 GBM">  17 GBM  </option>
<option data-tokens="18 GBM" value="Para o 18 GBM">  18 GBM  </option>
<option data-tokens="19 GBM" value="Para o 19 GBM">  19 GBM  </option>
<option data-tokens="20 GBM" value="Para o 20 GBM">  20 GBM  </option>
<option data-tokens="21 GBM" value="Para o 21 GBM">  21 GBM  </option>
<option data-tokens="22 GBM" value="Para o 22 GBM">  22 GBM  </option>
<option data-tokens="23 GBM" value="Para o 23 GBM">  23 GBM  </option>
<option data-tokens="24 GBM" value="Para o 24 GBM">  24 GBM  </option>
<option data-tokens="25 GBM" value="Para o 25 GBM">  25 GBM  </option>
<option data-tokens="26 GBM" value="Para o 26 GBM">  26 GBM  </option>
<option data-tokens="27 GBM" value="Para o 27 GBM">  27 GBM  </option>
<option data-tokens="28 GBM" value="Para o 28 GBM">  28 GBM  </option>
<option data-tokens="29 GBM" value="Para o 29 GBM">  29 GBM  </option>
<option data-tokens="30 GBM" value="Para o 30 GBM">  30 GBM  </option>
<option data-tokens="1 GPA" value="Para o 1 GPA">  1 GPA </option>
<option data-tokens="1 GBS" value="Para o 1 GBS">  1 GBS </option>
<option data-tokens="1 GMAF" value="Para o 1 GMAF">  1 GMAF  </option>
  <option data-tokens="CFAE" value="Para o CFAE">  CFAE  </option> 
               
              </select>
            </div>
            <p class="form-text text-muted">Escolha a UBM.</p>
          </div>
          </div>
          <div class="row">

               <div class="col-lg-8">
        <div class="input-group">
            
                <span class="input-group-addon" id="inputGroup-sizing-default">Responsável</span>
            
               <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Nome" name="cautela" required>
             
          </div>
              <p id="passwordHelpBlock" class="form-text text-muted">
            Digite o seu Nome Completo.
           </p>

      </div>
</div>
  <div class="row">
      <div class="col-lg-2" >
        <button type="submit" class="btn btn-default btn-lg">Atualizar</button>
      </div>

      <div class="col-lg-2">
      <a href="http://bm4cop-org.umbler.net/mastercadastro-materialbm4.php" class="btn btn-default btn-lg active" role="button" aria-pressed="true">Voltar</a>
      </div>
    </div>
    </form>
</div>
<div class="container">
<?php

 if(isset($_POST['cautela'])){

$cautelado = $_POST['cautelado'];
$cautela =  $_POST['cautela'];



$sql= "UPDATE materialoperacional SET cautela='$cautela', cautelado='$cautelado' WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "Atualização feita com sucesso";
    
    
    
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


}

?>
</div>

</body>
</html>