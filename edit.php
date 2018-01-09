
<?php require 'db.php';  ?>
<?php require 'credenciais.php' ?>

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


echo $id;
echo $material;
echo $situacao;


/* $sql = "UPDATE materialoperacional SET  rp='$rp' nome='$nome' WHERE id='$id' ";
*/
/*
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location:cadastro-material.php');
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
*/
?>