

<?php require 'db.php';  ?>

<?php

$material = $_POST['material'];
$rp = $_POST['rp'];
$nserie = $_POST['nserie'];
$situacao = $_POST['situacao'];
$ocorrencia = $_POST['ocorrencia']; 
$ubm = $_POST['ubm'];
?>
<?php


$sql = "INSERT INTO materialoperacional (material, rp, nserie, situacao, ocorrencia, ubm)
VALUES ('$material', '$rp', '$nserie', '$situacao', '$ocorrencia','$ubm')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>