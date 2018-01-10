
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

$sql = mysqli_query("UPDATE materialoperacional SET  rp='123' nome='joao' WHERE id='57' ");


if(mysqli_affected_rows() > 0){
  echo "Sucesso: Atualizado corretamente!";
}else{
  echo "Aviso: Não foi atualizado!";
}
$conn->close();

?>