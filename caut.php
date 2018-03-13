<?php
require 'db.php';
$id = $_GET['id'];
$cautelado = $_POST['cautelado'];
$cautela =  $_POST['cautela'];



$sql= "UPDATE materialoperacional SET cautela='$cautela', cautelado='$cautelado' WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "Atualização feita com sucesso";
    header('mastercadastro-materialbm4.php');
    
    
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
  


?>