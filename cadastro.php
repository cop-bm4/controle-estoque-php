

<?php require 'db.php';  ?>
<?php require 'credenciais.php' ?>
<?php
$login = $_POST['login'];
$senha = $_POST['senha'];

$material = $_POST['material'];
$rp = $_POST['rp'];
$nserie = $_POST['nserie'];
$situacao = $_POST['situacao'];
$ocorrencia = $_POST['ocorrencia']; 
$ubm = $_POST['ubm'];
$nome = $_POST['nome'];
$rg = $_POST['rg'];
?>
<?php

$sql1 = "SELECT login, senha, ubm FROM materialoperacional Where `login` = '$login' AND `senha`= '$senha'";
$result = mysqli_query($conn, $sql1);
$tabela = mysqli_fetch_assoc($result);
$ub = $result['ubm']; 

$sql = "INSERT INTO materialoperacional (material, rp, nserie, situacao, ocorrencia, ubm, nome, rg)
VALUES ('$material', '$rp', '$nserie', '$situacao', '$ocorrencia','$ub','$nome','$rg')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>