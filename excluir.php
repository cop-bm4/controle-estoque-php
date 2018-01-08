<?php 
	
require 'credenciais.php';
require 'db.php';


$id = $_GET['id'];

$sql = "SELECT id, ubm, material, rp, nserie, situacao, ocorrencia, nome, rg, defeito, reg_date, cargo FROM materialoperacional where id=$id ";


$sql = "DELETE FROM materialoperacional WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();




 ?>