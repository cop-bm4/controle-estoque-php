<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$servername = "mysql785.umbler.com";
$username = "joaoaluz";
$password = "joao99945222";
$db = "controle_materia"; 
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

$sql = "SELECT id, Nome, Material, Numero_Serie, Ocorrencia, reg_data FROM MaterialOp ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows ($result) > 0 ){

 while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["Nome"]. "Material" .$row["Material"]. "Numero de Serie:" .$row["Numero_Serie"]. "Ocorrencia" .$row["Ocorrencia"]. "Data de registro:" .$row["reg_data"].  "<br>";
    }



}

?>



</body>
</html>

