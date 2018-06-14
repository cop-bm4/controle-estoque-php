<?php

$id = $_GET['id'];
require 'db.php';
require 'credenciais.php';

$sql = "UPDATE missao SET situacao='conluida' WHERE cod_missao= '$id' ";
if ($conn->query($sql) === TRUE) {
	header('location: concluir.php');	
}


?>