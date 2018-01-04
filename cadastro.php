

<?php require 'db.php';  ?>
<?php require 'credencias.php' ?>
<?php

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


$sql = "INSERT INTO materialoperacional (material, rp, nserie, situacao, ocorrencia, ubm, nome, rg)
VALUES ('$material', '$rp', '$nserie', '$situacao', '$ocorrencia','$ub','$nome','$rg')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location:cadastro-material.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>