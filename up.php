<?php
require 'db.php';


$material = "ABAFADOR DE INCENDIO";
$rp = "INFORMAR";
$nserie = "INFORMAR";
$situacao = "Operante";
$ocorrencia;
$marca= "INFORMAR";
$ubm = "5 GBM";
$nome = "Joao Luz";
$rg = "6436847";
$cargo = "vc";
$defeito; 
$observacoes="SEM CABO"; 







for ($i=0; $i <13 ; $i++) {


$sql = "INSERT INTO materialoperacional (material, rp, nserie, situacao, ocorrencia, ubm, nome, rg, cargo, defeito, marca, observacoes )
VALUES ('$material', '$rp', '$nserie', '$situacao', '$ocorrencia','$ubm','$nome','$rg', '$cargo', '$defeito', '$marca', '$observacoes')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo $i;
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



}




?>