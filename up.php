<?php
require 'db.php';


$material = "ABAFADOR INCENDIO";
$rp = "INFORMAR";
$nserie = "INFORMAR";
$situacao = "Inoperante";
$ocorrencia;
$marca= "INFORMAR";
$ubm = "5 GBM";
$nome = "Joao Luz";
$rg = "6436847";
$cargo = "vc";
$defeito="SEM CABO"; 
$observacoes; 







for ($i=0; $i <26 ; $i++) {


// $sql = "INSERT INTO materialoperacional (material, rp, nserie, situacao, ocorrencia, ubm, nome, rg, cargo, defeito, marca, observacoes )
// VALUES ('$material', '$rp', '$nserie', '$situacao', '$ocorrencia','$ubm','$nome','$rg', '$cargo', '$defeito', '$marca', '$observacoes')";

$sql= "UPDATE materialoperacional SET situacao='$situacao', defeito=$defeito WHERE material='ABAFADOR INCENDIO' ";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo $i;
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}





}




?>