

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

$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cargo = $_POST['cargo'];
$defeito = $_POST['defeito'];
$observacoes= $_POST['observacoes'];
$imagens=$_POST['imagens'];
?>
<?php



$sql = "INSERT INTO materialoperacional (material, rp, nserie, situacao, ocorrencia, ubm, nome, rg, cargo, defeito, marca, observacoes, imagens )
VALUES ('$material', '$rp', '$nserie', '$situacao', '$ocorrencia','$ubm','$nome','$rg', '$cargo', '$defeito', '$marca', '$observacoes','$imagens')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location:mastercadastro-material.php');
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>