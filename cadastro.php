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
    <form class="form-signin" method="$_POST">
      <div class="text-center mb-4">
        <img src="img/logo.jpg" width="70" height="70">
        <h1 class="h3 mb-3 font-weight-normal">Realize o seu cadastro !</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, doloremque. Fuga, ipsa? Voluptates ad velit nisi possimus temporibus culpa dignissimos sunt minima unde aut rem, error impedit accusantium qui delectus.</p>
      </div>

      <div class="form-label-group">
        <input type="nome" id="inputNome" class="form-control" placeholder="Nome Completo" required autofocus>
        <label for="inputEmail">Nome Completo</label>
      </div>

      <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control" placeholder="Endereço de email" required autofocus>
            <label for="inputEmail">Endereço de email</label>
        </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
        <label for="inputPassword">Senha</label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    </form>
  </body>
</html>