
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
$ubm=$_POST['ubm'];
$nome=$_POST['nome'];
$rg=$_POST['rg'];
$cargo= $_POST['cargo'];
$situacao= $_POST['situacao'];
$ocorrencia= $_POST['ocorrencia'];
$observacoes= $_POST['observacoes'];
$defeito= $_POST['defeito'];

$ano_fab=$_POST['ano_fab'];







$target_dir = "imagens/";
$target_file = $target_dir . basename($_FILES["imagens"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["imagens"]["tmp_name"], $target_file);
$imagens= $_FILES["imagens"]["name"];

   






$sql= "INSERT INTO materialoperacional(prefixo, placa, renavam, chassi, modelo, origem, licenciamento,ubm,nome, rg, cargo, situacao, ocorrencia, observacoes, defeito, ano_fab, imagens) VALUES('$prefixo', '$placa','$renavam', '$chassi','$modelo','$origem', '$licenciamento','$ubm', '$nome', '$rg', '$cargo', '$situacao', '$ocorrencia','$observacoes', '$defeito','$ano_fab', '$imagens')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location:mastercadastro-vtrs.php');
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?> 