<?php
include('conexao.php');

$login = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT * from usuario where nome = '{$login}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);


if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: questao.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: login.php');
	exit();
}
