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

$sql = "SELECT login, senha FROM usuarios ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows ($result) > 0 ){
echo $login;
echo "achou";

}

?>



</body>
</html>

