<?php 
session_start();
include ('verifica_sessao.php');

//Verificando se conseguiu conectar ao banco de dados
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'root');
define('BD', 'apolo20_dev');
$conexao = mysqli_connect(HOST, USUARIO, SENHA, BD) or die ('Não foi possivel se conectar ao banco de dados');

//Informando as variaveis para do usuario e senha digitadas
$cliente = mysqli_real_escape_string($conexao, $_POST['cliente']);
$dominio = mysqli_real_escape_string($conexao, $_POST['dominio']);
$data = mysqli_real_escape_string($conexao, $_POST['data']);
$valor = mysqli_real_escape_string($conexao, $_POST['valor']);

if ($mysqli -> connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
  
//Buscando no BD o usuario digitado
$query_sql="INSERT INTO `sites` (`cliente`, `dominio`, `data`, `valor`) VALUES ('$cliente', '$dominio', '$data', '$valor')";

$result = mysqli_query($conexao, $query_sql);

$row = mysqli_num_rows($result);

if ($result) {
    echo ("Site enviado com sucesso :D");
} else {
    echo ("Algo deu errado :C");
}
$mysqli -> close();
  ?>