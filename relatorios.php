<!DOCTYPE html>
<html>
<head>
  <title>Relatórios</title>
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

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> SISCOMP </a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="http://copbm4cbmpa-com-br.umbler.net/home.php">Home</a></li>
      <li  class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="http://copbm4cbmpa-com-br.umbler.net/cadastro-material.php">Registro</a>
        <ul class="dropdown-menu">
          <li><a href="http://copbm4cbmpa-com-br.umbler.net/cadastro-material.php" >Material</a></li>
          <li><a href="#">VTRS</a></li>
          <li><a href="#">Embarcações</a></li>
        </ul>
      </li>
      
 <li class= "active"><a href="http://copbm4cbmpa-com-br.umbler.net/relatorios.php">Relatórios<span class="caret"></span></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href=" http://copbm4cbmpa-com-br.umbler.net/logout.php "><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>

<?php $ub = $_SESSION['ubm']; 

?>
<div class="container">
  <h2>Faça sua pesquisa</h2>
<form action="#" method="post">
      <div class="row">
        <div class="col-lg-4">
            <div class="input-group">
            <span class="input-group-addon">Material</span>
              <select class="form-control" data-live-search="true" name="material" required>
                <option data-tokens="qualquer" value="qualquer">Qualquer</option>
                <option data-tokens="Capacete" value="Capacete">Capacete </option>

                 <option data-tokens="Luva" value="Luva">Luva</option>
                 <option data-tokens="bala Clava" value="Bala Clava">Bala Clava</option>
              </select>
          </div> 
           <p id="passwordHelpBlock" class="form-text text-muted">
           Escolha o Material.</p>
        </div>
<!--
        <div class="col-lg-3">
          <div class="input-group">
            <span class="input-group-addon">Situação</span>
              <select class="form-control" data-live-search="true" name="situacao">
                
                <option data-tokens="Operante" value="operante">Operante</option>
                <option data-tokens="Inoperante" value="inoperante">Inoperante</option>
              </select>
          </div>
          <p id="passwordHelpBlock" class="form-text text-muted">
           Selecione a Situação.</p>
        </div>
-->       
        <div class="col-lg-3">
          <div class="input-group">
            <span class="input-group-addon">UBM</span>
            <select class="form-control" data-live-search="true" name="ubm">
              <!-- <option data-tokens="qualquer" value="qualquer" >Qualquer</option> -->
              <option data-tokens="1 gbm" value="1 GBM">1º GBM</option>
              <option data-tokens="3 gbm" value="3 GBM">3º GBM</option>
               <option data-tokens="3 gbm" value="4 GBM">4º GBM</option>
              <option data-tokens="30 gbm" value="30 GBM"> 30º GBM</option>
              
            </select>
          </div>
          <p id="passwordHelpBlock" class="form-text text-muted">
           Escolha a UBM.</p>
        </div>
      <div class="col-lg-2">
        <button type="submit" class="btn btn-default ">Pesquisar</button>
      </div>
    </div>
    
</form>
   

   <?php if(isset($_POST['material']) && $_POST['material'] == 'qualquer') : ?>
    <?php 
    $ubm=$_POST['ubm'];
    $situacao=$_POST['situacao'];
    $material=$_POST['material'];


    $total = "SELECT material,situacao,ubm FROM materialoperacional WHERE ubm='$ubm' and material='$material'  ";
    $operantes = "SELECT situacao FROM materialoperacional WHERE ubm='$ubm' and situacao='operante' and material='$material'";
    $inoperantes = "SELECT situacao FROM materialoperacional WHERE ubm='$ubm' and situacao='inoperante' and material='$material' ";
    
    $resultTotal = mysqli_query($conn, $total);
    $countTotal=  mysqli_num_rows($resultTotal);
    
    
    
    $resultOperantes = mysqli_query($conn, $operantes);
    $countOperantes=  mysqli_num_rows($resultOperantes);
    
    
    
    $resultInoperantes = mysqli_query($conn, $inoperantes);
    $countInoperantes=  mysqli_num_rows($resultInoperantes);
    
    ?>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Material</th>
          <th>Qt. Operante</th>
          <th>Qt. Inoperante</th>
          <th>Total</th>>
          <th>UBM</th>
          
        </tr>
      </thead>
     <tbody>
       <tr>
         <td><?php echo $material; ?></td>
         <td><?php echo $countOperantes; ?></td>
         <td><?php  echo $countInoperantes;  ?></td>
         <td><?php echo $countTotal ?></td>
         <td><?php echo $ubm; ?></td>
       </tr>
     </tbody> 




    </table>
  
<?php endif; ?>


  <?php if($material=='qualquer'):?>
  <?php
    $ubm=$_POST['ubm'];
    $situacao=$_POST['situacao'];
    $material=$_POST['material'];


    $total = "SELECT material,situacao,ubm FROM materialoperacional WHERE ubm='$ubm'  ";
    $operantes = "SELECT situacao FROM materialoperacional WHERE ubm='$ubm' and situacao='operante' and material='$material'";
    $inoperantes = "SELECT situacao FROM materialoperacional WHERE ubm='$ubm' and situacao='inoperante' and material='$material'";
    
    $resultTotal = mysqli_query($conn, $total);
    $countTotal=  mysqli_num_rows($resultTotal);
    
    
    
    $resultOperantes = mysqli_query($conn, $operantes);
    $countOperantes=  mysqli_num_rows($resultOperantes);
    
    
    
    $resultInoperantes = mysqli_query($conn, $inoperantes);
    $countInoperantes=  mysqli_num_rows($resultInoperantes);
      
  ?>


    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Material</th>
          <th>Qt. Operante</th>
          <th>Qt. Inoperante</th>
          <th>Total</th>>
          <th>UBM</th>
          
        </tr>
      </thead>
      <tbody>
 <?php while($row = mysqli_fetch_assoc($resultTotal)): ?> 
<?php 
    $operantes = "SELECT situacao FROM materialoperacional WHERE ubm='$ubm' and situacao='operante' and material='$material'";
    $inoperantes = "SELECT situacao FROM materialoperacional WHERE ubm='$ubm' and situacao='inoperante' and material='$material'";
    
    $resultTotal = mysqli_query($conn, $total);
    $countTotal=  mysqli_num_rows($resultTotal);
    
    
    
    $resultOperantes = mysqli_query($conn, $operantes);
    $countOperantes=  mysqli_num_rows($resultOperantes);
    
    
    
    $resultInoperantes = mysqli_query($conn, $inoperantes);
    $countInoperantes=  mysqli_num_rows($resultInoperantes);
    


?>
  <tr>
    
    <td><?php echo $row['material'];?></td>
    <td><?php echo $countOperantes; ?></td>
    <td><?php echo $countInoperantes;?></td>
    <td><?php echo $countTotal; ?></td>
    <td><?php echo $ubm; ?></td>
    
  </tr>

  
<?php endwhile; ?>

</tbody>
</table>
  <?php endif; ?>

</div>

</body>
</html>
 