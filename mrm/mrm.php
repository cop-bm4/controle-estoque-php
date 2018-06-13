<!DOCTYPE html>
<html>
<head>
  
	<title>MRM</title>
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
   color: black;
   text-align: center;
   font-size: 12px;
}

.spanborder> div{
  background-color:#eee;
   border: 5px solid #888;
   border-radius:50px;

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
  <!-- contador de vetor -->
    <?php 
    require 'db.php';
    
    $sql = "SELECT * FROM missao WHERE situacao= 'aberto' ORDER BY cod_missao DESC";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
     ?>

<?php if ($count>0): ?>

   <?php while ($row=mysqli_fetch_assoc($result)): ?> 
      <div class="row">
  
  
          <div class="col-sm-12">
            <div class="alert alert-dark" role="alert">
              <h3 class="alert-heading">Evento:  <small> <?php echo " ".$row['evento'];?> </small> </h3>
              <p class="font-weight-bold">Data/hora: <small class="text-info"> <?php echo " ".$row['dat']; ?> </small> </p> 
              <p class="font-weight-bold">Origem:<small> <?php echo " ".$row['localizacao']; ?> </small></p> 
              <p class="font-weight-bold">Destino: <small> <?php echo " ".$row['destino']; ?> </small> </p> 
              <p class="font-weight-bold">Vtr:
                <small> 
                <?php
                $n_viatura = $row['cod_viatura'];  

                $sql_vtr = "SELECT prefixo FROM viaturas WHERE cod_viatura='$n_viatura'"; 
                $result_vtr=mysqli_query($conn, $sql_vtr);
                $row_vtr=mysqli_fetch_assoc($result_vtr);
                echo " ".$row_vtr['prefixo'];
                
                 ?>
                </small>
               </p> 
              <p class="font-weight-bold">Condutor:
                <small>
                  <?php
                $n_militar_condutor = $row['cod_militar_condutor'];   
                $sql_militar = "SELECT nome,graduacao,cod_militar FROM militar WHERE cod_militar='$n_militar_condutor'"; 
                $result_militar=mysqli_query($conn, $sql_militar);
                $row_militar=mysqli_fetch_assoc($result_militar);
                echo " ".$row_militar['graduacao']." ".$row_militar['nome'];
                
                 ?>
                </small> 
              </p> 
                 <p class="font-weight-bold">Auxiliar:
                <small>
                  <?php
                $n_militar_auxiliar = $row['cod_militar_auxiliar'];   
                $sql_militar_auxiliar = "SELECT nome,graduacao,cod_militar FROM militar WHERE cod_militar='$n_militar_auxiliar'"; 
                $result_militar_auxiliar=mysqli_query($conn, $sql_militar_auxiliar);
                $row_militar_auxiliar=mysqli_fetch_assoc($result_militar_auxiliar);
                echo " ".$row_militar_auxiliar['graduacao']." ".$row_militar_auxiliar['nome'];
                
                 ?>
                </small> 
              </p> 
              <p class="font-weight-bold">Solicitante:<small><?php echo " ".$row['solicitante']; ?></small> </p> 
              <p class="font-weight-bold">Telefone do Solicitante:<small><?php echo " ".$row['telefone']; ?></small> </p> 
              <p class="font-weight-bold">Observações:<small><?php echo " ".$row['observavao']; ?></small> </p> 
                 <p class="font-weight-bold">Referencia:<small><?php echo " ".$row['referencia']; ?></small> </p> 
            </div>
          </div>
    </div>
<?php endwhile; ?>
<?php endif; ?>
</div>


<!--

<div class="footer">
  <p>© 2018 BM4/COP CBM-PA    V.C João Luz </p>
</div>
-->
<?php
require 'footer.php';
?>
</body>

</html>