<?php
//requisito de sessão e do conexão.php
session_start();
include('conexao.php');

//Verificando se passou pelo login, senão, redireciona pro index.php
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: login.php');
	exit();
}

//Informando as variaveis para do usuario e senha digitadas
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

//Buscando no BD o usuario digitado
$query = "select * from apolo20_dev.usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

//Validando se for verdadeiro/1 continuar, senão, voltar pro index.php	
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	header('Location: index.html');
	exit();
} 
	else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: login.php');
	exit();
}