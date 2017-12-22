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

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
echo "deu ruim";
}
echo "conecto";
$sql = "SELECT id, Material FROM MaterialOp ";
$result = mysqli_query($conn, $sql);
echo "id: " . $row["id"]. " - Name: " ". $row["Material"]. "  "<br>";



?>
</body>
</html>