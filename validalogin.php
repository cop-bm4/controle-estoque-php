<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.

//conxeao com banco de dados
require "db.php"; 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$sql = "SELECT login, senha FROM materialoperacional Where `login` = '$login' AND `senha`= '$senha'";
$result = mysqli_query($conn, $sql);

// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios

/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */

if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;

header('location:home.php');
echo "deu certo";
}
else{
	
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	header('location:credenciaisinvalidas.php');

	
	}

?>