<?php 
session_start();
include ('verifica_sessao.php');
?>

<html>
<head>
	<meta charset="utf-8">
	<meta nome="viewport" content="width=device-width, innitial-scale=1.0">
	<meta http-equiv="X-UA-Conpatible" content="ie=edge"> 
	<title>Sites</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href=style/index.css />
</head>

<body>
<form action="recebe_emails.php" method="POST">
    <label>Email: </label>
        <input type="text" name="email_emails" /> <br/>
    <label>Senha: </label>
        <input type="text" name="senha_emails" /> <br/>
    <label>Cliente: </label>
        <input type="text" name="cliente_emails" /> <br/>
    <label>Data: </label>
        <input type="date" name="data_emails" /> <br/>
    <button>Enviar</button>
</form>	
</body>

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
