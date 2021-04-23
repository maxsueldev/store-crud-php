<?php 
require_once("cabecalho.php");
require_once("banco-produtos.php");
require_once("banco-categorias.php");
require_once("logica-usuarios.php");

verificarSegurancaUsuario();

$id = $_POST['id'];

$produto = buscarProduto($conexao, $id);
$categorias = listarCategorias($conexao);

$usado = $produto['usado'] ? "checked='checked'" : "";
$botaoSubmit = "Alterar";
?>

<h2>Alteração de produto</h2><br/>

<form action="alterar-produto.php" method="post">
	<?php 
		require_once("formulario-base-produto.php");
	?>	
</form>

<?php 
require_once("rodape.php");
?>