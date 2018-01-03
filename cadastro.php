

<?php require 'db.php';  ?>

<?php

$material = $_POST['material'];
$rp = $_POST['rp'];
$nserie = $_POST['nserie'];
$situacao = $_POST['situacao']
?>
<?php


$sql = "INSERT INTO materialoperacional (material, rp, nserie, situacao)
VALUES ('$material', '$rp', '$nserie', '$situacao')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>