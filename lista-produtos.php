<?php 
require_once("cabecalho.php");
require_once("logica-usuarios.php");
require_once("banco-produtos.php");

verificarSegurancaUsuario();
verificarMensagem();

$produtos = listarProdutos($conexao);
?>
<h2>Produtos</h2><br/><br/>
<table class="table">
	<tr>
		<td>
			<b>Nome</b>	
		</td>
		<td>
			<b>Valor</b>
		</td>
		<td>
			<b>Descricão</b>
		</td>
		<td>
			<b>Categoria</b>
		</td>
		<td>
			
		</td>
		<td>
			
		</td>
	</tr>
	<?php 
		foreach ($produtos as $produto) { ?>
	<tr>
		<td>
			<?=$produto['nome']?>
		</td>
		<td>
			<?=$produto['valor']?>
		</td>
		<td>
			<?=$produto['descricao']?>
		</td>
		<td>
			<?=$produto['categoria_nome']?>
		</td>
		<td>
			<form action="formulario-alterar-produto.php" method="post">
				<input type="hidden" name="id" value="<?=$produto['id']?>">
				<button class="btn btn-success">Alterar</button>
			</form>
		</td>
		<td>
			<form action="remover-produto.php" method="post">
				<input type="hidden" name="id" value="<?=$produto['id']?>">
				<button class="btn btn-danger">Remover</button>
			</form>
		</td>
	</tr>
	<?php 
	} ?>
</table>

<?php 
require_once("rodape.php");
?>
