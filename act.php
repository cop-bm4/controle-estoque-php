<?php
require 'db.php';

$pagador = $_POST['pagador'];
$cargo_pagador = $_POST['cargo_pagador'];
$recebedor = $_POST['recebedor'];
$cargo_recebedor = $_POST['cargo_recebedor'];
$qnt_oculos = $_REQUEST['q_oculos'];
$qnt_short = $_REQUEST['q_short'];
$qnt_camisa = $_REQUEST['q_camisa'];
$qnt_solar= $_POST['q_solar'];
$qnt_labial = $_POST['q_labial'];

$q_oculos= (int)$qnt_oculos;
$q_short= (int)$qnt_short;
$q_camisa= (int)$qnt_camisa;
$q_solar= (int)$qnt_solar;
$q_labial= (int)$qnt_labial;

 ?>


<html>
<head>
  <title>Pago</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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

  .spanborder> div{
  background-color:#eee;
   border: 5px solid #888;
   border-radius:50px;

  }
  </style>
</head>

<body>

<div class="container">
<h4>Nominal</h4>
<form class="form-horizontal" action="action.php" method="post">

    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label" >Pagador</label>
      <div class="col-sm-10">
        <input value="<?php echo $cargo_pagador." ".$pagador ?>" type="text" name="pagador" class="form-control" id="inputEmail3" readonly>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label" >Recebedor</label>
      <div class="col-sm-10">
        <input value="<?php echo $cargo_recebedor." ".$recebedor ?>" type="text" name="recebedor" class="form-control" id="inputEmail3" readonly>
      </div>
    </div>

<!-- oculos -->
<?php if ($q_oculos>0):?>
<?php

for ($i=0; $i < $q_oculos; $i++): ?>

<div class="form control">
  <label>Nome</label>
  <input type="text" name="militar_oculos[]">
</div>

<div class="form control">
  <label>MF</label>
  <input type="text" name="mf_militar_oculos[]">
</div>

<div class="fomr control">
  <label>N de série</label>
  <input type="text" name=nserie_oculos[]>
</div>

<?php endfor ?>
<?php endif; ?>


<!-- fim oculos -->


<!-- short -->

<?php if ($q_short>0):?>
<?php

for ($j=0; $j < $q_short; $j++): ?>

<div class="form control">
  <label>Nome</label>
  <input type="text" name="militar_short[]">
</div>

<div class="form control">
  <label>MF</label>
  <input type="text" name="mf_militar_short[]">
</div>

<div class="fomr control">
  <label>N de série</label>
  <input type="text" name=nserie_short[]>
</div>

<?php endfor ?>
<?php endif; ?>

<!-- fim short -->



<!-- camisa -->

<?php if ($q_camisa>0):?>
<?php

for ($j=0; $j < $q_camisa; $j++): ?>

<div class="form control">
  <label>Nome</label>
  <input type="text" name="militar_camisa[]">
</div>

<div class="form control">
  <label>MF</label>
  <input type="text" name="mf_militar_camisa[]">
</div>

<div class="fomr control">
  <label>N de série</label>
  <input type="text" name=nserie_camisa[]>
</div>

<?php endfor ?>
<?php endif; ?>

<!-- fim camisa -->







</form>






</div>


</body>
</html>
