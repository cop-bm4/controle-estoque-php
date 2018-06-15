<?php
$id =  $_GET['id'];


require 'db.php';
require 'credenciais.php';
$sql = "DELETE FROM militar WHERE cod_mitilitar= '$id'";
$result = mysqli_query($conn, $sql);

if ($conn->query($sql)===TRUE) {
	header('location: /mrm/militar/excluir.php'); 
}



?>