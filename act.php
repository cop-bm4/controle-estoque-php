<?php
require 'db.php';

$pagador = $_POST['pagador'];
$cargo_pagador = $_POST['cargo_pagador'];
$recebedor = $_POST['recebedor'];
$cargo_recebedor = $POST['cargo_recebedor'];
$qnt_oculos = $REQUEST['q_oculos'];
$qnt_short = $REQUEST['q_short'];
$qnt_camisa = $REQUEST['q_camisa'];
$qnt_solar= $POST['q_solar'];
$qnt_labial = $POST['q_labial'];

$q_oculos= (int)$qnt_oculos;
echo $q_oculos;
echo $qnt_oculos;
echo $qnt_short;
echo $qnt_camisa;
echo $qnt_solar;
echo $qnt_labial;
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
POST
<?php if ($qnt_oculos>2):?>
<h2>deu</h2>
<?php endif; ?>



</form>






</div>


</body>
</html>
