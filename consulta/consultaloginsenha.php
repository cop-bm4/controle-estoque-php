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

$sql = "SELECT id, ubm, material, rp, nserie, situacao, ocorrencia, nome, rg, reg_date FROM materialoperacional";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows ($result) > 0 ){

 while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["Nome"]. "Material" .$row["material"]. "Numero de Serie:" .$row["nserie"]. "Ocorrencia" .$row["ocorrencia"]. "Data de registro:" .$row["reg_date"].  "<br>";
    }



}

?>



</body>
</html>

