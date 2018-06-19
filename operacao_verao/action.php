<?php

require 'db.php';

$pagador = $_REQUEST['pagador'];
$cargo_pagador = $_REQUEST['cargo_pagador'];
$recebedor = $_REQUEST['recebedor'];
$cargo_recebedor = $_REQUEST['cargo_recebedor'];
$cod_material = $_REQUEST['cod_material'];
$rp = $_REQUEST['rp'];
$nome_militar = $_REQUEST['nome_militar'];
$mf = $_REQUEST['mf'];
$ubm = $_REQUEST['ubm'];


?>

<?php
/* Carrega a classe DOMPdf */
require_once("dompdf/dompdf_config.inc.php");

/* Cria a instância */
$dompdf = new DOMPDF();

/* Carrega seu HTML */
$dompdf->load_html('<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title>Atenção, apenas um teste</title>
<style>
* { font-family: sans-serif; }
</style>
</head>

<body>

<header>
    <h1>Atenção, isso é apenas um teste</h1>
    <p>Estou dando um exemplo sobre como utilizar a dompdf.
    Meu nome é <b>Luiz Otávio</b> E trabalho no blog
    <a href="http://www.todoespacoonline.com/w/">todoespacoonline.com/w</a>. Minha foto segue abaixo:
    </p>

    <p style="text-align:center">
        <img src="foto.jpg">
    </p>
</header>

</body>

</html>');

/* Renderiza */
$dompdf->render();

/* Exibe */
$dompdf->stream(
    "saida.pdf", /* Nome do arquivo de saída */
    array(
        "Attachment" => false /* Para download, altere para true */
    )
);
?>
