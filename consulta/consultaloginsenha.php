<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php

$servername = "mysql785.umbler.com:mysql785.umbler.com:41890";
$username = "joaoaluz";
$password = "joao99945222";
$db = "controle_materia"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$result = mysql_query("SELECT id,nome FROM usuarios WHERE id = '1'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);

echo $row[0]; // 42
echo $row[1]; // the email value
?>


</body>
</html>

