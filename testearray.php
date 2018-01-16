<!DOCTYPE html>
<html>
<head>
	<title>array</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<!---->
  <!-- include bibliotecas bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>



<?php

require 'db.php';

$nomematerial = array("ABAFADOR INCÊNDIO", "AFT", "ALAVANCA", "APARELHO OITO", "APARELHO PA", "APARELHO CORTA A FRIO", "ANEL DE FITA", "APARELHO TIFFOR", "ALICATE UNIVERSAL", "ALICATE  DE PRESSÃO", "ANILHA", "APARELHO CROCK", "APARELHO EXTINTOR INCÊNDIO", "APARELHO GPS", "APARELHO GERADOR ESPUMA", "ADAPTADOR FEMEA", "ADAPTADOR MACHO", "ASCENSOR DESCENSOR", "BOIA SALVA VIDAS", "BALACLAVA", "BANDEIRA GV", "BARRACA GV (tenda)", "BARRACA CEDEC", "BLOCANTE", "BINÓCULO", "BOTA DE INCÊNDIO", "BOTA  CANO LONGO", "BOMBA FLUTUANTE", "BOMBA SUBMERSA", "BOMBA REBOQUE", "BOMBAPORTÁTIL", "BOLSA DE APH", "BOMBA COSTAL PARA FOGO NO MATO", "BOTE INFLÁVEL", "CAIXA TÉRMICA", "CABO DE AÇO", "CAMBÃO", "CHAVE AMERICANA", "CHAVE DE MANGUEIRA", "CHAVE DE HIDRANTE", "CHAVE DE MANGOTE", "CHAVE DE MUNHÃO", "CHAVE DE RODA", "CHAVE DE VELA", "CHAVE DE ELEVADOR", "CONE DE SINALIZAÇÃO", "CORDA DE SALVAMENTO", "CORDA DE NYLON", "CORDA COMUM", "CONJUNTO DE APROXIMAÇÃO (CALÇA / CAPA)", "CONJUNTO FRESS SEGER", "CAPACETE SALVAMENTO", "CAPACETE INCÊNDIO", "CAPACETE INCENDIO FLOR", "CAPA DE CHUVA", "CANTIL", "CINTO SALVAMEN", "CADEIRINHA SALVAMENTO", "CADEIRÃO  PRAIA", "CILINDRO PA", "COLETE DE SINALIZAÇÃO", "COLETE SALVA  VIDAS", "COLETOR", "COMPRESSOR DE AR", "DERIVANTE", "DRAGA MANUAL", "DIVISOR TRES SAIDAS", "DIVISÃO DE DUAS SAÍDAS", "DESENCARCERADOR A ÓLEO", "DESENCARCERADOR ELÉTRICO", "ESCADA DE MADEIRA", "ESCADA EM  FIBRA", "ESCADA EM ALUMÍNIO", "ESCADA DE CORDA", "ESCALER", "ESGUICHO  2 ½”", "ESGUICHO 1 ½”", "ESGUICHO CANHÃO", "ESGUICHO NPU", "ESGUICHO AGULHETA", "ESGUICHO PROPORCIONADOR DE ESPUMA 2 ½”", "ESGUICHO PPROPORCIONADOR DE ESPUMA 1 ½”", "ENXADA", "ENXADECO", "EXPANSOR", "FOICE", "FACÃO OUTERÇADO", "FERRO DE COVA", "FITA DE ANCORAGEM", "FLUTSPUMA (FLUTUADOR DE SALVAMENTO AQUÁTICO)", "GAIOLA", "GADANHO", "GARFO", "GARATÉIA", "GUARDA-SOL", "HOLOFOTE SIMPLES", "HOLOFOTE COM TRIPÉ", "HOSPITAL CAMPANHA", "LANTERNA RECARREGÁVEL", "LINGA DE AÇO", "LUVA ALTA TENSÃO", "LUVA RASPA DE COURO", "LUVA DE VAQUETA", "LUVA DE SALVAMENTO", "LUVA DE INCENDIO", "MACA PVC (cesto)", "MACA LONA", "MACA COM RODAS", "MÁSCARA CONTRA GASES", "MÁSCARA PANORÂMICA", "MACACO MECÂNICO", "MACHADO LENHADOR", "MACHADO BOMBEIRO", "MANGUEIRA 1 ½”", "MANGUEIRA 2 ½”", "MANGOTE 4”", "MACHADINHA BOMBEIRO", "MALHO", "MARTELO UNIVERSAL", "MICRO RETÍFICA", "MOLA MOSQUETÃO", "MOTOSERRA", "MOTO ESMERIL", "MOTO  SERRA SABRE", "MOTO BOMBA DIESEL", "MOTO BOMBAELÉTRICA", "MOTO GERADOR", "MANILHA", "MOTOR DE P  15 HP", "MOTOR DE P  25 HP", "MOTOR DE POPA 40 HP", "MOTOR DE POPA 90 HP", "MOTOR DE POPA 115 HP", "MISTURADOR ENTRE LINHAS", "NADADEIRA", "OCULOS PROTEÇÃO", "OXÍMETRO DE PULSO", "PINO PÁRA CHOQUE", "PÉ DE CABRA", "PÁ DE BICO", "PÁ QUADRADA", "PRANCHA SALVAMENTO", "PROTETOR AURICULAR", "PICARETA", "PINGA FOGO", "PLACA DE ANCORAGEM", "RALO DE MANGOTE", "RÁDIO HT ANALÓGICO", "RÁDIO HT DIGITAL", "RÁDIO FIXO", "RÁDIO VTR", "ROUPA APICULTOR", "ROUPA MERGULHO", "ROUPA SANEAMENTO  C/ BOTA", "REDUÇÃO", "ROLDANA SIMPLES", "ROLDANA DUPLA", "SIRENE INTERNA", "SUPORTE BAK PAK", "TENDA GV", "TÁBUA DE SALVAMENTO", "TALHA", "TALABARTE", "TORRE DE ILUMINAÇÃO", "TRIPÉ RESG POÇO", "VÁLVULA MERGULHO");

?>
<table>
<thead>
	<tr>
	<th>Material</th>
	<th>Qt. Operante</th>
	<th>Qt. Inoperante</th>
	<th>Total</th>
	</tr>
</thead>

<?php foreach ($nomematerial as $value) ?>
	echo "$value <br>";

	<?php
      $total = "SELECT material,situacao,ubm FROM materialoperacional WHERE ubm='$ubm' and material='$value'  ";
      $operantes = "SELECT situacao FROM materialoperacional WHERE ubm='$ubm' and situacao='operante' and material='$value'";
      $inoperantes = "SELECT situacao FROM materialoperacional WHERE ubm='$ubm' and situacao='inoperante' and material='$value' ";
    
      $resultTotal = mysqli_query($conn, $total);
      $countTotal=  mysqli_num_rows($resultTotal);
   	  $resultOperantes = mysqli_query($conn, $operantes);
      $countOperantes=  mysqli_num_rows($resultOperantes);
      $resultInoperantes = mysqli_query($conn, $inoperantes);
      $countInoperantes=  mysqli_num_rows($resultInoperantes);

      ?>

      	<tbody>
      		<tr>
      		<td><?php echo $value; ?></td>
      		<td><?php echo $countOperantes; ?></td>
      		<td><?php echo $countInoperantes;?></td>
      		<td><?php echo $countTotal; ?></td>
      		</tr>
      	</tbody>


<? endfor; ?>



</table>

</body>
</html>

