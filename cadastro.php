<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cadastro.css" rel="stylesheet">
  </head>
  <body>
    <form action="cadastrar.php" class="form-signin" method="POST">
      <div class="text-center mb-4">
        <img src="img/logo.jpg" width="70" height="70">
        <h1 class="h3 mb-3 font-weight-normal">Realize o seu cadastro !</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, doloremque. Fuga, ipsa? Voluptates ad velit nisi possimus temporibus culpa dignissimos sunt minima unde aut rem, error impedit accusantium qui delectus.</p>
      </div>

      <div class="form-label-group">
        <input type="name" name="nome" id="inputPassword" class="form-control" placeholder="Nome" maxlength="20" required>
        <label for="inputPassword">Nome</label>
      </div>

      <div class="form-label-group">
            <input type="email" name="email" id="inputPassword" class="form-control" placeholder="Informe seu Email" maxlength="50" required>
            <label for="inputPassword">E-mail</label>
        </div>

      <div class="form-label-group">
        <input type="senha" name="senha" id="inputPassword" class="form-control" placeholder="Senha" maxlength="32" required>
        <label for="inputPassword">Senha</label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <a href="login.php"><strong> Se tiver cadastro, volte para a página de Login !</strong></a>
    </form>
  </body>
</html>