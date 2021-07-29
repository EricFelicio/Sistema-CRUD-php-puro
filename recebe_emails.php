<?php
session_start();
include ('verifica_sessao.php');

//Verificando se conseguiu conectar ao banco de dados.
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'root');
define('BD', 'apolo20_dev');
$conexao = mysqli_connect(HOST, USUARIO, SENHA, BD) or die ('Não foi possivel se conectar ao banco de dados');

//Informando as variaveis para os campos do site.
$email_emails = mysqli_real_escape_string($conexao, $_POST['email_emails']);
$senha_emails = mysqli_real_escape_string($conexao, $_POST['senha_emails']);
$cliente_emails = mysqli_real_escape_string($conexao, $_POST['cliente_emails']);
$data_emails = mysqli_real_escape_string($conexao, $_POST['data_emails']);
  
//Inserir no banco de dados as informações do form.
$query_sql_emails="INSERT INTO `emails` (`email`, `senha`, `cliente`, `data`) VALUES ('$email_emails', '$senha_emails', '$cliente_emails', '$data_emails')";

//Consulta se deu certo.
$result = mysqli_query($conexao, $query_sql_emails);
$row = mysqli_num_rows($result);
if ($row) {
    echo ("Email enviado com sucesso.");
} else {
    echo ("Algo deu errado.");
}
$mysqli -> close();
?>














?>