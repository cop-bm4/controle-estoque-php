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
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, Material FROM MaterialOp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["Material"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>