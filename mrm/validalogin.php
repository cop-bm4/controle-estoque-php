<?php
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];



require "db.php";

if ($conn->maxdb_connect_error()) {
	die("Connection failed". $conn->connect_error);
}



$sql= "SELECT login, senha FROM usuarios WHERE 'login' = '$login' AND 'senha'='$senha'";

$result =  mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);




?>