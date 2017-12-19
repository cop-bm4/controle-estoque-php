<!DOCTYPE HTML>  

<html>

<head>

<style>

.error {color: #FF0000;}

</style>

<title>Controle de Material Operacional</title>

	<link rel="stylesheet" type="text/css" href="estilo.css"/>

</head>



<body>  

<!-- Banco de dados conect-->


<?php

$servername = "mysql785.umbler.com";
$username = "joaoaluz";
$password = "joao99945222";
$db = "controle_materia"

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


?>
<!--conec -->


<h1>teste</h1>
<div id="brasao"  style='position:absolute;margin-left:1200px;margin-top:5;width:160px;height:160px;z-index:1'><img src="http://mytestsite-com-br.umbler.net/Bras%C3%A3o_CBM_PA.PNG" width="100" height="100"></div>




<h1>Controle de Material Operacional</h1>



<form method="post" action="forms.php">  

ABAFADOR INCÊNDIO <input type=text name="quantidade"><br> 

<select name="situacao">

<option value=Operante>Operante</option>

<option value=Inoperante>Inoperante</option>

</select><BR><BR>







  

  <input type="submit" name="submit" value="Enviar">  

</form>









</body>

</html>
