<?php

session_start();

    // se você possui algum cookie relacionado com o login deve ser removido
    session_destroy();
    header("location: http://copbm4-com-br.umbler.net/index.php");


?>