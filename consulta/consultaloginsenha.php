<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

oi

<?php

$servername = "mysql785.umbler.com";
$username = "joaoaluz";
$password = "joao99945222";
$db = "controle_materia"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$result = mysqli_query("SELECT id,nome FROM usuarios WHERE id = '1'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysqli_fetch_row($result);

echo $row[0]; // 42
echo $row[1]; // the email value
?>


</body>
</html>

