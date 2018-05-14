<?php

session_start();

    // se você possui algum cookie relacionado com o login deve ser removido
    session_destroy();
    header("location: http://bm4cop-org.umbler.net/index.php");


?>