<?php 
require_once("conecta.php");

function inserirProduto($conexao, $nome, $valor, $descricao, $id_categoria, $usado) {
	$query = "insert into produtos (nome, valor, descricao, id_categoria, usado) values ('{$nome}', '{$valor}', '{$descricao}', {$id_categoria}, {$usado})";
	$resultado = mysqli_query($conexao, $query);
	return $resultado;
}

function alterarProduto($conexao, $id, $nome, $valor, $descricao, $id_categoria, $usado) {
	$query = "update produtos set nome = '{$nome}', valor = '{$valor}', descricao = '{$descricao}', id_categoria = {$id_categoria}, usado = {$usado} where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return $resultado;
}

function removerProduto($conexao, $id) {
	$query = "delete from produtos where id = '{$id}'";
	$resultado = mysqli_query($conexao, $query);
	return $resultado;
}

function buscarProduto($conexao, $id) {
	$query = "select * from produtos where id = '{$id}'";
	$resultado = mysqli_query($conexao, $query);
	$produto = mysqli_fetch_assoc($resultado);
	return $produto;
}

function listarProdutos($conexao) {
	$produtos = array();
	$query = "select c.nome as categoria_nome, p.* from categorias as c, produtos as p where c.id = p.id_categoria";
	$resultado = mysqli_query($conexao, $query);
	while ($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}
	return $produtos;
}