<?php 
require_once("logica-usuarios.php");

logout();
$_SESSION['success'] = "Usuário deslogado com sucesso!";
header("Location: index.php");
die();