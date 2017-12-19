<?php

session_start();

    // se você possui algum cookie relacionado com o login deve ser removido
    session_destroy();
    header("location: http://mytestsite-com-br.umbler.net/index.php");


?>