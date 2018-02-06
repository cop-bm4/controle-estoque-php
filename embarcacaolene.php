<!DOCTYPE html>
<html>
<head>
	<title>up vtrs</title>
</head>
<body>
<form method="post" action="#">
	embarcação	
	<input type="text" name="embarcacao" required>
	<select name="situacao">
<option value="Operante">operante</option>	
<option value="Inoperante">Inoperante</option>	
	</select>
defeito
<input type="text" name="defeito">
observações
<input type="text" name="observacoes">
casco:
<input type="text" name="casco">
<button type="submit" name="btt">enviar</button>
</form>

<?php 
if (isset($_POST['btt'])) 
{

require "db.php";

$embarcacao=$_POST['embarcacao'];
$situacao=$_POST['situacao'];
$defeito=$_POST['defeito'];
$observacoes=$_POST['observacoes'];
$casco=$_POST['casco'];

$sql= "INSERT INTO materialoperacional(embarcacao,situacao, defeito, observacoes, ubm, cargo, nome,casco) VALUES('$embarcacao','$situacao','$defeito', '$observacoes','13 GBM','VC', 'ELVISLENE FERRAZ','$casco') ";


	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully" ;
    
   	echo $embarcacao;
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	}





?>



</body>
</html>