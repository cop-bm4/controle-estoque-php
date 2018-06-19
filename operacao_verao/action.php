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


$sql_insert_op = "INSERT INTO pagamento_op(pagador, recebedor, cod_material, rp, )"







?>
