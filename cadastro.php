

<?php require 'db.php';  ?>
<?php require 'credenciais.php' ?>
<?php


$material = $_POST['material'];
$rp = $_POST['rp'];
$nserie = $_POST['nserie'];
$situacao = $_POST['situacao'];
$ocorrencia = $_POST['ocorrencia']; 
$marca= $_POST['marca'];
$ubm = $_POST['ubm'];

$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cargo = $_POST['cargo'];
$defeito = $_POST['defeito'];
$observacoes= $_POST['observacoes'];


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
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
move_uploaded_file($_FILES["imagens"]["tmp_name"], $target_file);
/*
    $check = getimagesize($_FILES["imagens"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["imagens"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imagens"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imagens"]["name"]). " has been uploaded.";
        $imagens=$_FILES['imagens'];
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


*/




$sql = "INSERT INTO materialoperacional (material, rp, nserie, situacao, ocorrencia, ubm, nome, rg, cargo, defeito, marca, observacoes, imagens )
VALUES ('$material', '$rp', '$nserie', '$situacao', '$ocorrencia','$ubm','$nome','$rg', '$cargo', '$defeito', '$marca', '$observacoes','$nome_imagem')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location:mastercadastro-material.php');
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>