<?php 

session_start();

function verificarMensagem() {
	if(isset($_SESSION['success'])) { ?> 
		<p class="alert-success"><?=$_SESSION['success']?></p> <?php 
	} else if(isset($_SESSION['danger'])) { ?>
		<p class="alert-danger"><?=$_SESSION['danger']?></p> <?php 
	}
	unset($_SESSION['success']);
	unset($_SESSION['danger']);
}

function logarUsuario($email) {
	$_SESSION['email'] = $email;
}

function verificarLogado() {
	return isset($_SESSION['email']);
}

function logout() {
	session_destroy();
	session_start();
}

function verificarSegurancaUsuario() {
	if(!verificarLogado()) { 
		$_SESSION['danger'] = "Você não tem acesso a essa página!";
		header("Location: index.php");
		die();
	}
}