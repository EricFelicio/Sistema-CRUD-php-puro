<?php
session_start();
include ('verifica_sessao.php');

//Verificando se conseguiu conectar ao banco de dados.
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'root');
define('BD', 'apolo20_dev');
$conexao = mysqli_connect(HOST, USUARIO, SENHA, BD) or die ('Não foi possivel se conectar ao banco de dados');
if ($conexao->connect_error) {
  die("Conexão falhou: " . $conexao->connect_error);
}

mysqli_set_charset($conexao, "utf8");
$relatorio = "select cliente, dominio, data, valor from sites order by id";

$resultado = $conexao->query($relatorio);

if ($resultado->num_rows > 0) {
while($dados = $resultado->fetch_assoc()) {
  echo 'cliente:' ,$dados['cliente'], '<br>';
  echo 'dominio:' ,$dados['dominio'], '<br>';
  echo 'valor:' ,$dados['valor'], '<br>';
  echo 'data:' ,date('d/m/Y', strtotime($dados["datacad"])), '<br>';
}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Sites</title>
    <meta charset="utf-8">
  </head>
  <body>
    <table>
        <tr>
            <td>Cliente: </td>
            <td>Dominio: </td>
            <td>Data: </td>
            <td>Valor: </td>
        </tr>
        <?php while($dados = $con->fetch_array()) { ?>
        <tr>
            <td><?php echo $dados["Diminio"];?> </td>
            <td><?php echo $dados["Cliente"];?> </td>
            <td><?php echo $dados["Data"];?> </td>
            <td><?php echo $dados["Valor"];?> </td>
        </tr>
        <?php } ?>
    </table>
  </body>
</html>