

<?php require 'db.php';  ?>

<?php

$material = $_POST['material'];
$rp = $_POST['rp'];
$nserie = $_POST['nserie'];
?>
<?php


$sql = "INSERT INTO materialoperacional (material, rp, nserie)
VALUES ('$material', '$rp', 'nserie')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>