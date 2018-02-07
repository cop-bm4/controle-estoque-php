<!DOCTYPE HTML>  

<html>
<head>

  <!--login -->
<?php 
require "credenciais.php"


?>
<title>Controle de VTR Operacional</title>


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
      <li ><a href="http://copbm4cbmpa-com-br.umbler.net/masterhome.php">Home</a></li>
      <li class= "active" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="http://copbm4cbmpa-com-br.umbler.net/mastercadastro-material.php">Registro<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://copbm4cbmpa-com-br.umbler.net/mastercadastro-material.php" >Material</a></li>
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
     
      <li><a href=" http://copbm4cbmpa-com-br.umbler.net/logout.php "><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>



   
<?php $ub = $_SESSION['ubm']; 

?>
<div class="container">
<div class="row">
   
    <div class="col-sm-12 text-right h2">
        <a class="btn btn-primary" href="http://copbm4cbmpa-com-br.umbler.net/cadastronovovtr.php"><i class="fa fa-plus"></i> Nova VTR</a> 
        <a class="btn btn-default" href="http://copbm4cbmpa-com-br.umbler.net/mastercadastro-vtrs.php"><i class="fa fa-refresh"></i> Atualizar</a>
      </div>
  </div>

<?php
$sql = "SELECT id, ubm, prefixo, placa, renavam, chassi, modelo, origem, ano_fab, licenciamento, reg_date,situacao FROM materialoperacional where prefixo !='' ";
$result = mysqli_query($conn, $sql);
?>


   <?php if(mysqli_num_rows ($result) > 0 ): ?>    
<table class="table table-bordered">
<thead>
  <tr>
    <th>UBM</th>
    <th>PREFIXO</th>
    <th>PLACA</th>
    <th>CHASSI</th>
    
    <th>Situação</th>
    <th>Atualizado em</th>
    <th> Opções</th>
  </tr>
</thead>


<tbody>
 <?php while($row = mysqli_fetch_assoc($result)): ?> 

  <tr>
    <td><?php echo $row['ubm']; ?></td>
    <td><?php echo $row['prefixo'];?> </td>
    <td><?php echo $row['placa']; ?></td>
    <td><?php echo $row['chassi']?></td>
    
    <td>
      <form method="post" action="#">
      <select name="situacao" value="<?php echo $row['situacao']; ?>">
        <option value="Operante">Operante</option>
        <option value="Inoperante">Inoperante</option>
      </select>
      <button type="submit" name="btt">Atualizar</button>
    </form>
    <?php 
    $situacao=$_POST['situacao'];
    $id=$row['id'];
    if (isset($_POST["submit"])) {
      
      $sql= "UPDATE materialoperacional SET situacao='$situacao' where id='$id'" ;

    }

    ?>
    </td>
    <td><?php echo $row['reg_date']; ?></td>
    
    <td class="actions text-right">
      <a href="http://copbm4cbmpa-com-br.umbler.net/masterviewvtr.php?id=<?php echo $row['id']; ?>"button type="button" class="btn btn-default"><i class="fa fa-eye"></i> Visualizar</a>
      <a href="mastereditarvtr.php?id=<?php echo $row['id']; ?>" button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Editar</a>
      <a href="http://copbm4cbmpa-com-br.umbler.net/excluirvtr.php?id=<?php echo $row['id']; ?>" button type="button" class="btn btn-default" >
         <i class="fa fa-trash"></i> Excluir</a>
    </td>
  </tr>

  



<?php endwhile; ?>

</tbody>
</table>

<?php else : ?>     
  <tr>       
   <td colspan="6">Nenhum registro encontrado.</td>      
 </tr>

<?php endif;?>






</div>
<!-- Modal -->




<div class="footer">
  <p>© 2018 BM4/COP CBM-PA  V.C João Luz </p>
</div>

</body>

</html>