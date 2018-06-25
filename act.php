<?php
require 'db.php';

$pagador = $_POST['pagador'];
$cargo_pagador = $_POST['cargo_pagador'];
$recebdor = $_POST['cargo_recebedor'];
$qnt_oculos = $POST['q_oculos'];
$qnt_short = $POST['q_short'];
$qnt_camisa = $POST['q_camisa'];
$qnt_solar= $POST['q_solar'];
$qnt_labial = $POST['q_labial'];

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
    <label for="inputEmail3" class="col-sm-2 control-label" >Responsável</label>
    <div class="col-sm-10">
      <input value="<?php echo $pagador ?>" type="text" name="pagador" class="form-control" id="inputEmail3" readonly>
    </div>
  </div>



</form>






</div>


</body>
</html>
