<?php
$p=$_REQUEST['pagador'];
echo "REQUEST".$p;
$i= $POST['pagador'];
echo "POST".$i;
?>





<?php
/* Carrega a classe DOMPdf */
require_once("dompdf/dompdf_config.inc.php");

/* Cria a instância */
$dompdf = new DOMPDF();

/* Carrega seu HTML */
$dompdf->load_html('<p>
<html>
<head>
<h1>teste</h1>
</head>

<body>
<?php echo $ ?>
</body>

</html>



</p>');

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
