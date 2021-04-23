<?php 
require_once("cabecalho.php");
require_once("logica-usuarios.php");
require_once("banco-categorias.php");

verificarSegurancaUsuario();

$produto = array("nome" => "", "valor" => "", "descricao" => "", "id_categoria" => "1");
$usado = "";

$categorias = listarCategorias($conexao);
$botaoSubmit = "Cadastrar";
?>
<h2>Formulário de produto</h2><br/>
<form action="novo-produto.php" method="post">
	<?php 
		require_once("formulario-base-produto.php");
	?>
</form>

<?php 
require_once("rodape.php");
?>
