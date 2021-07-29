<?php 
session_start();
include ('verifica_sessao.php');
?>

<!DOCTYPE html>
<html>

<!-- conteudo do head -->
<head>
	<meta charset="utf-8">
	<meta nome="viewport" content="width=device-width, innitial-scale=1.0">
	<meta http-equiv="X-UA-Conpatible" content="ie=edge"> 
	<title>Sitema Apolo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href=style/index.css />
</head>
<body>

<form action="recebe_sites.php" method="POST">
    <label>Cliente: </label>
        <input type="text" name="cliente" /> <br/>
    <label>Dominio: </label>
        <input type="text" name="dominio" /> <br/>
    <label>Data: </label>
        <input type="date" name="data" /> <br/>
    <label>Valor: </label>
        <input type="float" name="valor" /> <br/>
    <button>Enviar</button>
</form>	

</body>

<!-- conteudo do footer -->
<footer>
  <div class="footer_cop">
    <ul class="part_footer">
      <li>
        <a href="contato">Contato</a>
      </li>
    </ul>
    <ul class="part_footer">
      <li>
        <a href="blog">blog</a>
      </li>
    </ul>
    <ul class="part_footer">
      <li>
        <a href="sobre">sobre</a>
      </li>
    </ul>
  </div>
</footer>
</html>
