<?php
include 'verifica_login.php';
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Home - Projeto Quiz</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
        </div>
      </header>
      <main role="main" class="inner cover">
        <h1 class="cover-heading">Olá, <?php echo $_SESSION['usuario'];?></h1>
        <h2 class="cover-heading">Você é capaz de resolver o desafio ?</h2>
        <p class="lead">O quiz é composto por 8 perguntas desafiadoras, será você capaz de responde-las corretamente? Seja atento e boa sorte!</p>
        <p class="lead">
          <a href="questao.php" class="btn btn-lg btn-secondary">Clique para começar o quiz!</a> 
        </p>
      </main>
      <footer class="mastfoot mt-auto">
        <div class="inner">
        <b>Projeto Quiz - 2021</b>
        <h2><a href="logout.php">Sair</h2>
        </div>
      </footer>
    </div>

   
  </body>
</html>