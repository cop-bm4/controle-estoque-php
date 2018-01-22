
<?php require 'db.php';  ?>
<?php require 'credenciais.php' ?>

<?php

$prefixo=$_POST['prefixo'];
$placa= $_POST['placa'];
$renavam = $_POST['renavam'];
$chassi=$_POST['chassi'];
$modelo=$_POST['modelo'];
$origem=$_POST['origem'];
$ano_fab=$_POST['ano_fab'];
$licenciamento=$_POST['licenciamento'];
$ubm=$_POST['licenciamento'];
$nome=$_POST['nome'];
$rg=$_POST['rg'];
$cargo= $_POST['cargo'];
$situacao= $_POST['situacao'];
$ocorrencia= $_POST['ocorrencia'];
$observacoes= $_POST['observacoes'];
$defeito= $_POST['defeito'];



$sql= "INSERT INTO materialoperacional(prefixo, placa, renavam, chassi, modelo, origem, licenciamento, situacao, ocorrencia, observacoes, defeito) VALUES('$prefixo', '$placa','$renavam', '$chassi','$modelo','$origem', '$ano_fab', '$licenciamento','$ubm', '$nome', '$rg', '$cargo', '$situacao', '$ocorrencia','$observacoes', '$defeito')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location:mastercadastro-material.php');
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>