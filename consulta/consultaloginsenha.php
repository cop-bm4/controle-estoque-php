<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!--
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

$sql = "SELECT id, nome,login, senha, reg_data FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["nome"]. " login: " . $row["login"]. "senha: ".$row["senha"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
-->

<?php
// Conexão ao banco

$link = mysql_connect('mysql785.umbler.com','joaoaluz','joao99945222');

// Seleciona o Banco de dados através da conexão acima

$conexao = mysql_select_db('controle_materia',$link); if($conexao){

$sql = "SELECT nome FROM usuarios";

$consulta = mysql_query($sql);

echo '<table>';

echo '<tr>';

echo '<td>Nome</td>';



echo '</tr>';

// Armazena os dados da consulta em um array associativo

while($registro = mysql_fetch_assoc($consulta)){

echo '<tr>';

echo '<td>'.$registro["nome"].'</td>';

echo '</tr>';

}

echo '</table>';

}

?>
</body>
</html>



