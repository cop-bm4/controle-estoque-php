

<?php require 'db.php';  ?>

<?php

$material = $_POST['material'];
$teste = $_POST['teste'];
?>
<?php


$sql = "INSERT INTO materialoperacional (material, rp, nome)
VALUES ('$material', '$teste', 'john')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>