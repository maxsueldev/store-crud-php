<?php 
require_once("banco-produtos.php");
require_once("logica-usuarios.php");

verificarSegurancaUsuario();

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

if(inserirProduto($conexao, $nome, $valor, $descricao, $id_categoria, $usado)) { 
	$_SESSION['success'] = "O produto <?=$nome?> foi inserido com sucesso!";
	header('Location: lista-produtos.php');
	die();
} else {
	$error = mysqli_error($conexao);
	$_SESSION['danger'] = "Ocorreu um erro e o produto <?=$nome?> não foi inserido. Erro: <?=$error?>";
	header('Location: lista-produtos.php');
	die();
}	

?>