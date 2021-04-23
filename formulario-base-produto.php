<?php 
require_once("logica-usuarios.php");

verificarSegurancaUsuario();
?>

<table class="table">
	<input type="hidden" name="id" value="<?=$produto['id']?>">
	<tr>
		<td>
			Nome:
		</td>
		<td>
			<input type="text" name="nome" class="form-control" value="<?=$produto['nome']?>" required>
		</td>
	</tr>
	<tr>
		<td>
			Valor:
		</td>
		<td>
			<input type="number" name="valor" class="form-control" value="<?=$produto['valor']?>" required>
		</td>
	</tr>
	<tr>
		<td>
			Descrição:
		</td>
		<td>
			<textarea name="descricao" class="form-control"><?=$produto['descricao']?></textarea>	
		</td>
	</tr>
	<tr>
		<td>
			Categoria:
		</td>
		<td>
			<select class="form-control" name="id_categoria">
				<?php 
					foreach ($categorias as $categoria) {
						$categoriaSelecionada = $produto['id_categoria'] == $categoria['id'];
						$selecionado = $categoriaSelecionada ? "selected = 'selected'" : ""; ?>
						<option value="<?=$categoria['id']?>" <?=$selecionado?>><?=$categoria['nome']?></option> <?php 
					}
				?>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			
		</td>
		<td>
			<input type="checkbox" name="usado" value="true" <?=$usado?>> Usado
		</td>
	</tr>
	<tr>
		<td>
			
		</td>
		<td>
			<button class="btn btn-primary"><?=$botaoSubmit?></button>
		</td>
	</tr>
</table>