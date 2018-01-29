
<?php require 'db.php';  ?>
<?php require 'credenciais.php' ?>

<?php

$prefixo=$_POST['prefixo'];
$placa= $_POST['placa'];
$renavam = $_POST['renavam'];
$chassi=$_POST['chassi'];
$modelo=$_POST['modelo'];
$origem=$_POST['origem'];
$ano_fab=$_POST['ano_fab'];
$licenciamento=$_POST['licenciamento'];
$ubm=$_POST['ubm'];
$nome=$_POST['nome'];
$rg=$_POST['rg'];
$cargo= $_POST['cargo'];
$situacao= $_POST['situacao'];
$ocorrencia= $_POST['ocorrencia'];
$observacoes= $_POST['observacoes'];
$defeito= $_POST['defeito'];

$ano_fab=$_POST['ano_fab'];







$target_dir = "imagens/";
$target_file = $target_dir . basename($_FILES["imagens"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
/*move_uploaded_file($_FILES["imagens"]["tmp_name"], $target_file);
$imagens= $_FILES["imagens"]["name"];*/

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








$sql= "INSERT INTO materialoperacional(prefixo, placa, renavam, chassi, modelo, origem, licenciamento,ubm,nome, rg, cargo, situacao, ocorrencia, observacoes, defeito, ano_fab, imagens) VALUES('$prefixo', '$placa','$renavam', '$chassi','$modelo','$origem', '$licenciamento','$ubm', '$nome', '$rg', '$cargo', '$situacao', '$ocorrencia','$observacoes', '$defeito','$ano_fab', '$imagens')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location:mastercadastro-vtrs.php');
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>