<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/login.css" rel="stylesheet">
</head>
  <body class="text-center">
    <form action="autenticacao.php" class="form-signin" method="POST">
    <?php
      if(isset($_SESSION['nao_autenticado'])):
    ?>
    <div class="alert alert-danger" role="alert" >
      ERRO: Usuário ou Senha incorretos.
    </div>
    <?php
      endif;
      unset($_SESSION['nao_autenticado']);
    ?>

      <img src="img/logo.jpg" width="70px" height="70px">
      <h1 class="h3 mb-3 font-weight-normal"><strong>Realize seu login</strong></h1>
      
        <label for="inputEmail" class="sr-only">Usuário</label>
        <input name="login" id="inputEmail" class="form-control" placeholder="Seu Usuário" required>

        <label for="inputPassword" class="sr-only">Senha</label>
        <input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Senha" required>

      <input type="submit" class="btn btn-lg btn-primary btn-block" value="Login"></button>
      <a href="cadastro.php"><strong>Se você não tiver cadastro, clique aqui!</strong></a>
    </form>
  </body>
</html>
