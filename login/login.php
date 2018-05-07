<?php
session_start();
require_once 'config.php';

if (isset($_POST['email']) && !empty($_POST['email'])) {
	if (isset($_POST['senha']) && !empty($_POST['senha'])) {
		$email = addslashes($_POST['eamil']);
		$senha = addslashes($_POST['senha']);

		$sql = $pdo->query("SELECT * FROM usuarios");
		
		if (count($sql) > 0) {
			
			$dado = $sql->fetch();

			$_SESSION['id'] = $dado['id'];

			header("Location: index.php");

		}
	}
}
?>


<form method="POST">
	Email:
	<input type="text" name="email"><br/><br/>

	Senha:
	<input type="text" name="senha"><br/><br/>

	<input type="submit" name="login" value="Login" />
</form>

