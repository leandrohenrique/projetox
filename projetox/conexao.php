<?php

$dsn =  "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "root";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	// $nome = "Kelly";
	// $email = "kellybnz@hotmail.com";
	// $senha = md5("2435");

	// Inserindo valore no banco de dados
	
	/*$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
	$sql = $pdo->query($sql);

	echo "Ultimo inserido é: ". $pdo->lastInsertId();*/

	// Atualizar valore na tabela

	/*$sql = "UPDATE usuarios SET senha = '$senha' WHERE id = '1'";
	$pdo->query($sql);
	echo "<h1>Dado alterado com sucesso!</h1><br/>";*/

	// Deletar valor do banco de dados

	/*$sql = "DELETE FROM usuarios WHERE id = '5'";
	$pdo->query($sql);*/

	//Buscando valores no banco de dados
	$sql = "SELECT * FROM usuarios";
	$sql = $pdo->query($sql);

	if (count($sql) > 0) {
		foreach($sql->fetchAll() as $usuarios) {
			echo "<hr>";
			echo "Nome: ". $usuarios['nome'] . "<br/>";
			echo "Email: ". $usuarios['email'] . "<br/>";
			echo "Senha: " . $usuarios['senha']."<br/>" ;
		}
	} else {
		echo 'Não há usuário cadastrado!';
	}
}catch (PDOException $e) {
	echo "A conexão falhou " .$e->getMessage();
}