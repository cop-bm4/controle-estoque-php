<!DOCTYPE HTML>  

<html>

<head>

<style>

.error {color: #FF0000;}

</style>

<title>Controle de Material Operacional</title>

	<link rel="stylesheet" type="text/css" href="estilo.css"/>

</head>



<body>  

<!-- Banco de dados conect-->


<?php

$servername = "mysql785.umbler.com";
$username = "joaoaluz";
$password = "joao99945222";
$db = "controle_materia"

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$sql = "CREATE TABLE usuarios (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nome VARCHAR(50) NOT NULL,
usuario VARCHAR(50) NOT NULL,
senha VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

?>
<!--conec -->


<h1>teste</h1>
<div id="brasao"  style='position:absolute;margin-left:1200px;margin-top:5;width:160px;height:160px;z-index:1'><img src="http://mytestsite-com-br.umbler.net/Bras%C3%A3o_CBM_PA.PNG" width="100" height="100"></div>




<h1>Controle de Material Operacional</h1>



<form method="post" action="forms.php">  

ABAFADOR INCÊNDIO <input type=text name="quantidade"><br> 

<select name="situacao">

<option value=Operante>Operante</option>

<option value=Inoperante>Inoperante</option>

</select><BR><BR>







  

  <input type="submit" name="submit" value="Enviar">  

</form>









</body>

</html>
