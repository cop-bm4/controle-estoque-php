<html>
<head>

  <?php
  require 'head.php';

  require 'db.php';

  ?>

</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="http://bm4cop-org.umbler.net">home</a>
      <ul class="nav navbar-nav navbar-right">

      </ul>
  </nav>


  <div class="container">
    <h3>Novo pagamento</h3>
      <form class="form-horizontal" action="action.php" method="post">

<!-- pagador & recebedor -->

<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Pagador</label>
  <div class="col-sm-10">
    <input type="text" name="pagador" class="form-control" id="inputEmail3" placeholder="Responsável pelo pagamento">
  </div>
</div>

  <div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Função do Pagador</label>
  <div class="col-sm-10">
    <input type="text" name="cargo_pagador" class="form-control" id="inputEmail3" placeholder="Cargo do recebedor">
  </div>
</div>

<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Recebedor</label>
  <div class="col-sm-10">
    <input type="text" name="recebedor" class="form-control" id="inputEmail3" placeholder="Responsável pelo recebimento">
  </div>
</div>


<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Função do Recebedor</label>
  <div class="col-sm-10">
    <input type="text" name="cargo_recebedor" class="form-control" id="inputEmail3" placeholder="Cargo do recebedor">
  </div>
</div>




<!-- fim pagador & recebedor -->

<h5>Material</h5>


  <p><label><input type="checkbox" id="oculos"> oculos</label></p>
  <p><label><input type="checkbox" id="short">Short </label></p>
  <p><label><input type="checkbox" id="camisa_de_gv">Camisa de GV </label></p>
  <p><label><input type="checkbox" id="protetor_solar">protetor solar </label></p>
  <p><label><input type="checkbox" id="protetor_labial">protetor labial </label></p>
  <p class="conditional" data-condition="#oculos"><label><input type="checkbox" name="example2"> Really super sure?</label>
  </p>

  <p class="conditional" data-condition="#example1 && example2">
    <label>Then type "yay": </label>
    <input type="text" id="example3" placeholder="yay">
  </p>

  <p class="conditional msg" data-condition="#oculos">
    deu
</p>

<p class="conditional msg" data-condition="#oculos">
  <label>Quantidade óculos</label>
  <input type="text" id="quantidade_oculos" placeholder="digite o numero de óculos">
</p>

  <!-- This will be shown only if BOTH examle1 and examle2 are checked AND 'yay' typed in examle3 -->
  <p class="conditional msg"
     data-condition="#example1 && example2 && #example3 == 'yay'">
     Both are selected and YAY is typed!
  </p>
  <p>
    <label>Pick two or three:</label>
    <select class="select" name="example5">
      <option>....</option>
      <option value="one">One!</option>
      <option value="two">Two!</option>
      <option value="three">Three!</option>
      <option value="four">Four!</option>
    </select>
  </p>
  <div class="conditional msg"
       data-condition="['two','three'].includes(example5)">
     See?! It works with selects!
   </div>

</form>

</div>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"
          integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
          crossorigin="anonymous">
  </script>
  <script src="/jQuery-Plugin-For-Conditional-Form-Fields-conditionize-js/conditionize.flexible.jquery.js"></script>
  <script>$('.conditional').conditionize();
</script>
</body>


</html>
