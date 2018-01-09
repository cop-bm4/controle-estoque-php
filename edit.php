
<?php require 'db.php';  ?>
<?php require 'credenciais.php' ?>

<?php


$material = $_POST['material'];
$rp = $_POST['rp'];
$nserie = $_POST['nserie'];
$situacao = $_POST['situacao'];
$ocorrencia = $_POST['ocorrencia']; 



$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cargo = $_POST['cargo'];
$defeito = $_POST['defeito'];





$sql = "INSERT INTO materialoperacional (material, rp, nserie, situacao, ocorrencia, nome, rg, cargo, defeito)
VALUES ('$material', '$rp', '$nserie', '$situacao', '$ocorrencia','$nome','$rg', '$cargo', '$defeito')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location:cadastro-material.php');
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>