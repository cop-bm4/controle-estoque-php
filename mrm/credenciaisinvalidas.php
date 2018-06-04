<!DOCTYPE html>
<html>
<?php
require 'head.php';
?>
<body>
<div class="container-fluid">
	<p>Login ou senha inválido.</p>
</div>
<?php
$contador = $_SESSION['count'];
echo $contador;
?>




<?php
require 'footer.php';
?>
</body>
</html>