<?php 
require_once("cabecalho.php");
require_once("logica-usuarios.php");

verificarMensagem();
?>

<?php 
	if(verificarLogado()) { ?>
		<h3>Bem vindo!</h3>
		<p>Você está logado como <?=$_SESSION['email']?> <a href="logout.php">Deslogar</a></p> <?php 
	} else { ?>
		<h1>Minha Loja</h1><br/>
		<form action="login.php" method="post">
			<table class="table">
				<tr>
					<td>
						Email:
					</td>
					<td>
						<input type="text" name="email" class="form-control">
					</td>
				</tr>
				<tr>
					<td>
						Senha:
					</td>
					<td>
						<input type="password" name="senha" class="form-control">
					</td>
				</tr>
				<tr>
					<td>
				
					</td>
					<td>
						<button type="submit" class="btn btn-primary">Entrar</button>
					</td>
				</tr>
			</table>	
		</form> <?php 
	}
?>

<?php 
require_once("rodape.php");
?>