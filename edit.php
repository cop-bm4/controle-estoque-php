
<?php require 'db.php';  ?>

<?php


$material = $_POST['material'];
$rp = $_POST['rp'];
$nserie = $_POST['nserie'];
$situacao = $_POST['situacao'];
$ocorrencia = $_POST['ocorrencia']; 

$id = $_POST['id'];

$nome = $_POST['nome'];

$rg = $_POST['rg'];
$cargo = $_POST['cargo'];
$defeito = $_POST['defeito'];





$sql = "UPDATE materialoperacional SET nome='$nome' WHERE id='$id' ";


if ($conn->query($sql) === TRUE) {
    echo "Atualização feita com sucesso";
    header("location:cadastro-material.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>