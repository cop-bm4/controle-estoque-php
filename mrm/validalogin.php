<?php
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];



require "db.php";

if ($conn->connect_error) {
	die("Connection failed". $conn->connect_error);
}



$sql= "SELECT login, senha FROM usuarios WHERE 'login' = '$login' AND 'senha'='$senha'";

$result =  mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);
if (mysqli_num_rows($result)>0) {
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
$_SESSION['count'] = $count;
	header('location:home.php');
	echo $count;
}

else{
	header('location:credenciaisinvalidas.php');
	echo $count;
	$_SESSION['count'] = $count;
}

?>