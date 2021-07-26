<?php
//Conexão no banco de dados
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'root');
define('BD', 'apolo20_dev');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, BD) or die ('Não foi possivel se conectar ao banco de dados');
?>