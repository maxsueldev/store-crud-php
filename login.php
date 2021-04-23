<?php 
require_once("banco-usuarios.php");
require_once("logica-usuarios.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = buscarUsuario($conexao, $email, $senha);

if($usuario == null) { 
	$_SESSION['danger'] = 'Email ou senha inválido! Tente novamente';
	header("Location: index.php");
	die();
} else {
	$_SESSION['success'] = 'Usuário logado com sucesso!';
	logarUsuario($email);
	header("Location: index.php");
	die();	
}
?>