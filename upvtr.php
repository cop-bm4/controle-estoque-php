<!DOCTYPE html>
<html>
<head>
	<title>up vtrs</title>
</head>
<body>
<form method="post" action="#">
	prefixo
	<input type="text" name="prefixo" required>
	<select name="situacao">
<option value="Operante">operante</option>	
<option value="Inoperante">Inoperante</option>	
	</select>
defeito
<input type="text" name="defeito">
observações
<input type="text" name="observacoes">
<button type="submit" name="btt">enviar</button>
</form>

<?php 
if (isset($_POST['btt'])) 
{

require "db.php";

$prefixo=$_POST['prefixo'];
$situacao=$_POST['situacao'];
$defeito=$_POST['defeito'];
$observacoes=$_POST['observacoes'];

$sql= "INSERT INTO materialoperacional(prefixo,situacao, defeito, observacoes, ubm, cargo, nome) VALUES('$prefixo','$situacao','$defeito', '$observacoes','1 GBM', 'VC', 'JOAO LUZ') ";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully" ;
    
   	echo $prefixo;
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	}





?>



</body>
</html>