<?php
include 'verifica_login.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

</head>
<body>
<h2>Olá,<?php echo $_SESSION['usuario'];?></h2>
<h2><a href="logout.php">Sair</h2>
</body>
</html>
