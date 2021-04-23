<?php 
require_once("banco-produtos.php");
require_once("logica-usuarios.php");

verificarSegurancaUsuario();

$id = $_POST['id'];

if(removerProduto($conexao, $id)) {
	$_SESSION['success'] = "O produto foi removido com sucesso!";
	header("Location: lista-produtos.php");
	die();
} else {
	$_SESSION['danger'] = "Ocorreu um erro e o produto não pode ser removido!";
	header("Location: lista-produtos.php");
	die();
}

?>