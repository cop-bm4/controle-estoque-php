<?php
//baco de dados
require "/home/mytestsite.com.br/public/grud/databaseconsulta.php"; 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
echo "Não foi possível conectar ao banco de dados";
} 
$MaterialOp =null;
$customer = null;

function index(){

global $MaterialOp;
$Materia_Op = find_all('Material_Op');

}




?>