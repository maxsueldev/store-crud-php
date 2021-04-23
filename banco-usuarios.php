<?php 
require_once("conecta.php");

function buscarUsuario($conexao, $email, $senha) {
	$email = mysqli_escape_string($conexao, $email);
	$senha = md5($senha);
	$query = "select * from usuarios where email = '{$email}' and senha = '{$senha}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}