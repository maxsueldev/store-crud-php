<?php 
require_once("banco-produtos.php");
require_once("logica-usuarios.php");

verificarSegurancaUsuario();

$id = $_POST['id'];




$nome = $_POST['nome'];
$valor = $_POST['valor'];
$descricao = $_POST['descricao'];
$id_categoria = $_POST['id_categoria'];
$usado = $_POST['usado'];

if(isset($usado)) {
	$usado = "true";
} else {
	$usado = "false";
}

if(alterarProduto($conexao, $id, $nome, $valor, $descricao, $id_categoria, $usado)) {
	$_SESSION['success'] = "Produto <?=$nome?> alterado com sucesso!";
	header("Location: lista-produtos.php");
	die();
} else {
	$_SESSION['danger'] = "Ocorreu um erro e o produto <?=$nome?> não foi alterado!";
	header("Location: lista-produtos.php");
	die();
}

?>
