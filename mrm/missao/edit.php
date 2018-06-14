<!DOCTYPE html>
<html>
<head>

	<?php
	require 'db.php';
	require 'credenciais.php';
	require 'head.php';
	$id = $_GET['id'];
	?>

</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="http://bm4cop-org.umbler.net/mrm/home.php">home</a>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href="http://bm4cop-org.umbler.net/mrm/logout.php "> <span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
</nav>




<?php 

$sql= "SELECT * FROM missao WHERE cod_missao='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


?>
	
<div class="container">
		








</div>




</body>
</html>