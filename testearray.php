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

$nomematerial = array("ABAFADOR INCENDIO", "AFT", "ALAVANCA", "APARELHO OITO", "APARELHO PA", "APARELHO CORTA A FRIO", "ANEL DE FITA", "APARELHO TIFFOR", "ALICATE UNIVERSAL", "ALICATE  DE PRESSAO", "ANILHA", "APARELHO CROCK", "APARELHO EXTINTOR INCÊNDIO", "APARELHO GPS", "APARELHO GERADOR ESPUMA", "ADAPTADOR FEMEA", "ADAPTADOR MACHO", "ASCENSOR DESCENSOR", "BOIA SALVA VIDAS", "BALACLAVA", "BANDEIRA GV", "BARRACA GV (tenda)", "BARRACA CEDEC", "BLOCANTE", "BINÓCULO", "BOTA DE INCÊNDIO", "BOTA  CANO LONGO", "BOMBA FLUTUANTE", "BOMBA SUBMERSA", "BOMBA REBOQUE", "BOMBAPORTATIL", "BOLSA DE APH", "BOMBA COSTAL PARA FOGO NO MATO", "BOTE INFLAVEL", "CAIXA TERMICA", "CABO DE ACO", "CAMBAO", "CHAVE AMERICANA", "CHAVE DE MANGUEIRA", "CHAVE DE HIDRANTE", "CHAVE DE MANGOTE", "CHAVE DE MUNHAO", "CHAVE DE RODA", "CHAVE DE VELA", "CHAVE DE ELEVADOR", "CONE DE SINALIZACAO", "CORDA DE SALVAMENTO", "CORDA DE NYLON", "CORDA COMUM", "CONJUNTO DE APROXIMACAO (CALÇA / CAPA)", "CONJUNTO FRESS SEGER", "CAPACETE SALVAMENTO", "CAPACETE INCENDIO", "CAPACETE INCENDIO FLOR", "CAPA DE CHUVA", "CANTIL", "CINTO SALVAMEN", "CADEIRINHA SALVAMENTO", "CADEIRAO  PRAIA", "CILINDRO PA", "COLETE DE SINALIZACAO", "COLETE SALVA  VIDAS", "COLETOR", "COMPRESSOR DE AR", "DERIVANTE", "DRAGA MANUAL", "DIVISOR TRES SAIDAS", "DIVISAO DE DUAS SAIDAS", "DESENCARCERADOR A OLEO", "DESENCARCERADOR ELETRICO", "ESCADA DE MADEIRA", "ESCADA EM  FIBRA", "ESCADA EM ALUMINIO", "ESCADA DE CORDA", "ESCALER", "ESGUICHO  2 ½”", "ESGUICHO 1 ½”", "ESGUICHO CANHAO", "ESGUICHO NPU", "ESGUICHO AGULHETA", "ESGUICHO PROPORCIONADOR DE ESPUMA 2 ½”", "ESGUICHO PPROPORCIONADOR DE ESPUMA 1 ½”", "ENXADA", "ENXADECO", "EXPANSOR", "FOICE", "FACAO OUTERCADO", "FERRO DE COVA", "FITA DE ANCORAGEM", "FLUTSPUMA (FLUTUADOR DE SALVAMENTO AQUÁTICO)", "GAIOLA", "GADANHO", "GARFO", "GARATÉIA", "GUARDA-SOL", "HOLOFOTE SIMPLES", "HOLOFOTE COM TRIPÉ", "HOSPITAL CAMPANHA", "LANTERNA RECARREGÁVEL", "LINGA DE ACO", "LUVA ALTA TENSAO", "LUVA RASPA DE COURO", "LUVA DE VAQUETA", "LUVA DE SALVAMENTO", "LUVA DE INCENDIO", "MACA PVC (cesto)", "MACA LONA", "MACA COM RODAS", "MASCARA CONTRA GASES", "MASCARA PANORAMICA", "MACACO MECANICO", "MACHADO LENHADOR", "MACHADO BOMBEIRO", "MANGUEIRA 1 ½”", "MANGUEIRA 2 ½”", "MANGOTE 4”", "MACHADINHA BOMBEIRO", "MALHO", "MARTELO UNIVERSAL", "MICRO RETIFICA", "MOLA MOSQUETAO", "MOTOSERRA", "MOTO ESMERIL", "MOTO  SERRA SABRE", "MOTO BOMBA DIESEL", "MOTO BOMBAELETRICA", "MOTO GERADOR", "MANILHA", "MOTOR DE P  15 HP", "MOTOR DE P  25 HP", "MOTOR DE POPA 40 HP", "MOTOR DE POPA 90 HP", "MOTOR DE POPA 115 HP", "MISTURADOR ENTRE LINHAS", "NADADEIRA", "OCULOS PROTEÇÃO", "OXÍMETRO DE PULSO", "PINO PARA CHOQUE", "PE DE CABRA", "PA DE BICO", "PA QUADRADA", "PRANCHA SALVAMENTO", "PROTETOR AURICULAR", "PICARETA", "PINGA FOGO", "PLACA DE ANCORAGEM", "RALO DE MANGOTE", "RADIO HT ANALOGICO", "RADIO HT DIGITAL", "RADIO FIXO", "RADIO VTR", "ROUPA APICULTOR", "ROUPA MERGULHO", "ROUPA SANEAMENTO  C/ BOTA", "REDUCAO", "ROLDANA SIMPLES", "ROLDANA DUPLA", "SIRENE INTERNA", "SUPORTE BAK PAK", "TENDA GV", "TÁBUA DE SALVAMENTO", "TALHA", "TALABARTE", "TORRE DE ILUMINACAO", "TRIPE RESG POÇO", "VALVULA MERGULHO","TESADO","MCLEOD");

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

<?php foreach ($nomematerial as $value): ?>
	
	<?php

      $total = "SELECT material,situacao,ubm FROM materialoperacional WHERE  material='$value' ";
      $operantes = "SELECT situacao FROM materialoperacional WHERE  situacao='operante' and material='$value'";
      $inoperantes = "SELECT situacao FROM materialoperacional WHERE situacao='inoperante' and material='$value' ";
    
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
      	


<?php endforeach; ?>

</tbody>

</table>

</body>


</html>

