

<?php require 'db.php';  ?>

<?php

$material = $_POST['material'];
?>
<?php


$sql = "INSERT INTO materialoperacional (material, ubm, nome)
VALUES ('$material', '30 gbm', 'john')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>