<?php

session_start();
if(isset($_SESSION['logado'])){
    // se você possui algum cookie relacionado com o login deve ser removido
    session_destroy();
    header("location: http://mytestsite-com-br.umbler.net/index.php");
    exit();
}
?>