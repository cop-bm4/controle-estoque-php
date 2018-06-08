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

<div class="container-fluid">
  <!-- contador de vetor -->
    <?php 
    require 'db.php';
    
    $sql = "SELECT * FROM missao WHERE situacao= 'aberto'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
     ?>


<?php if (mysqli_num_rows($result)>0):  ?>

<table class="table table-bordered">
  <thead>
    <th>PREFIXO</th>
    <th>PLACA</th>
  </thead>
  
  <tbody>
<?php while ($row=mysqli_fetch_assoc($result)): ?> 
    <tr>
    <td><?php echo $row['observacao']; ?> </td>  
    <td><?php echo $row['localizacao']; ?> </td>  

    </tr>
<?php endwhile; ?>

  </tbody>  
</table>
  


</div>

<?php endif ?>

<?php if ($count>0): ?>

   <?php while ($row=mysqli_fetch_assoc($result)): ?> 
      <div class="row">
  
  
          <div class="col-sm-12">
            <div class="alert alert-dark" role="alert">
              <h3 class="alert-heading">Evento:<p><?php echo $row['evento']; ?> </p> </h3>
              <p class="font-weight-bold">Data/hora: </p> 
              <p class="font-weight-bold">Local:<?php echo $row['localizacao']; ?> </p> 
              <p class="font-weight-bold">Destino: </p> 
              <p class="font-weight-bold">Vtr: </p> 
              <p class="font-weight-bold">Condutor: </p> 
              <p class="font-weight-bold">Referencia: </p> 
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