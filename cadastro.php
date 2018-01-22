

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

$prefixo=$_POST['prefixo'];
$placa=$_POST['placa'];
$renavam=$_POST['renavam'];
$chassi=$_POST['chassi'];
$modelo=$_POST['modelo'];
$origem=$_POST['origem'];
$ano_fab=$_POST['ano_fab'];
$lincenciamento=$_POST['lincenciamento'];
?>
<?php



$sql = "INSERT INTO materialoperacional (material, rp, nserie, situacao, ocorrencia, ubm, nome, rg, cargo, defeito, marca, observacoes, prefixo, placa, renavam, chassi, modelo, origem, ano_fab, lincenciamento)
VALUES ('$material', '$rp', '$nserie', '$situacao', '$ocorrencia','$ubm','$nome','$rg', '$cargo', '$defeito', '$marca', '$observacoes', '$prefixo', '$placa','$renavam','$chassi','$chassi','$modelo','$origem','$ano_fab', '$lincenciamento')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location:mastercadastro-material.php');
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>