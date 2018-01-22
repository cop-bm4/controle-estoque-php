

<?php require 'db.php';  ?>
<?php require 'credenciais.php' ?>
<?php


$material = $_POST['material'];
$rp = $_POST['rp'];
$nserie = $_POST['nserie'];
$situacao = $_POST['situacao'];
$ocorrencia = $_POST['ocorrencia']; 
$marca= $_POST['marca'];
$ubm = $_POST['ubm'];
$observacoes= $_POST['observacoes'];
$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cargo = $_POST['cargo'];
$defeito = $_POST['defeito'];


?>
<?php



$sql = "INSERT INTO materialoperacional (material, rp, nserie, situacao, ocorrencia, ubm, nome, rg, cargo, defeito, marca, observacoes)
VALUES ('$material', '$rp', '$nserie', '$situacao', '$ocorrencia','$ubm','$nome','$rg', '$cargo', '$defeito', '$marca', '$observacoes')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location:mastercadastro-material.php');
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>