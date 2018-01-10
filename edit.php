
<?php require 'db.php';  ?>

<?php

/*
$material = $_POST['material'];
$rp = $_POST['rp'];
$nserie = $_POST['nserie'];
$situacao = $_POST['situacao'];
$ocorrencia = $_POST['ocorrencia']; 

$id = $_POST['id'];

$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cargo = $_POST['cargo'];
$defeito = $_POST['defeito'];


echo $id;
echo $material;
echo $situacao;

*/

$sucesso = mysql_query("UPDATE materialoperacional SET nome='joao', rp='123' WHERE id=60");
 

if ($sucesso){
   echo "atualização ok";
}else{
   die (mysql_error());
}

$conn->close();

?>