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
  <link rel="stylesheet" type="text/css" href=style/relatorio.css />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">Meta apolo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastro
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Clientes</a></li>
            <li><a class="dropdown-item" href="#">Sites</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="relatorios.php">Relatórios</a>
        </li>
      </ul>
      <div class="d-flex">
      	<label class="mr-3"><?php echo $nomeUser; ?></label>
      	<a href="logout.php">Sair</a>
      </div>
    </div>
  </div>
</nav>

<!-- navibar -->
<nav class="div_for_flex">
  <nav class="top_head_nav">
  <nav class="middle_head_nav">
  <a href="index.php">Dashboard</a>
  </nav>
  <nav class="middle_head_nav">
  <a href="vendas.php">Vendas</a>
  </nav>
  <nav class="middle_head_nav">
  <a href="sites.php">Sites</a>
  </nav>
  <nav class="middle_head_nav">
  <a href="emails.php">Emails</a>
  </nav>
</nav>
<section>
  <article>
    <div class="nav_info_dash">
      <aside class="nav_info_dash_emails">
        <form action="recebe_emails.php" method="POST">
          <label>Email: </label>
              <input type="text" name="email" /> <br/>
          <label>Senha: </label>
              <input type="text" name="senha" /> <br/>
          <label>Cliente: </label>
              <input type="text" name="cliente" /> <br/>
          <label>Data: </label>
              <input type="date" name="data" /> <br/>
          <button>Enviar</button>
        </form>	
      </aside>	     
    </div>
  </article>
</section>
</nav>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>	

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
