<?php require 'db.php';  ?>
<?php require 'credenciais.php' ?>
<?php


$embarcacoes= $_POST['embarcacoes'];
$casco= $_POST['casco'];
$motor= $_POST['motor'];

$situacao= $_POST['situacao'];

$ubm = $_POST['ubm'];

$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cargo = $_POST['cargo'];
$defeito = $_POST['defeito'];
$observacoes= $_POST['observacoes'];
$ocorrencia=['ocorrencia'];

/*
preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagens["name"], $ext);
 
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
 
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "imagens/" ;
 
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($imagens["tmp_name"], $caminho_imagem);


*/


$target_dir = "imagens/";
$target_file = $target_dir . basename($_FILES["imagens"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 move_uploaded_file($_FILES["imagens"]["tmp_name"], $target_file);
$imagens= $_FILES["imagens"]["name"];







$sql = "INSERT INTO materialoperacional ( situacao, ocorrencia, ubm, nome, rg, cargo, defeito,  observacoes, imagens, embarcacao, casco, motor )
VALUES ( '$situacao', '$ocorrencia','$ubm','$nome','$rg', '$cargo', '$defeito', '$observacoes','$imagens', '$embarcacoes','$casco','$motor')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location:mastercadastro-embarcacoes.php');
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>