  <!DOCTYPE html>
  <html>
  <head>
    <title>Relatórios</title>
     <!--login -->
  <?php 
  require "credenciais.php";


  ?>



  <!--mod mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!---->
    <!-- include bibliotecas bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!---->
  <style>
  .footer {
     position: fixed;
     left: 0;
     bottom: 0;
     width: 100%;
     
     color: black;
     text-align: center;
     font-size: 12px; 
  }
  </style>
  </head>

  <body>
  <!-- Banco de dados conect-->
  <?php
  require "db.php"; 
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  echo "Não foi possível conectar ao banco de dados";
  } 
  ?>
  <!--conec -->

    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"> SISCOMP </a>
      </div>
      <ul class="nav navbar-nav">
        <li ><a href="http://copbm4cbmpa-com-br.umbler.net/masterhome.php">Home</a></li>
        <li  class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="http://copbm4cbmpa-com-br.umbler.net/mastercadastro-material.php">Registro</a>
          <ul class="dropdown-menu">
            <li><a href="http://copbm4cbmpa-com-br.umbler.net/mastercadastro-material.php" >Material</a></li>
    <li><a href="http://copbm4cbmpa-com-br.umbler.net/mastercadastro-vtrs.php">VTRS</a></li>
                    <li><a href="http://copbm4cbmpa-com-br.umbler.net/mastercadastro-embarcacoes.php">Embarcações</a></li>
          </ul>
        </li>
        
  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" > <span class="cared">Relatórios</span></a>
                  <ul class="dropdown-menu">
                  <li><a href="http://copbm4cbmpa-com-br.umbler.net/masterrelatorios.php"> Material</a></li>
                  <li><a href="http://copbm4cbmpa-com-br.umbler.net/masterrelatoriosvtrs.php">Vtr's</a></li>
                  <li><a href="http://copbm4cbmpa-com-br.umbler.net/masterrelatoriosembarcacoes.php">Embarcações</a></li>
                  </ul>
                </li>  

      </ul>
      <ul class="nav navbar-nav navbar-right">
       
        <li><a href=" http://copbm4cbmpa-com-br.umbler.net/logout.php "><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
      </ul>
    </div>
  </nav>


  <div class="container">
    
    <h2>Faça sua pesquisa</h2>
  <form action="#" method="post">
        <div class="row">
          <div class="col-lg-4">
              <div class="input-group">

              <span class="input-group-addon">Material</span>
                <select class="form-control" data-live-search="true" name="material" required>
                  <option data-tokens="qualquer" value="qualquer">Qualquer</option> 
                  

  <option data-tokens= "ABAFADOR INCÊNDIO" value="ABAFADOR INCENDIO" >ABAFADOR INCÊNDIO</option>
  <option data-tokens= "AFT" value="AFT" >AFT</option>
  <option data-tokens= "ALAVANCA" value="ALAVANCA" >ALAVANCA</option>
  <option data-tokens= "APARELHO OITO" value="APARELHO OITO" >APARELHO OITO</option>
  <option data-tokens= "APARELHO PA" value="APARELHO PA" >APARELHO PA</option>
  <option data-tokens= "APARELHO CORTA A FRIO" value="APARELHO CORTA A FRIO" >APARELHO CORTA A FRIO</option>
  <option data-tokens= "ANEL DE FITA" value="ANEL DE FITA" >ANEL DE FITA</option>
  <option data-tokens= "APARELHO TIFFOR" value="APARELHO TIFFOR" >APARELHO TIFFOR</option>
  <option data-tokens= "ALICATE UNIVERSAL" value="ALICATE UNIVERSAL" >ALICATE UNIVERSAL</option>
  <option data-tokens= "ALICATE  DE PRESSÃO" value="ALICATE  DE PRESSAO" >ALICATE  DE PRESSÃO</option>
  <option data-tokens= "ANILHA" value="ANILHA" >ANILHA</option>
  <option data-tokens= "APARELHO CROCK" value="APARELHO CROCK" >APARELHO CROCK</option>
  <option data-tokens= "APARELHO EXTINTOR INCÊNDIO" value= "APARELHO EXTINTOR INCENDIO ">APARELHO EXTINTOR INCÊNDIO</option>
  <option data-tokens= "APARELHO GPS" value="APARELHO GPS" >APARELHO GPS</option>
  <option data-tokens= "APARELHO GERADOR ESPUMA" value="APARELHO GERADOR ESPUMA" >APARELHO GERADOR ESPUMA</option>
  <option data-tokens= "ADAPTADOR FEMEA" value="ADAPTADOR FEMEA" >ADAPTADOR FEMEA</option>
  <option data-tokens= "ADAPTADOR MACHO" value="ADAPTADOR MACHO" >ADAPTADOR MACHO</option>
  <option data-tokens= "ASCENSOR DESCENSOR" value="ASCENSOR DESCENSOR" >ASCENSOR DESCENSOR</option>
  <option data-tokens= "BOIA SALVA VIDAS" value="BOIA SALVA VIDAS" >BOIA SALVA VIDAS</option>
  <option data-tokens= "BALACLAVA" value="BALACLAVA" >BALACLAVA</option>
  <option data-tokens= "BANDEIRA GV" value="BANDEIRA GV" >BANDEIRA GV</option>
  <option data-tokens= "BARRACA GV (tenda)" value="BARRACA GV (tenda)" >BARRACA GV (tenda)</option>
  <option data-tokens= "BARRACA CEDEC" value="BARRACA CEDEC" >BARRACA CEDEC</option>
  <option data-tokens= "BLOCANTE" value="BLOCANTE" >BLOCANTE</option>
  <option data-tokens= "BINÓCULO" value="BINOCULO" >BINÓCULO</option>
  <option data-tokens= "BOTA DE INCÊNDIO" value="BOTA DE INCENDIO" >BOTA DE INCÊNDIO</option>
  <option data-tokens= "BOTA  CANO LONGO" value="BOTA  CANO LONGO" >BOTA  CANO LONGO</option>
  
  <option data-tokens= "BOMBA A VACUO" value="BOMBA A VACUO" >BOMBA A VACUO</option>
  <option data-tokens= "BOMBA FLUTUANTE" value="BOMBA FLUTUANTE" >BOMBA FLUTUANTE</option>
  <option data-tokens= "BOMBA SUBMERSA" value="BOMBA SUBMERSA" >BOMBA SUBMERSA</option>
  <option data-tokens= "BOMBA REBOQUE" value="BOMBA REBOQUE" >BOMBA REBOQUE</option>
  <option data-tokens= "BOMBAPORTÁTIL" value="BOMBAPORTATIL" >BOMBAPORTÁTIL</option>
  <option data-tokens= "BOLSA DE APH" value="BOLSA DE APH" >BOLSA DE APH</option>
  <option data-tokens= "BOMBA COSTAL PARA FOGO NO MATO" value="BOMBA COSTAL PARA FOGO NO MATO" >BOMBA COSTAL PARA FOGO NO MATO</option>
  <option data-tokens= "BOTE INFLÁVEL" value="BOTE INFLAVEL" >BOTE INFLÁVEL</option>
  <option data-tokens= "CAIXA TÉRMICA" value="CAIXA TERMICA" >CAIXA TÉRMICA</option>
  <option data-tokens= "CABO DE AÇO" value="CABO DE ACO" >CABO DE AÇO</option>
  <option data-tokens= "CAMBÃO" value="CAMBÃO" >CAMBÃO</option>
  <option data-tokens="CHAVE ALLEN" value="CHAVE ALLEN">CHAVE ALLEN</option>
  
<option data-tokens="CHAVES DE BOCA" value="CHAVES DE BOCA">CHAVES DE BOCA</option>
  <option data-tokens= "CHAVE AMERICANA" value="CHAVE AMERICANA" >CHAVE AMERICANA</option>
  <option data-tokens= "CHAVE DE MANGUEIRA" value="CHAVE DE MANGUEIRA" >CHAVE DE MANGUEIRA</option>
  <option data-tokens= "CHAVE DE HIDRANTE" value="CHAVE DE HIDRANTE" >CHAVE DE HIDRANTE</option>
  <option data-tokens= "CHAVE DE MANGOTE" value="CHAVE DE MANGOTE" >CHAVE DE MANGOTE</option>
  <option data-tokens= "CHAVE DE MUNHÃO" value="CHAVE DE MUNHAO" >CHAVE DE MUNHÃO</option>
  <option data-tokens= "CHAVE DE RODA" value="CHAVE DE RODA" >CHAVE DE RODA</option>
  <option data-tokens= "CHAVE DE VELA" value="CHAVE DE VELA" >CHAVE DE VELA</option>
  <option data-tokens= "CHAVE DE ELEVADOR" value="CHAVE DE ELEVADOR" >CHAVE DE ELEVADOR</option>
  <option data-tokens= "CONE DE SINALIZAÇÃO" value="CONE DE SINALIZACAO" >CONE DE SINALIZAÇÃO</option>
  <option data-tokens= "CORDA DE SALVAMENTO" value="CORDA DE SALVAMENTO" >CORDA DE SALVAMENTO</option>
  <option data-tokens= "CORDA DE NYLON" value="CORDA DE NYLON" >CORDA DE NYLON</option>
  <option data-tokens= "CORDA COMUM" value="CORDA COMUM" >CORDA COMUM</option>
  <option data-tokens= "CONJUNTO DE APROXIMAÇÃO (CALÇA / CAPA)" value="CONJUNTO DE APROXIMACAO (CALÇA / CAPA)" >CONJUNTO DE APROXIMAÇÃO (CALÇA / CAPA)</option>
  <option data-tokens= "CONJUNTO FRESS SEGER" value="CONJUNTO FRESS SEGER" >CONJUNTO FRESS SEGER</option>
  <option data-tokens= "CAPACETE SALVAMENTO" value="CAPACETE SALVAMENTO" >CAPACETE SALVAMENTO</option>
  <option data-tokens= "CAPACETE INCÊNDIO" value="CAPACETE INCENDIO" >CAPACETE INCÊNDIO</option>
  <option data-tokens= "CAPACETE INCENDIO FLOR" value="CAPACETE INCENDIO FLOR" >CAPACETE INCENDIO FLOR</option>
  <option data-tokens= "CAPA DE CHUVA" value="CAPA DE CHUVA" >CAPA DE CHUVA</option>
  <option data-tokens= "CANTIL" value="CANTIL" >CANTIL</option>
  <option data-tokens= "CINTO SALVAMEN" value="CINTO SALVAMEN" >CINTO SALVAMEN</option>
  <option data-tokens= "CADEIRINHA SALVAMENTO" value="CADEIRINHA SALVAMENTO" >CADEIRINHA SALVAMENTO</option>
  <option data-tokens= "CADEIRÃO  PRAIA" value="CADEIRAO  PRAIA" >CADEIRÃO  PRAIA</option>
  <option data-tokens= "CILINDRO PA" value="CILINDRO PA" >CILINDRO PA</option>
  <option data-tokens= "COLETE DE SINALIZAÇÃO" value="COLETE DE SINALIZACAO" >COLETE DE SINALIZAÇÃO</option>
  <option data-tokens= "COLETE SALVA  VIDAS" value="COLETE SALVA  VIDAS" >COLETE SALVA  VIDAS</option>
  <option data-tokens= "COLETOR" value="COLETOR" >COLETOR</option>

 
  <option data-tokens= "COMPRESSOR DE AR" value="COMPRESSOR DE AR" >COMPRESSOR DE AR</option>
  <option data-tokens= "CONJUNTO EPR" value="CONJUNTO EPR" >CONJUNTO EPR</option>
   <option data-tokens=  "CORTADOR DE GRAMA", value= "CORTADOR DE GRAMA" > "CORTADOR DE GRAMA</option>
  <option data-tokens= "DERIVANTE" value="DERIVANTE" >DERIVANTE</option>
  <option data-tokens= "DRAGA MANUAL" value="DRAGA MANUAL" >DRAGA MANUAL</option>
  <option data-tokens= "DIVISOR TRES SAIDAS" value="DIVISOR TRES SAIDAS" >DIVISOR TRES SAIDAS</option>
  <option data-tokens= "DIVISÃO DE DUAS SAÍDAS" value="DIVISAO DE DUAS SAIDAS" >DIVISÃO DE DUAS SAÍDAS</option>
  <option data-tokens= "DESENCARCERADOR A ÓLEO" value="DESENCARCERADOR A OLEO" >DESENCARCERADOR A ÓLEO</option>
  <option data-tokens= "DESENCARCERADOR ELÉTRICO" value="DESENCARCERADOR ELETRICO" >DESENCARCERADOR ELÉTRICO</option>
  <option data-tokens= "DESCENSOR INDY" value="DESCENSOR INDY" >DESCENSOR INDY</option>
  <option data-tokens= "DESFRIBILADOR" value="DESFRIBILADOR" >DESFRIBILADOR</option>
  <option data-tokens= "ESCADA DE MADEIRA" value="ESCADA DE MADEIRA" >ESCADA DE MADEIRA</option>
  <option data-tokens= "ESCADA EM  FIBRA" value="ESCADA EM  FIBRA" >ESCADA EM  FIBRA</option>
  <option data-tokens= "ESCADA EM ALUMÍNIO" value="ESCADA EM ALUMINIO" >ESCADA EM ALUMÍNIO</option>
  <option data-tokens= "ESCADA DE CORDA" value="ESCADA DE CORDA" >ESCADA DE CORDA</option>
  <option data-tokens= "ESCALER" value="ESCALER" >ESCALER</option>
  <option data-tokens= "ESGUICHO  2 ½”" value="ESGUICHO  2 ½”" >ESGUICHO  2 ½”</option>
  <option data-tokens= "ESGUICHO 1 ½”" value="ESGUICHO 1 ½”" >ESGUICHO 1 ½”</option>
  <option data-tokens= "ESGUICHO CANHÃO" value="ESGUICHO CANHAO" >ESGUICHO CANHÃO</option>
  <option data-tokens= "ESGUICHO NPU" value="ESGUICHO NPU" >ESGUICHO NPU</option>
  <option data-tokens= "ESGUICHO AGULHETA" value="ESGUICHO AGULHETA" >ESGUICHO AGULHETA</option>
  <option data-tokens= "ESGUICHO PROPORCIONADOR DE ESPUMA 2 ½”" value="ESGUICHO PROPORCIONADOR DE ESPUMA 2 ½”" >ESGUICHO PROPORCIONADOR DE ESPUMA 2 ½”</option>
  <option data-tokens= "ESGUICHO PPROPORCIONADOR DE ESPUMA 1 ½”" value="ESGUICHO PPROPORCIONADOR DE ESPUMA 1 ½”" >ESGUICHO PPROPORCIONADOR DE ESPUMA 1 ½”</option>
  <option data-tokens= "ENXADA" value="ENXADA" >ENXADA</option>
  <option data-tokens= "ENXADECO" value="ENXADECO" >ENXADECO</option>
  <option data-tokens= "EXPANSOR" value="EXPANSOR" >EXPANSOR</option>
  <option data-tokens= "FOICE" value="FOICE" >FOICE</option>
  <option data-tokens= "FACÃO OUTERÇADO" value="FACAO OUTERÇADO" >FACÃO OUTERÇADO</option>
  <option data-tokens= "FERRO DE COVA" value="FERRO DE COVA" >FERRO DE COVA</option>
  <option data-tokens= "FITA DE ANCORAGEM" value="FITA DE ANCORAGEM" >FITA DE ANCORAGEM</option>
  <option data-tokens= "FLUTSPUMA (FLUTUADOR DE SALVAMENTO AQUÁTICO)" value="FLUTSPUMA (FLUTUADOR DE SALVAMENTO AQUÁTICO)" >FLUTSPUMA (FLUTUADOR DE SALVAMENTO AQUÁTICO)</option>
  <option data-tokens= "FURADEIRA" value="FURADEIRA" >FURADEIRA</option>
  <option data-tokens= "GAIOLA" value="GAIOLA" >GAIOLA</option>
  <option data-tokens= "GADANHO" value="GADANHO" >GADANHO</option>
  <option data-tokens= "GARFO" value="GARFO" >GARFO</option>
  <option data-tokens= "GARATÉIA" value="GARATEIA" >GARATÉIA</option>
  <option data-tokens= "GUARDA-SOL" value="GUARDA-SOL" >GUARDA-SOL</option>
  <option data-tokens= "HOLOFOTE SIMPLES" value="HOLOFOTE SIMPLES" >HOLOFOTE SIMPLES</option>
  <option data-tokens= "HOLOFOTE COM TRIPÉ" value="HOLOFOTE COM TRIPE" >HOLOFOTE COM TRIPÉ</option>
  <option data-tokens= "HOSPITAL CAMPANHA" value="HOSPITAL CAMPANHA" >HOSPITAL CAMPANHA</option>
  <option data-tokens= "LANTERNA RECARREGÁVEL" value="LANTERNA RECARREGAVEL" >LANTERNA RECARREGÁVEL</option>
  <option data-tokens= "LINGA DE AÇO" value="LINGA DE ACO" >LINGA DE AÇO</option>
  <option data-tokens= "LUVA ALTA TENSÃO" value="LUVA ALTA TENSAO" >LUVA ALTA TENSÃO</option>
  <option data-tokens= "LUVA RASPA DE COURO" value="LUVA RASPA DE COURO" >LUVA RASPA DE COURO</option>
  <option data-tokens= "LUVA DE VAQUETA" value="LUVA DE VAQUETA" >LUVA DE VAQUETA</option>
  <option data-tokens= "LUVA DE SALVAMENTO" value="LUVA DE SALVAMENTO" >LUVA DE SALVAMENTO</option>
  <option data-tokens= "LUVA DE INCENDIO" value="LUVA DE INCENDIO" >LUVA DE INCENDIO</option>
  <option data-tokens= "MACA PVC (cesto)" value="MACA PVC (cesto)" >MACA PVC (cesto)</option>
  <option data-tokens= "MACA LONA" value="MACA LONA" >MACA LONA</option>
  <option data-tokens= "MACA INFLAVEL" value="MACA INFLAVEL" >MACA INFLAVEL</option>
  <option data-tokens= "MACA COM RODAS" value="MACA COM RODAS" >MACA COM RODAS</option>
  <option data-tokens= "MÁSCARA CONTRA GASES" value="MASCARA CONTRA GASES" >MÁSCARA CONTRA GASES</option>
  <option data-tokens= "MÁSCARA PANORÂMICA" value="MASCARA PANORÂMICA" >MÁSCARA PANORÂMICA</option>
  <option data-tokens= "MACACO MECÂNICO" value="MACACO MECANICO" >MACACO MECÂNICO</option>
  <option data-tokens= "MACHADO LENHADOR" value="MACHADO LENHADOR" >MACHADO LENHADOR</option>
  <option data-tokens= "MACHADO BOMBEIRO" value="MACHADO BOMBEIRO" >MACHADO BOMBEIRO</option>
  <option data-tokens= "MANGUEIRA 1 ½”" value="MANGUEIRA 1 ½”" >MANGUEIRA 1 ½”</option>
  <option data-tokens= "MANGUEIRA 2 ½”" value="MANGUEIRA 2 ½”" >MANGUEIRA 2 ½”</option>
  <option data-tokens= "MANGOTE 4”" value="MANGOTE 4”" >MANGOTE 4”</option>
  <option data-tokens= "MACHADINHA BOMBEIRO" value="MACHADINHA BOMBEIRO" >MACHADINHA BOMBEIRO</option>
  <option data-tokens= "MALHO" value="MALHO" >MALHO</option>
  <option data-tokens= "MARTELO UNIVERSAL" value="MARTELO UNIVERSAL" >MARTELO UNIVERSAL</option>
  <option data-tokens= "MICRO RETÍFICA" value="MICRO RETIFICA" >MICRO RETÍFICA</option>
  <option data-tokens= "MOLA MOSQUETÃO" value="MOLA MOSQUETAO" >MOLA MOSQUETÃO</option>
  <option data-tokens= "MACHADINHA BOMBEIRO" value="MOCHILA COSTAL" >MOCHILA COSTAL</option>
  <option data-tokens= "MOTOSERRA" value="MOTOSERRA" >MOTOSERRA</option>
  <option data-tokens= "MOTO ESMERIL" value="MOTO ESMERIL" >MOTO ESMERIL</option>
  <option data-tokens= "MOTO  SERRA SABRE" value="MOTO  SERRA SABRE" >MOTO  SERRA SABRE</option>
  <option data-tokens= "MOTO BOMBA DIESEL" value="MOTO BOMBA DIESEL" >MOTO BOMBA DIESEL</option>
  <option data-tokens= "MOTO BOMBAELÉTRICA" value="MOTO BOMBAELETRICA" >MOTO BOMBAELÉTRICA</option>
  <option data-tokens= "MOTO GERADOR" value="MOTO GERADOR" >MOTO GERADOR</option>
  
  <option data-tokens= "MOTO PODA" value="MOTO PODA" >MOTO PODA</option>
  <option data-tokens= "MANILHA" value="MANILHA" >MANILHA</option>
  <option data-tokens="MCLEOD" value="MCLEOD">MCLEOD</option>
  <option data-tokens= "MOTOR DE P  15 HP" value="MOTOR DE P  15 HP" >MOTOR DE P  15 HP</option>
  <option data-tokens= "MOTOR DE P  25 HP" value="MOTOR DE P  25 HP" >MOTOR DE P  25 HP</option>
  <option data-tokens= "MOTOR DE POPA 40 HP" value="MOTOR DE POPA 40 HP" >MOTOR DE POPA 40 HP</option>
  <option data-tokens= "MOTOR DE POPA 90 HP" value="MOTOR DE POPA 90 HP" >MOTOR DE POPA 90 HP</option>
  <option data-tokens= "MOTOR DE POPA 115 HP" value="MOTOR DE POPA 115 HP" >MOTOR DE POPA 115 HP</option>
  <option data-tokens= "MISTURADOR ENTRE LINHAS" value="MISTURADOR ENTRE LINHAS" >MISTURADOR ENTRE LINHAS</option>
  <option data-tokens= "NADADEIRA" value="NADADEIRA" >NADADEIRA</option>
  <option data-tokens= "OCULOS PROTEÇÃO" value="OCULOS PROTECAO" >OCULOS PROTEÇÃO</option>
  <option data-tokens= "OXÍMETRO DE PULSO" value="OXIMETRO DE PULSO" >OXÍMETRO DE PULSO</option>
  <option data-tokens= "PAR DE ASCENSOR DE PUNHO" value="PAR DE ASCENSOR DE PUNHO" >PAR DE ASCENSOR DE PUNHO</option>

  <option data-tokens= "PINO PÁRA CHOQUE" value="PINO PÁRA CHOQUE" >PINO PÁRA CHOQUE</option>
  <option data-tokens= "PÉ DE CABRA" value="PE DE CABRA" >PÉ DE CABRA</option>
  <option data-tokens= "PÁ DE BICO" value="PA DE BICO" >PÁ DE BICO</option>
  <option data-tokens= "PÁ QUADRADA" value="PA QUADRADA" >PÁ QUADRADA</option>
  <option data-tokens= "PRANCHA SALVAMENTO" value="PRANCHA SALVAMENTO" >PRANCHA SALVAMENTO</option>
  <option data-tokens= "PROTETOR AURICULAR" value="PROTETOR AURICULAR" >PROTETOR AURICULAR</option>
  <option data-tokens= "PICARETA" value="PICARETA" >PICARETA</option>
  <option data-tokens= "PINGA FOGO" value="PINGA FOGO" >PINGA FOGO</option>
  <option data-tokens= "PLACA DE ANCORAGEM" value="PLACA DE ANCORAGEM" >PLACA DE ANCORAGEM</option>
  <option data-tokens= "POLICORTE" value="POLICORTE" >POLICORTE</option>
  <option data-tokens= "RALO DE MANGOTE" value="RALO DE MANGOTE" >RALO DE MANGOTE</option>
  <option data-tokens= "RÁDIO HT ANALÓGICO" value="RADIO HT ANALÓGICO" >RÁDIO HT ANALÓGICO</option>
  <option data-tokens= "RÁDIO HT DIGITAL" value="RADIO HT DIGITAL" >RÁDIO HT DIGITAL</option>
  <option data-tokens= "RÁDIO FIXO" value="RADIO FIXO" >RÁDIO FIXO</option>
  <option data-tokens= "RÁDIO VTR" value="RADIO VTR" >RÁDIO VTR</option>
  <option data-tokens= "ROUPA APICULTOR" value="ROUPA APICULTOR" >ROUPA APICULTOR</option>
  <option data-tokens= "ROUPA MERGULHO" value="ROUPA MERGULHO" >ROUPA MERGULHO</option>
  <option data-tokens= "ROUPA SANEAMENTO  C/ BOTA" value="ROUPA SANEAMENTO  C/ BOTA" >ROUPA SANEAMENTO  C/ BOTA</option>
  <option data-tokens="MACHADO PICARETA" value= "MACHADO PICARETA">  MACHADO PICARETA  </option>
      </option>
<option data-tokens="BAMBI BUCKET" value= "BAMBI BUCKET">  BAMBI BUCKET  </option>
      </option>
<option data-tokens="EXAUSTOR TURBO INSULFRADOR" value= "EXAUSTOR TURBO INSULFRADOR">  EXAUSTOR TURBO INSULFRADOR  </option>
      </option>
<option data-tokens="BOMBA HIDRAULICA CENTRIFUGA " value= "BOMBA HIDRAULICA CENTRIFUGA">   BOMBA HIDRAULICA CENTRIFUGA   </option>
      </option>
<option data-tokens="CILINDRO DE OXIGENIO PARA MERGULHO" value= "CILINDRO DE OXIGENIO PARA MERGULHO">  CILINDRO DE OXIGENIO PARA MERGULHO  </option>
      </option>
<option data-tokens="VALVULA DE MERGULHO 2 ESTAGIO" value= "VALVULA DE MERGULHO 2 ESTAGIO"> VALVULA DE MERGULHO 2 ESTAGIO </option>
      </option>
<option data-tokens="VALVULA DE MERGULHO 1 ESTAGIO" value= "VALVULA DE MERGULHO 1 ESTAGIO"> VALVULA DE MERGULHO 1 ESTAGIO </option>
      </option>
<option data-tokens="MASCARA FULL FACE" value= "MASCARA FULL FACE"> MASCARA FULL FACE </option>
      </option>
<option data-tokens="RADIO COMUNICADOR DE MERGULHO" value= "RADIO COMUNICADOR DE MERGULHO"> RADIO COMUNICADOR DE MERGULHO </option>
      </option>
<option data-tokens="LEME" value= "LEME">  LEME  </option>
    <option data-tokens= "ROCADEIRA MANUAL" value="ROCADEIRA MANUAL" >ROÇADEIRA MANUAL</option>
    <option data-tokens= "ROCADEIRA ELETRICA" value="ROCADEIRA ELETRICA">ROÇADEIRA ELÉTRICA</option>
    <option data-tokens= "ROCADEIRA A DIESEL" value="ROCADEIRA A DIESEL" >ROÇADEIRA A DIESEL</option>
  <option data-tokens= "REDUÇÃO" value="REDUCAO" >REDUÇÃO</option>
  <option data-tokens= "ROLDANA SIMPLES" value="ROLDANA SIMPLES" >ROLDANA SIMPLES</option>
  <option data-tokens= "ROLDANA DUPLA" value="ROLDANA DUPLA" >ROLDANA DUPLA</option>
  <option data-tokens= "SIRENE INTERNA" value="SIRENE INTERNA" >SIRENE INTERNA</option>
  <option data-tokens= "SUPORTE BAK PAK" value="SUPORTE BAK PAK" >SUPORTE BAK PAK</option>
  <option data-tokens= "TENDA GV" value="TENDA GV" >TENDA GV</option>
  <option data-tokens= "TÁBUA DE SALVAMENTO" value="TABUA DE SALVAMENTO" >TÁBUA DE SALVAMENTO</option>
  <option data-tokens= "TALHA" value="TALHA" >TALHA</option>
  <option data-tokens= "TALABARTE" value="TALABARTE" >TALABARTE</option>
  <option data-tokens="TESADO" value="TESADO">TESADO</option>
  <option data-tokens="TIFOR" value="TIFOR">TIFOR</option>
  <option data-tokens= "TORRE DE ILUMINAÇÃO" value="TORRE DE ILUMINACAO" >TORRE DE ILUMINAÇÃO</option>
    <option data-tokens= "TUBO DE RESGATE" value="TUBO DE RESGATE" >TUBO DE RESGATE</option>

  <option data-tokens= "TRIPÉ RESG POÇO" value="TRIPE RESG POcO" >TRIPÉ RESG POÇO</option>
  <option data-tokens="TRIPE DE ILUMINACAO" value="TRIPE DE ILUMINACAO">TRIPE DE ILUMINACAO</option>
  <option data-tokens="VÁLVULA MERGULHO" value="VALVULA DE MERGULHO">VÁLVULA DE MERGULHO</option>


                </select>
            </div> 
             <p id="passwordHelpBlock" class="form-text text-muted"> Escolha o Material.</p>
          </div>
   
          <div class="col-lg-3">
            <div class="input-group">
              <span class="input-group-addon">UBM</span>
              <select class="form-control" data-live-search="true" name="ub">
                <option data-tokens="qualquer" value="qualquer">Qualquer</option>
                <option data-tokens="1 GBM" value="1 GBM"> 1 GBM </option>
                <option data-tokens="2 GBM" value="2 GBM">  2 GBM </option>
                <option data-tokens="3 GBM" value="3 GBM">  3 GBM </option>
                  <option data-tokens="4 GBM" value="4 GBM">  4 GBM </option>
<option data-tokens="5 GBM" value="5 GBM">  5 GBM </option>
<option data-tokens="6 GBM" value="6 GBM">  6 GBM </option>
<option data-tokens="7 GBM" value="7 GBM">  7 GBM </option>
<option data-tokens="8 GBM" value="8 GBM">  8 GBM </option>
<option data-tokens="9 GBM" value="9 GBM">  9 GBM </option>
<option data-tokens="10 GBM" value="10 GBM">  10 GBM  </option>
<option data-tokens="11 GBM" value="11 GBM">  11 GBM  </option>
<option data-tokens="12 GBM" value="12 GBM">  12 GBM  </option>
<option data-tokens="13 GBM" value="13 GBM">  13 GBM  </option>
<option data-tokens="14 GBM" value="14 GBM">  14 GBM  </option>
<option data-tokens="15 GBM" value="15 GBM">  15 GBM  </option>
<option data-tokens="16 GBM" value="16 GBM">  16 GBM  </option>
<option data-tokens="17 GBM" value="17 GBM">  17 GBM  </option>
<option data-tokens="18 GBM" value="18 GBM">  18 GBM  </option>
<option data-tokens="19 GBM" value="19 GBM">  19 GBM  </option>
<option data-tokens="20 GBM" value="20 GBM">  20 GBM  </option>
<option data-tokens="21 GBM" value="21 GBM">  21 GBM  </option>
<option data-tokens="22 GBM" value="22 GBM">  22 GBM  </option>
<option data-tokens="23 GBM" value="23 GBM">  23 GBM  </option>
<option data-tokens="24 GBM" value="24 GBM">  24 GBM  </option>
<option data-tokens="25 GBM" value="25 GBM">  25 GBM  </option>
<option data-tokens="26 GBM" value="26 GBM">  26 GBM  </option>
<option data-tokens="27 GBM" value="27 GBM">  27 GBM  </option>
<option data-tokens="28 GBM" value="28 GBM">  28 GBM  </option>
<option data-tokens="29 GBM" value="29 GBM">  29 GBM  </option>
<option data-tokens="30 GBM" value="30 GBM">  30 GBM  </option>
<option data-tokens="1 GPA" value="1 GPA">  1 GPA </option>
<option data-tokens="1 GBS" value="1 GBS">  1 GBS </option>
<option data-tokens="1 GMAF" value="1 GMAF">  1 GMAF  </option>
<option data-tokens="CFAE" value="CFAE">  CFAE  </option>    
<option data-tokens="BM4" value="BM4">BM4</option>                   
              </select>
            </div>
            <p id="passwordHelpBlock" class="form-text text-muted">
             Escolha a UBM.</p>
          </div>
           
        <div class="col-lg-2">
          <button type="submit" class="btn btn-default " name="pesquisar">Pesquisar</button>
        </div>
      </div>
      
  </form>
     


        <?php
          $nomematerial = array("TUBO DE RESGATE","MOCHILA COSTAL","ABAFADOR INCENDIO", "AFT", "ALAVANCA", "APARELHO OITO", "APARELHO PA", "APARELHO CORTA A FRIO", "ANEL DE FITA", "APARELHO TIFFOR", "ALICATE UNIVERSAL", "ALICATE  DE PRESSAO", "ANILHA", "APARELHO CROCK", "APARELHO EXTINTOR INCÊNDIO", "APARELHO GPS", "APARELHO GERADOR ESPUMA", "ADAPTADOR FEMEA", "ADAPTADOR MACHO", "ASCENSOR DESCENSOR", "BOIA SALVA VIDAS", "BALACLAVA", "BANDEIRA GV", "BARRACA GV (tenda)", "BARRACA CEDEC", "BLOCANTE", "BINÓCULO", "BOTA DE INCÊNDIO", "BOTA  CANO LONGO","BOMBA A VACUO", "BOMBA FLUTUANTE", "BOMBA SUBMERSA", "BOMBA REBOQUE", "BOMBAPORTATIL", "BOLSA DE APH", "BOMBA COSTAL PARA FOGO NO MATO", "BOTE INFLAVEL", "CAIXA TERMICA", "CABO DE ACO", "CAMBAO","CORTADOR DE GRAMA","CHAVE ALLEN","CHAVES DE BOCA", "CHAVE AMERICANA", "CHAVE DE MANGUEIRA", "CHAVE DE HIDRANTE", "CHAVE DE MANGOTE", "CHAVE DE MUNHAO", "CHAVE DE RODA", "CHAVE DE VELA", "CHAVE DE ELEVADOR", "CONE DE SINALIZACAO", "CORDA DE SALVAMENTO", "CORDA DE NYLON", "CORDA COMUM", "CONJUNTO DE APROXIMACAO (CALÇA / CAPA)", "CONJUNTO FRESS SEGER", "CONJUNTO EPR","CAPACETE SALVAMENTO", "CAPACETE INCENDIO", "CAPACETE INCENDIO FLOR", "CAPA DE CHUVA", "CANTIL", "CINTO SALVAMEN", "CADEIRINHA SALVAMENTO", "CADEIRAO  PRAIA", "CILINDRO PA", "COLETE DE SINALIZACAO", "COLETE SALVA  VIDAS", "COLETOR", "COMPRESSOR DE AR", "DERIVANTE","DESCENSOR INDY" , "DRAGA MANUAL", "DIVISOR TRES SAIDAS", "DIVISAO DE DUAS SAIDAS", "DESENCARCERADOR A OLEO", "DESENCARCERADOR ELETRICO","DESFRIBILADOR", "ESCADA DE MADEIRA", "ESCADA EM  FIBRA", "ESCADA EM ALUMINIO", "ESCADA DE CORDA", "ESCALER", "ESGUICHO  2 ½”", "ESGUICHO 1 ½”", "ESGUICHO CANHAO", "ESGUICHO NPU", "ESGUICHO AGULHETA", "ESGUICHO PROPORCIONADOR DE ESPUMA 2 ½”", "ESGUICHO PPROPORCIONADOR DE ESPUMA 1 ½”", "ENXADA", "ENXADECO", "EXPANSOR", "FOICE", "FACAO OUTERCADO", "FERRO DE COVA", "FITA DE ANCORAGEM", "FLUTSPUMA (FLUTUADOR DE SALVAMENTO AQUÁTICO)","FURADEIRA", "GAIOLA", "GADANHO", "GARFO", "GARATÉIA", "GUARDA-SOL", "HOLOFOTE SIMPLES", "HOLOFOTE COM TRIPÉ", "HOSPITAL CAMPANHA", "LANTERNA RECARREGÁVEL", "LINGA DE ACO", "LUVA ALTA TENSAO", "LUVA RASPA DE COURO", "LUVA DE VAQUETA", "LUVA DE SALVAMENTO", "LUVA DE INCENDIO", "MACA PVC (cesto)", "MACA LONA", "MACA COM RODAS","MACA INFLAVEL", "MASCARA CONTRA GASES", "MASCARA PANORAMICA", "MACACO MECANICO", "MACHADO LENHADOR", "MACHADO BOMBEIRO", "MANGUEIRA 1 ½”", "MANGUEIRA 2 ½”", "MANGOTE 4”", "MACHADINHA BOMBEIRO", "MALHO", "MARTELO UNIVERSAL", "MICRO RETIFICA", "MOLA MOSQUETAO", "MOTOSERRA", "MOTO ESMERIL", "MOTO  SERRA SABRE", "MOTO BOMBA DIESEL", "MOTO BOMBAELETRICA", "MOTO GERADOR","MOTO PODA", "MANILHA", "MOTOR DE P  15 HP", "MOTOR DE P  25 HP", "MOTOR DE POPA 40 HP", "MOTOR DE POPA 90 HP", "MOTOR DE POPA 115 HP", "MISTURADOR ENTRE LINHAS", "NADADEIRA", "OCULOS PROTEÇÃO", "OXÍMETRO DE PULSO", "PINO PARA CHOQUE", "PE DE CABRA", "PA DE BICO", "PA QUADRADA","PAR DE ASCENSOR DE PUNHO", "PRANCHA SALVAMENTO", "PROTETOR AURICULAR", "PICARETA", "PINGA FOGO", "PLACA DE ANCORAGEM","POLICORTE", "RALO DE MANGOTE", "RADIO HT ANALOGICO", "RADIO HT DIGITAL", "RADIO FIXO", "RADIO VTR", "ROUPA APICULTOR", "ROUPA MERGULHO", "ROUPA SANEAMENTO  C/ BOTA","ROCADEIRA MANUAL","ROCADEIRA ELETRICA","ROCADEIRA A DIESEL", "REDUCAO", "ROLDANA SIMPLES", "ROLDANA DUPLA", "SIRENE INTERNA", "SUPORTE BAK PAK", "TENDA GV", "TÁBUA DE SALVAMENTO", "TALHA", "TALABARTE", "TIFOR","TORRE DE ILUMINACAO", "TRIPE RESG POÇO","TRIPE DE ILUMINACAO", "VALVULA MERGULHO","TESADO","MCLEOD","MACHADO PICARETA","BAMBI BUCKET","EXAUSTOR TURBO INSULFRADOR","BOMBA HIDRAULICA CENTRIFUGA ","CILINDRO DE OXIGENIO PARA MERGULHO","VALVULA DE MERGULHO 2 ESTAGIO","VALVULA DE MERGULHO 1 ESTAGIO","MASCARA FULL FACE","RADIO COMUNICADOR DE MERGULHO","LEME");
            $tamanhonomematerial= count($nomematerial);

            $ubms = array("1 GBM", "2 GBM", "3 GBM", "4 GBM", "5 GBM", "6 GBM", "7 GBM", "8 GBM", "9 GBM", "10 GBM", "11 GBM", "12 GBM", "13 GBM", "14 GBM", "15 GBM", "16 GBM", "17 GBM", "18 GBM", "19 GBM", "20 GBM", "21 GBM", "22 GBM", "23 GBM", "24 GBM", "25 GBM", "26 GBM", "27 GBM", "28 GBM", "29 GBM", "30 GBM", "1 GPA", "1 GBS", "1 GMAF","CFAE","BM4");
            $tamanhoubms= count($ubms);
      ?>






  <?php if(isset($_POST['pesquisar']) ): ?>
      
    <?php 
    $ub=$_POST['ub']; 
    $situacao=$_POST['situacao'];
    $material=$_POST['material'];    
    ?>
  

  <?php if($_POST['material']=='qualquer' && $_POST['ub']!='qualquer'): ?>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th>UBM</th>
    <th>Material</th>
    <th>Qt. Operante</th>
    <th>Qt. Inoperante</th>
    <th>Total</th>
    </tr>
  </thead>

  <?php foreach ($nomematerial as $value): ?>
    
    <?php
       
        $total = "SELECT material,situacao,ubm FROM materialoperacional WHERE  material='$value' and ubm='$ub' ";
        $operantes = "SELECT situacao FROM materialoperacional WHERE  situacao='Operante' and material='$value' and ubm='$ub' ";
        $inoperantes = "SELECT situacao FROM materialoperacional WHERE situacao='Inoperante' and material='$value' and ubm='$ub' ";
      
        $resultTotal = mysqli_query($conn, $total);
        $countTotal=  mysqli_num_rows($resultTotal);
        $resultOperantes = mysqli_query($conn, $operantes);
        $countOperantes=  mysqli_num_rows($resultOperantes);
        $resultInoperantes = mysqli_query($conn, $inoperantes);
        $countInoperantes=  mysqli_num_rows($resultInoperantes);

        ?>

          <tbody>
            <tr>
              <td><?php echo $ub; ?></td>
            <td><?php echo $value; ?></td>
            <td><?php echo $countOperantes; ?></td>
            <td><?php echo $countInoperantes;?></td>
            <td><?php echo $countTotal; ?></td>
            </tr>
          


  <?php endforeach; ?>

  </tbody>

  </table>

  </body>

  <?php endif; ?>




       <?php if ($_POST['material']!='qualquer' && $ub != 'qualquer'): ?>
      
        <?php 
        $total = "SELECT material,situacao,ubm FROM materialoperacional WHERE ubm='$ub' and material='$material'  ";
        $operantes = "SELECT situacao FROM materialoperacional WHERE ubm='$ub' and situacao='Operante' and material='$material'";
        $inoperantes = "SELECT situacao FROM materialoperacional WHERE ubm='$ub' and situacao='Inoperante' and material='$material' ";
      
        $resultTotal = mysqli_query($conn, $total);
        $countTotal=  mysqli_num_rows($resultTotal);
      
      
        $resultOperantes = mysqli_query($conn, $operantes);
        $countOperantes=  mysqli_num_rows($resultOperantes);
      
      
      
        $resultInoperantes = mysqli_query($conn, $inoperantes);
        $countInoperantes=  mysqli_num_rows($resultInoperantes);
      
        ?>

       <table class="table table-bordered">
          <thead>
            <tr>
              <th>UBM</th>
              <th>Material</th>
              <th>Qt. Operante</th>
              <th>Qt. Inoperante</th>
             <th>Total</th>>
              
            
          </tr>
          </thead>
        <tbody>
         <tr>
          <td><?php echo $ub; ?></td>
           <td><?php echo $material; ?></td>
           <td><?php echo $countOperantes; ?></td>
           <td><?php  echo $countInoperantes;  ?></td>
           <td><?php echo $countTotal ?></td>
          
         </tr>
       </tbody> 
      </table>
    <?php endif; ?>

      <?php if ($_POST['material']=='qualquer' && $_POST['ub']=='qualquer'): ?>

            <?php for($i=0; $i<$tamanhoubms; $i++): ?>

             
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>UBM</th>
                        <th>MATERIAL</th>
                        <th>Qt. Operante</th>
                        <th>Qt. Inoperante</th>
                        <th>TOTAL</th>
                      </tr>

                    </thead>
                    <tbody>
              <?php for ($j=0; $j <$tamanhonomematerial ; $j++): ?>
                    
                          <?php 
        $total = "SELECT material,situacao,ubm FROM materialoperacional WHERE ubm='$ubms[$i]' and material='$nomematerial[$j]'  ";
        $operantes = "SELECT situacao FROM materialoperacional WHERE ubm='$ubms[$i]' and situacao='Operante' and material='$nomematerial[$j] '";
        $inoperantes = "SELECT situacao FROM materialoperacional WHERE ubm='$ubms[$i]' and situacao='Inoperante' and material='$nomematerial[$j]' ";
      
        $resultTotal = mysqli_query($conn, $total);
        $countTotal=  mysqli_num_rows($resultTotal);
      
      
      
        $resultOperantes = mysqli_query($conn, $operantes);
        $countOperantes=  mysqli_num_rows($resultOperantes);
      
      
      
        $resultInoperantes = mysqli_query($conn, $inoperantes);
        $countInoperantes=  mysqli_num_rows($resultInoperantes);
      
        ?>



                      <tr>
                        <th><?php echo $ubms[$i] ?></th>
                        <th><?php echo $nomematerial[$j]; ?></th>
                        <th><?php echo $countOperantes; ?></th>
                        <th><?php echo $countInoperantes; ?></th>
                        <th><?php echo $countTotal; ?></th>
                      </tr>
                    

              <?php endfor ?>      
                </tbody>
                </table>
            <?php endfor ?>
        

      <?php endif; ?>

      <?php if ($_POST['material']!='qualquer' && $ub=='qualquer'): ?>
           <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>UBM </th>
                        <th>Material</th>
                        <th>Qt. Operante</th>
                        <th>Qt. Inoperante</th>
                        <th>TOTAL</th>
                      </tr>
                    </thead>
              <?php for ($i=0; $i <$tamanhoubms ; $i++): ?>
               
                 
                    

                                 <?php 
        $total = "SELECT material,situacao,ubm FROM materialoperacional WHERE ubm='$ubms[$i]' and material='$material'";
        $operantes = "SELECT situacao FROM materialoperacional WHERE ubm='$ubms[$i]' and situacao='Operante' and material='$material'";
        $inoperantes = "SELECT situacao FROM materialoperacional WHERE ubm='$ubms[$i]' and situacao='Inoperante' and material='$material'";
      
        $resultTotal = mysqli_query($conn, $total);
        $countTotal=  mysqli_num_rows($resultTotal);
      
      
      
        $resultOperantes = mysqli_query($conn, $operantes);
        $countOperantes=  mysqli_num_rows($resultOperantes);
      
      
      
        $resultInoperantes = mysqli_query($conn, $inoperantes);
        $countInoperantes=  mysqli_num_rows($resultInoperantes);
      
        ?>

                    <tbody>
                      <tr>
                        <td><?php echo $ubms[$i]; ?></td>
                        <td><?php echo $material; ?></td>
                        <td><?php echo $countOperantes; ?></td>
                        <td><?php echo $countInoperantes; ?></td>
                        <td><?php echo $countTotal; ?></td>
                      </tr>
                 

              <?php endfor ?>
           </tbody>
                  </table>
      <?php endif; ?>


    <?php endif; ?>

 Total: <?php echo $countTotal; ?>
 <br>
 Total Operantes: <?php echo $countOperantes; ?>
<br>
 Total Inoperantes: <?php echo $countInoperantes; ?>

  </div>

  </body>
  </html>
   