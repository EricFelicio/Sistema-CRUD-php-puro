<?php
include('conexao.php')
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Formulário de Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href=style/login.css />
</head>

<body>
  <div class="container" >
    <div class="content">     

      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="POST" action="login_config.php" id="form_login"> 
          <h1>Login</h1> 
          <div> 
            <label for="usuario">Login</label>
            <input id="nome_login" name="usuario" required="required" type="text" autofocus/>
          </div>
           
          <div> 
            <label for="senha">Senha</label>
            <input id="senha_login" name="senha" required="required" type="password"/> 
          </div>
           
          <div class="checkbox"> 
          <label for="manterlogado">Manter logado</label>
            <input type="checkbox" name="manterlogado" id="manterlogado"/> 
          </div>
          
          <div> 
            <input type="submit" value="Logar" /> 
          </div>

        </form>
      </div>
    </div>
  </div>  
</body>
</html>